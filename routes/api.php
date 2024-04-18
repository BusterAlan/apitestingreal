<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\Qvsapireq;
use App\Http\Controllers\Qvsimccontroll;
use App\Http\Controllers\Qvshealthstate;
use App\Http\Controllers\CorreoController;
use App\Http\Controllers\LoginController;

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

Route::middleware('auth:sanctum') -> get('/user', function (Request $request) { return $request->user(); });

// // //

Route::post('/userdata', [App\Http\Controllers\CorreoController::class, 'login']);

Route::post('/results', [App\Http\Controllers\Qvsapireq::class, 'store']);

Route::post('/imcval', [App\Http\Controllers\Qvsimccontroll::class, 'other']);

Route::post('/healthstateval', [App\Http\Controllers\Qvshealthstate::class, 'mine']);

// // //

Route::post('/uservalidation/register', [App\Http\Controllers\LoginController::class, 'register']);
Route::post('/uservalidation/login', [App\Http\Controllers\LoginController::class, 'login']);
Route::post('/uservalidation/logout', [App\Http\Controllers\LoginController::class, 'logout']);

// // //

