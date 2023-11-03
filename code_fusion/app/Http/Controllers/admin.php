<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator as ValidatorFacade;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Session as SessionFacade;
use Illuminate\Support\Facades\URL as URLFacade;

class admin extends Controller
{
    
    public function view_category()
    {
        $datas=category::all();
        return view('admin.category',compact('datas'));
    }

    public function add_category(Request $request)
    {
        $data=new category;
        $data->category_name=$request->category;
        $data->description=$request->desc;
        $data->save();
        if ($data->save()) {
            return redirect()->back()->with('message', 'Category added successfully');
        } else {
            return redirect()->back()->with('error','Failed to add category');
        }

    }

    public function delete_category($id)
    {
        $data = category::find($id);

            if ($data) 
            {
                 $data->delete();
                 return redirect()->back()->with('messagee', 'Category deleted successfully');
            } 
            else 
            {
                 return redirect()->back()->with('errore', 'Failed to delete category');
            }
    }

    public function edit_category($id)
    {
        $datas=category::find($id);
        return view('admin.category_edit',compact('datas'));
    }

    public function category_edit(Request $request ,$id)
    {
        $datas=category::find($id);
        $datas->category_name = $request->input('category_name');
        $datas->save();
        return redirect()->back()->with('message', 'Category Edited Successfully');
    }



    
}
