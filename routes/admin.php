<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\Faqs;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\SalaryController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



//--------------<<< Categories Routes >>>>---------


Route::prefix('categories')->group(function () {

    Route::get('index',[CategoriesController::class ,'index'])->name('categories.index');
    Route::post('edit',[CategoriesController::class ,'edit'])->name('categories.edit');
    Route::get('delete',[CategoriesController::class , 'destroy'])->name('categories.delete');

});

//--------------<<< clients Routes >>>>---------

Route::prefix('clients')->group(function () {

    Route::get('index',[UserController::class ,'index'])->name('clinte.index');
    Route::get('block',[UserController::class ,'block'])->name('clinte.edit');
});



Route::group(['prefix'=>'faq'],function(){
    Route::get('index',[Faqs::class,'index'])->name('getAllFaqs');
    Route::post('add',[Faqs::class,'add'])->name('addFaq');
    Route::post('addsubFaq',[Faqs::class,'addSubFaq'])->name('addSubFaq');
});

Route::prefix('salary')->group(function () {

    Route::get('index',[SalaryController::class ,'index'])->name('showSalary');
    Route::get('show/{easer_id}',[SalaryController::class ,'show'])->name('showSalaryDetails');
    Route::post('store',[SalaryController::class,'store'])->name('addSalary');
    Route::get('delete',[SalaryController::class , 'destroy'])->name('');

});



//		<form action="{{ route('specific_route', ['user_id' => $user_id]) }}" method="POST" >


//--------------<<< Activities Routes >>>>---------


// Route::get('/activities', function () {
//     return view('activities');
// })->name('activities');


//--------------<<< order Routes >>>>---------

// Route::get('/order', function () {
//     return view('order');
// })->name('order');


Route::prefix('order')->group(function () {
    Route::get('all', [OrderController::class , "allTask"] )->name('showOrders');
    Route::get('showOrderDetails/{order_id}', [OrderController::class , "show"] )->name('showOrderDetails');

});





// Route::get('/company_info', function () {
//     return view('company_info');
// })->name('company_info');


// Route::get('/employees-list', function () {
//     return view('employees-list');
// })->name('employees-list');

// Route::get('/employees', function () {
//     return view('employees');
// })->name('employees');

// Route::get('/faq', function () {
//     return view('faq');
// })->name('faq');



// Route::get('/privacy-policy', function () {
//     return view('privacy-policy');
// })->name('privacy-policy');
// Route::get('/report', function () {
//     return view('report-view');
// })->name('report-view');

// Route::get('/report', function () {
//     return view('report');
// })->name('report');

// Route::get('/services', function () {
//     return view('services');
// })->name('services');

// Route::get('/terms', function () {
//     return view('terms');
// })->name('terms');

// Route::get('layout', function () {
//     return view('layout');
// });



