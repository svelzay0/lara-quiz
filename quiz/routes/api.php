<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Service\QuizResultService;
use App\Http\Controllers\Quiz\QuizController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('quiz/get_quiz', [QuizController::class, 'getQuiz']);
Route::post('quiz/get_results', [QuizController::class, 'getResults']);
