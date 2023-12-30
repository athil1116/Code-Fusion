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
    $lid = Auth::user()->id;

    $courses = DB::table('materials')
        ->where('cid', $id)
        ->paginate(3);

    $quiz = []; 

    foreach ($courses as $course) {
        if (!is_null($course->type)) {
            $quizItem = DB::table('quizzes')
                ->join('materials', 'quizzes.cid', '=', 'materials.cid')
                ->where('qid', $course->id)
                ->first();

            if (!is_null($quizItem)) {
                $quiz[] = $quizItem; 
            }
        }
    }

    $status = DB::table('enrolments')
        ->where('cid', $id)
        ->where('lid', $lid)
        ->value('status');




    return view('user.course_meterial', compact('courses', 'quiz','status'));
}


    

    public function course_intro($id)
    {
        $lid = Auth::user()->id;
        $courses = DB::table('categories')->join('courses', 'categories.category_name', '=', 'courses.category')
       
        ->paginate(3);  

        $chk=DB::table('enrolments')->where('cid','=',$id)->where('lid','=',$lid)->first();

            return view('user.course_intro',compact('courses','chk'));
      
    }

    public function course_enrollment_free($id,$name)
    {
   
        $lid = Auth::user()->id;
        $booking = new enrolment;
        $booking->cid= $id;
        $booking->cname= $name;
        $booking->level= 0;
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
            $quizAnswer->ianswer = $selected_answer;  // Store the selected answer for this question
            $quizAnswer->save();
        }
    
        return redirect()->route('user.score', ['id' => $id]);

    }
    
    public function score($id)
    {
        $user_id = Auth::user()->id;

        DB::table('answers')
        ->join('quizzes', 'answers.qid', '=', 'quizzes.qid')
        ->where('answers.qid', $id) 
        ->update([
            'answers.result' => DB::raw('CASE WHEN quizzes.answer = answers.ianswer THEN 1 ELSE 0 END')
        ]);

        $score = DB::table('quizzes')
        ->join('answers', 'quizzes.qid', '=', 'answers.qid')
        ->where('answers.lid', $user_id)
        ->where('answers.qid', $id)
        ->where('answers.result', 1) 
        ->orderBy('answers.id', 'asc')
        ->get();
    
        
    

        $counts = DB::table('answers')
        ->where('lid', $user_id)
        ->where('qid', $id)
        ->where('answers.result', 1)
        ->count();

        $cid = DB::table('materials')
        ->where('id', $id)
        ->value('cid');
    

        DB::table('enrolments')
        ->where('lid', $user_id)
        ->where('cid', $cid)
        ->update([
            'level' => DB::raw('level + 1'),
            'status' => $id,
        ]);

    



return view('user.score', compact('score', 'counts','cid','id'));
    }

    public function compailer()
    {
        
       
            return view('user.compailer');
      
    }

    public function view_answer($id)
    {
        $answer = DB::table('quizzes')
        ->where('qid',$id )
        ->get();

        return view('user.answer',compact('answer','id'));
      
    }

    





    

}
