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
    return view('pages.home');
});

Route::get('/message/t', function (){
    return view('pages.chat');
});
Route::get('/helpline', function (){
    return view('pages.helpline');
});
Route::get('/suitation', function (){
    return view('pages.suitation');
});
Route::get('/form',function ()
{
    return view('Form.index');
});

Auth::routes();
Route::resources([
    'question'=>'QuestionController',
    'category'=>'CategoryController',
    'reply'=>'ReplyController',
]);

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
});
