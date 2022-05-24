<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::controller(Controllers\ProductController::class,)->prefix('product')->group(function(){
    Route::get('all','getAll');
});

Route::get('category/{slug}', [Controllers\CategoryController::class, 'getIndex']);

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/test', function () {
//    return view('test');
//});

Route::controller(Controllers\HomeController::class)->prefix('home')->group(function(){
        Route::post('/','postIndex');
        Route::get('/','Index');
        Route::get('{article}/delete','getDelete');
        Route::post('{article}/edit','postEdit');
        Route::get('{article}/edit','getEdit');
});




Auth::routes();

Route::get('/home', [Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test', [Controllers\TestController::class, 'test'])->name('test');
//Route::get('/test2', [App\Http\Controllers\TestController::class, 'test2'])->name('test');

Route::controller(Controllers\MaintextController::class)
//    ->prefix('article')
    ->group(function (){
    Route::get('{maintext}','getIndex')->where('maintext','[0-9]+');
    Route::post('/','postIndex')->prefix('maintext');
    Route::get('{url}','getUrl');
});



