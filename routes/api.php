<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::post('register', RegisterController::class);
Route::post('login', LoginController::class);

Route::get('articles/{article}', [ArticleController::class, 'show']);
Route::get('articles', [ArticleController::class, 'index']);

Route::middleware('auth:sanctum')->group(function () {
   Route::post('logout', LogoutController::class);
   Route::get('user', UserController::class);

   Route::post('new-article', [ArticleController::class, 'store']);
   Route::patch('update-article/{article}', [ArticleController::class, 'update']);
   Route::delete('delete-article/{article}', [ArticleController::class, 'destroy']);
});