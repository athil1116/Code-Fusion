<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
            return view('user.home');
        }
        
    }
    

}
