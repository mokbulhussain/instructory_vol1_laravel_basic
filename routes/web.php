<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//named route
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about',function(){
    return view("about");
})->name('about');

// Route::get('/service',function(){
//     return view('service');
// })->name('service');

Route::get('/contact',function(){
    return view('contact');
})->name('contact');


// parameter with route
// Route::get('/service/{service_id}',function($service_id){
//     return 'service'.$service_id;
// })->name('service');


// multipule parameter with route
// Route::get('/service/{service_id}/{service_name}',function($service_id,$service_name){
//     return 'service'.$service_id.$service_name;
// })->name('service');


// optional parameter with route
Route::get('/service/{service_id}/{service_name?}',function($service_id,$service_name=null){
    return 'service'.$service_id.$service_name;
})->name('service');


