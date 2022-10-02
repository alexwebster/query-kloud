<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalSearchController;

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
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('index');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

//Route::resource('search', \App\Http\Controllers\LocalSearchController::class);

Route::get('search', [LocalSearchController::class, 'index']);
Route::get('search/create', [LocalSearchController::class, 'create']);
Route::post('store-localsearch', [LocalSearchController::class, 'store'])->name('store-localsearch');
//Route::resource('search', \App\Http\Controllers\LocalSearchController::class, ['names'=>[
//    'index'=>'search.index',
//    'create'=>'search.create',
//    'store'=>'search.store',
//    'edit'=>'search.edit',
//]])->middleware('auth');
