<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\course;
use App\Models\quiz;
use App\Models\answer;
use App\Models\enrolment;
use App\Models\meterials;

class user extends Controller
{
    

    public function index()
    {
        
       
            return view('user.index');
      
    }

    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        
        if ($usertype == '0') 
        {
            return view('admin.home');
        } 
        elseif($usertype == '1')
        {
            $category=category::all();
            return view('user.home',compact('category'));
        }
        
    }

    public function course_page($category_name)
    {
        
            $courses =  DB::table('courses')
            ->where('category', $category_name)
            ->get();
            return view('user.course_page',compact('courses'));
      
    }

    public function course_meterial($id)
    {
        
        $courses = DB::table('materials')
        ->where('cid', $id)
        ->paginate(3);  

        foreach ($courses as $course) {
            if (!is_null($course->type)) 
            { 
                $quiz = DB::table('quizzes')->
                join('materials', 'quizzes.cid', '=', 'materials.cid')->
                where('qid', $course->id)->first();
               
            }
        }

            return view('user.course_meterial',compact('courses','quiz'));
      
    }

    

    public function course_intro($id)
    {
        $lid = Auth::user()->id;
        $courses = DB::table('categories')->join('courses', 'categories.category_name', '=', 'courses.category')
       
        ->paginate(3);  // Paginate with 10 courses per page

        $chk=DB::table('enrolments')->where('cid','=',$id)->where('lid','=',$lid)->first();

            return view('user.course_intro',compact('courses','chk'));
      
    }

    public function course_enrollment_free($id,$name)
    {
   
        $lid = Auth::user()->id;
        $booking = new enrolment;
        $booking->cid= $id;
        $booking->cname= $name;
        $booking->lid = $lid;
        $booking->save();

        session()->flash('message', 'Enrolled successfully');
        return redirect()->back();
    }

    public function quiz($id)
    {
        
        $quiz = DB::table('quizzes')
        ->where('qid', $id)
        ->get();  
            return view('user.quiz',compact('quiz','id'));
      
    }

    public function submmit_quiz(Request $request, $id)
{
    $user_id = Auth::user()->id;

    foreach ($request->input('questions') as $question_id => $selected_answer) {
        $quizAnswer = new answer;
        $quizAnswer->lid = $user_id;
        $quizAnswer->qid = $id;
       // Assuming you have a question_id column
        $quizAnswer->answer = $selected_answer;  // Store the selected answer for this question
        $quizAnswer->save();
    }

    // Optionally, you can calculate the score or perform any other actions

    // Redirect or return a response as needed
    session()->flash('message', 'Quiz submitted successfully');
    return redirect()->back();
}



    

}
