<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use GuzzleHttp\Middleware;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/page/{slug}', [App\Http\Controllers\Frontend\PageController::class, 'page'])->name('page');
Route::post('/contactUs', [App\Http\Controllers\Frontend\PageController::class, 'contact'])->name('contactUs');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin' , 'middleware'=>'auth'], function(){  
    Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('home');
    Route::get('contact', [App\Http\Controllers\Admin\DashboardController::class, 'contact'])->name('contact');
    Route::get('site-setting', [App\Http\Controllers\Admin\SettingController::class, 'index']);
    Route::post('site-setting/{id}', [App\Http\Controllers\Admin\SettingController::class, 'update']);


    Route::get('service', [App\Http\Controllers\Admin\ServiceController::class, 'index']);
    Route::get('service/create', [App\Http\Controllers\Admin\ServiceController::class, 'create']);
    Route::post('service/store', [App\Http\Controllers\Admin\ServiceController::class, 'store']);
    Route::get('service/{id}/edit', [App\Http\Controllers\Admin\ServiceController::class, 'edit']);
    Route::post('service/{id}/update', [App\Http\Controllers\Admin\ServiceController::class, 'update']);
    Route::post('service/{id}', [App\Http\Controllers\Admin\ServiceController::class, 'delete']);

    Route::get('testimonial', [App\Http\Controllers\Admin\TestimonialController::class, 'index']);
    Route::get('testimonial/create', [App\Http\Controllers\Admin\TestimonialController::class, 'create']);
    Route::post('testimonial/store', [App\Http\Controllers\Admin\TestimonialController::class, 'store']);
    Route::get('testimonial/{id}/edit', [App\Http\Controllers\Admin\TestimonialController::class, 'edit']);
    Route::post('testimonial/{id}/update', [App\Http\Controllers\Admin\TestimonialController::class, 'update']);
    Route::post('testimonial/{id}', [App\Http\Controllers\Admin\TestimonialController::class, 'delete']);

    Route::get('project', [App\Http\Controllers\Admin\ProjectController::class, 'index']);
    Route::get('project/create', [App\Http\Controllers\Admin\ProjectController::class, 'create']);
    Route::post('project/store', [App\Http\Controllers\Admin\ProjectController::class, 'store']);
    Route::get('project/{id}/edit', [App\Http\Controllers\Admin\ProjectController::class, 'edit']);
    Route::post('project/{id}/update', [App\Http\Controllers\Admin\ProjectController::class, 'update']);
    Route::post('project/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'delete']);

    Route::get('feature', [App\Http\Controllers\Admin\FeatureController::class, 'index']);
    Route::get('feature/create', [App\Http\Controllers\Admin\FeatureController::class, 'create']);
    Route::post('feature/store', [App\Http\Controllers\Admin\FeatureController::class, 'store']);
    Route::get('feature/{id}/edit', [App\Http\Controllers\Admin\FeatureController::class, 'edit']);
    Route::post('feature/{id}/update', [App\Http\Controllers\Admin\FeatureController::class, 'update']);
    Route::post('feature/{id}', [App\Http\Controllers\Admin\FeatureController::class, 'delete']);
   
});
