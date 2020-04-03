<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('/question','API\QuestionController');

Route::apiResource('/category','API\CategoryController');

Route::apiResource('/question/{question}/reply','API\ReplyController');

Route::post('/like/{reply}','API\LikeController@likeIt');

Route::delete('/like/{reply}','API\LikeController@unLikeIt');
