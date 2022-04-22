<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\SearchController;
use App\Models\Game;
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


Route::get("/search", [SearchController::class, "search"]);
Route::get("/cart", [CartController::class, "index"]);

Route::resource("/games", GameController::class)->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
