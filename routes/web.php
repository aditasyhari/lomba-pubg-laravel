<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\WinnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TournamentController;

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

Route::get('/', [GlobalController::class, 'home']);

// profile
Route::get('profile', [ProfileController::class, 'show']);

// news
Route::get('news', [NewsController::class, 'index']);

// tournament
Route::get('tournament', [TournamentController::class, 'index']);
Route::get('tournament/detail', [TournamentController::class, 'detail']);

// winner
Route::get('pemenang', [WinnerController::class, 'index']);


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
