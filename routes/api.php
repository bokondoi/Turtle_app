<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\user_language;
use App\Models\user_word;
use App\Http\Controllers\UserLanguageController;
use App\Http\Controllers\UserWordController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

#User Language API

Route::get('/userLanguage', [UserLanguageController::class,'index']);

Route::post('/userLanguage',[UserLanguageController::class,'addLanguage']);

Route::put('/userLanguage/{user_language}', [UserLanguageController::class,'updateLanguage']);

Route::delete('/userLanguage/{user_language}', [UserLanguageController::class,'deleteLanguage']);

Route::get('/userLanguage/{user_language}',[UserLanguageController::class,'getLanguage']);

#User Word API 

Route::get('/userWord', [UserWordController::class,'index']);

Route::post('/userWord',[UserWordController::class,'store']);

Route::put('/userWord/{user_word}', [UserWordController::class,'update']);

Route::delete('/userWord/{user_word}', [UserWordController::class,'delete']);

Route::get('/userWord/{user_word}',[UserWordController::class,'getWords']);