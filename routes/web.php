<?php

use App\Http\Controllers\CatController;
use App\Http\Controllers\OwnerController;
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

Route::resource('cats', CatController::class);
Route::resource('owners', OwnerController::class);

Route::get('/', function () {
    $cats = \App\Models\Cat::with('owner')->get();

    return view('main', compact('cats'));
})->name('home');
