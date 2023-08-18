

<?php

use App\Http\Controllers\Api\UserController;
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

Route::get('/isUser/{email}',[UserController::class,'isUser']);
Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']); 
Route::get('/user/info',[UserController::class,'getUser'])->middleware('auth:api'); 


