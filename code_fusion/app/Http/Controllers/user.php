<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class user extends Controller
{
    // public function redirect()
    // {
    //     $usertype = Auth::user()->usertype;
        
    //     if ($usertype == '1') 
    //     {
    //         $dr = DB::table('doctors')->limit(6)->get();

    //         return view('user.user',compact('dr'));
    //     } 
    //     elseif($usertype == '2')
    //     {

    //         $dr = DB::table('doctors')->limit(6)->get();

    //         return view('doctor.home',compact('dr'));
    //     }
    //     elseif($usertype == '0')
    //     {
    //         return view('admin.home');
    //     }
    //     elseif($usertype == '3')
    //     {
            
    //     $date = date('Y-m-d');
    //     $data= DB::table('bookings')

    //             ->join('patients', 'bookings.lid', '=', 'patients.reg_id')
    //             ->where('bookings.date','=', $date)
    //             ->get();
    //         return view('patient.home',compact('data'));
    //     }
    // }
    

    public function index()
    {
        
       
            return view('user.index');
      
    }

}
