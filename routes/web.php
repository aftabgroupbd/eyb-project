<?php

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

Route::get('/dashboard', 'AdminController@index');
//Route::get('welcome', 'QuestionController@ManageQuestion');
Route::get('/manage-question', 'QuestionController@ManageQuestion')->name('manage_question');
Route::get('/create-question/{id}', 'QuestionController@CreateQuestion')->name('create_question');
Route::get('/manage-module', 'QuestionController@ManageModule')->name('manage_module');
Route::get('/manage-students', 'StudentController@manage_student')->name('manage_student');
Route::get('/manage-teachers', 'TeachersController@manage_teachers')->name('manage_teachers');
//Route::get('/create-question', 'QuestionController@CreateQuestion')->name('create_question');
