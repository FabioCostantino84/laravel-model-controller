<?php

use Illuminate\Support\Facades\Route;

/* Si auto genera quando scriviamo la Route */
use App\Http\Controllers\Guest\PageController;

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


/* Dichiarazione di una rotta, che definisce una Route per la homepage */

Route::get('/', [PageController::class, 'index'])->name('home');
