<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user;
use App\Http\Controllers\admin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[user::class,'redirect']);

route::get('/',[user::class,'index']);

route::get('/view_category',[admin::class,'view_category']);

route::post('/add_category',[admin::class,'add_category']);

route::get('/delete_category/{id}',[admin::class,'delete_category']);

route::get('/edit_category/{id}',[admin::class,'edit_category']);

route::post('/category_edit/{id}',[admin::class,'category_edit']);

route::get('/add_course',[admin::class,'add_course']);

route::post('/upload_course',[admin::class,'upload_course']);

route::get('/course_view',[admin::class,'course_view']);

route::get('/course_delete/{id}',[admin::class,'course_delete']);

route::get('/course_data/{id}',[admin::class,'course_data']);

route::post('/store/{data}',[admin::class,'store']);

// -------------------------------------------USER--------------------------------------------------

route::get('/course_page/{course_name}',[user::class,'course_page']);

route::get('/course_meterial/{course_name}',[user::class,'course_meterial']);

route::get('/course_intro/{course_name}',[user::class,'course_intro']);

route::get('/course_enrollment_free/{id}/{name}',[user::class,'course_enrollment_free']);

