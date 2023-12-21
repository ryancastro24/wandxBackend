<?php

use App\Http\Controllers\DescriptionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SpecificQuestionsController;
use App\Http\Controllers\TouristSpotController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(QuestionController::class)->group(function () {

    Route::get('/questions',  'index');
    Route::delete('/questions/{id}',  'destroy');
    Route::post('/questions', 'store')->name('question.store');
});

Route::controller(TouristSpotController::class)->group(function () {

    Route::get('/tourist_spot',  'index');
    Route::post('/tourist_spot', 'store')->name('tourist_spot.store');
});


Route::controller(SpecificQuestionsController::class)->group(function(){
    Route::get('/specific_questions/{id}', 'index');
    Route::post('/specific_questions', 'save_specific_questions')->name('specific_questions.save');
}); 


Route::controller(DescriptionController::class)->group(function(){
    Route::get('/descriptions', 'index');
    Route::post('/descriptions', 'save_descriptions')->name('description.save');
}); 
