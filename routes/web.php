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

Route::get('/', function () {
         return view('index');
});

Route::view(uri: '/index', view:'index')->name(name:'index');
Route::view(uri: '/about', view:'about')->name(name:'about');
Route::view(uri: '/membership', view:'membership')->name(name:'membership');
Route::view(uri: '/blog', view:'blog')->name(name:'blog');
Route::view(uri: '/contact', view:'contact')->name(name:'contact');
Route::view(uri: '/blogpost', view:'blogpost')->name(name:'blogpost');
Route::view(uri: '/terms', view:'terms')->name(name:'terms');
Route::view(uri: '/pravacy', view:'pravacy')->name(name:'pravacy');
Route::view(uri: '/login', view:'auth.login')->name(name:'login');
Route::view(uri: '/register', view:'auth.register')->name(name:'register');
Route::view(uri: '/profile', view:'User.profile')->name(name:'profile');
Route::view(uri: '/edit', view:'User.edit')->name(name:'edit');
Route::view(uri: '/donation', view:'User.donation')->name(name:'donation');
Route::view(uri: '/message', view:'User.message')->name(name:'message');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/log_out', [App\Http\Controllers\HomeController::class, 'log_out'])->name('log_out');


Route::post('/upload-image', [App\Http\Controllers\ImageController::class, 'storeImage'])->name('image.store');
Route::post('update-profile',[App\Http\Controllers\HomeController::class,'updateProfile'])->name('update-profile');
Route::get('/change-password', [App\Http\Controllers\HomeController::class, 'changePassword'])->name('change-password');
Route::post('/change-password', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('update-password');