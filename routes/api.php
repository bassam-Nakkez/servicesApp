<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Notifiction;
use App\Http\Controllers\Api\FaqController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ContactsController;
use App\Http\Controllers\Api\ServicesController;
use App\Http\Controllers\Api\StripeController;
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

Route::get('categoires/easerFaqs',[FaqController::class,'index']);

//----- product and services
Route::get('productsByCategoryId/{category_id}',[CategoryController::class,'getProductByCategory']);
Route::get('serviceDetails/{proudect_id}',[ServicesController::class,'getProductWithTasks']);

//----- employe and help
Route::post('/tickets/becomeAnEmployee',[TrickestController::class,'add']);

//----- notifications
Route::get('notification',[Notifiction::class,'index']);
Route::get('notification/send/{id}',[Notifiction::class,'send']);


//------------<<Contacts Route >>>
Route::get('contacts',[ContactsController::class,'index'])->middleware('auth:api');
Route::delete('contacts/{id}',[ContactsController::class,'delete'])->middleware('auth:api');
Route::post('contact',[ContactsController::class,'add'])->middleware('auth:api');



//----------- <<< Order Route  >>>>

Route::group(['prefix'=>'order','middleware'=>'auth:api'] ,function ()  {
    Route::get('history',[OrderController::class , 'history']);

    Route::get('upcomming',[OrderController::class , 'upcomming']);

    Route::get('/easer/upcomming',[OrderController::class , 'upcomming']);

    Route::post('create/service',[OrderController::class , 'CreateService']);

    Route::post('rating/{orderId}/{lineId}',[OrderController::class , 'rating']);

    Route::get('orderDetails/{orderId}',[OrderController::class , 'orderDetails']);

    Route::post('save/service',[OrderController::class , 'saveService']);

    Route::post('create/subscription',[OrderController::class , 'subscription']);

    Route::post('compliment',[OrderController::class , 'complimentOrder']);

    Route::post('report',[OrderController::class , 'doOrder']);

});






///////////// payment Routes

Route::post('/payments/stripe/create', [ StripeController::class, 'StripePayment']);
Route::post('/payments/stripe/confirm', [StripeController::class, 'confirmPayment']);
Route::post('/payments/stripe/subscription', [StripeController::class, 'createSubscription']);
