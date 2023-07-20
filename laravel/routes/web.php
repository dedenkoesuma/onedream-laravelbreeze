<?php

use App\Http\Controllers\DashboardPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\About;
use App\Http\Controllers\Portfolio;
use App\Http\Controllers\Layanan;
use App\Http\Controllers\Contact;


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


Route::get('/', [Home::class, "index"]);
Route::get('/about', [About::class, 'index']);
Route::get('/portfolio', [Portfolio::class, 'index']);
Route::get('/layanan', [Layanan::class. 'index']);
Route::get('/contact', [Contact::class, 'index']);
Route::resource('/dashboard/post', DashboardPostController::class)->middleware(['auth']);
Route::get('/dashboard', function(){
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
