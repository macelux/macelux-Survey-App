<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/questionaire/create', 'QuestionairesController@create'); 
Route::post('/questionaire', 'QuestionairesController@store'); 
Route::get('/questionaire/{questionaire}', 'QuestionairesController@show'); 

Route::get('/questionaire/{questionaire}/questions/create', 'QuestionController@create'); 
Route::post('/questionaire/{questionaire}/questions', 'QuestionController@store'); 


Route::get('/surveys/{questionaire}-{slug}', 'SurveyController@show'); 
