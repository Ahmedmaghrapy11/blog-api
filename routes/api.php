<?php

use App\Http\Controllers\BlogController;
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

Route::get('blogs', [BlogController::class, 'index']);
Route::post('blogs/create', [BlogController::class, 'store']);
Route::get('blogs/{id}', [BlogController::class, 'show']);
Route::post('blogs/update/{id}', [BlogController::class, 'update']);
Route::delete('blogs/delete/{id}', [BlogController::class, 'destroy']);
