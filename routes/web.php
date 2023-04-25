<?php

use Illuminate\Support\Facades\Route;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about',function(){
    $about = "This is about page02.";
    $about2 = "This is about two.";
    //return view('about.index',['about'=>$about]); // 陣列key值帶入到view可作為變數使用
    return view('about.index',compact('about','about2')); // compact('about') 等同於 ['about'=>$about]
})->name('about');

Route::get('contact',function(){
    return view('contact');
});

Route::get('home',function(){
    $blogs = [
        [
            'title' => 'Title one',
            'body' => 'This is a body text 1',
            'status'=> 1,
        ],
        [
            'title' => 'Title two',
            'body' => 'This is a body text 2',
            'status'=> 1,
        ],
        [
            'title' => 'Title three',
            'body' => 'This is a body text 3',
            'status'=> 0,
        ],
        [
            'title' => 'Title four',
            'body' => 'This is a body text 4',
            'status'=> 1,
        ],
    ];
    return view('home',compact('blogs'));
});

// URL參數帶id值
Route::get('contact/{id}',function($id){
    return $id;
})->name('edit-contact');

// Route::get('home',function(){
//     return "<a href='".route('edit-contact',12)."'>About</a>";
// });

// Route Grouping Route群組(方便管理、修改)

Route::group(['prefix'=>'user'],function(){

    Route::get('/',function(){
        return "<h1>Customer List</h1>";
    });
    
    Route::get('/create',function(){
        return "<h1>Customer Create</h1>";
    });
    
    Route::get('/show',function(){
        return "<h1>Customer Show</h1>";
    });

});

// Route Methods

/**
 * Get - Request a resource 檢視資料 R
 * POST - Create a new resources 新增資料 C
 * PUT - Update a resource 修改資料(無論是否變動都會修改，若無參數資料則原有的資料更新成空) U
 * DELETE - Delete a resource 刪除資料 D
 * PATCH - Modify a resource 修改資料(有變動的地方才修改)
 */

// Fallback Route 提供更好的404頁面

Route::fallback(function(){
    return "ROUTE NOT EXIST!!";
});