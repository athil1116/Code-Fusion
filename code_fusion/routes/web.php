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
