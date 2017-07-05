<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::auth();
//首页入口
Route::get('/', function () {
    return redirect('/home');
});
Route::get('/home', 'HomeController@index');

//对职位进行操作
Route::resource('job','JobController');

//对应聘者进行操作
//Route::resource('interviewee','IntervieweeController');
Route::get('/interviewee/add/{job_id}','IntervieweeController@add');
Route::resource('person','PersonController');

//邀请面试
Route::get('/interview/create/{person_id}','InterviewController@add');
Route::resource('interview','InterviewController');