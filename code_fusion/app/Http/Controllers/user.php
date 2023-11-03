<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\course;
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
        
            $courses =  DB::table('meterials')
            ->where('cid', $id)
            ->get();
            return view('user.course_page',compact('courses'));
      
    }


    

}
