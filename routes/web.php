<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterSurat;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/registersurat', [RegisterSurat::class,'index']);
Route::post('/registersurat', [RegisterSurat::class,'store']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/profil', function(){
    return view('profile');
});
Route::get('/DashboardAdmin',function(){
    return view('index');
})->middleware('auth');
Route::resource('/DashboardAdmin/view',PostController::class)->middleware('auth');

Route::get('/success', function(){
    return view('successpost');
});
