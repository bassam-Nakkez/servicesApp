<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FaqController;
use App\Http\Controllers\Api\TrickestController;

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


Route::group(['prefix'=>"categories"],function (){
    Route::get('categories',[CategoryController::class,'index']);
    Route::get('all',[CategoryController::class,'indexWithOutPhoto']);
    Route::get('faqs',[FaqController::class,'index']);
    Route::get('/{faqs_id}',[FaqController::class,'getFaqsChild']);
});

Route::get('productsByCategoryId/{category_id}',[CategoryController::class,'getProductByCategory']);

Route::post('/tickets/becomeAnEmployee',[TrickestController::class,'add']);

Route::get('order/history',[OrderController::class , 'history']);


Route::get('order/upcomming',[OrderController::class , 'upcomming']);

Route::post('order/create/service',[OrderController::class , 'CreateService']);


Route::post('order/rating/{orderId}/{lineId}',[OrderController::class , 'rating']);


Route::get('order/orderDetails/{orderId}',[OrderController::class , 'orderDetails']);

Route::post('order/save/service',[OrderController::class , 'saveService']);


