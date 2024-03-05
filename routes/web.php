<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', function() {
    return redirect()->route('pt.home');
});


Route::get('en', [PageController::class, 'indexEn'])->name('en.home');
Route::get('pt', [PageController::class, 'indexPt'])->name('pt.home');

Route::get('{lang}/thank-you', [PageController::class, 'thankYou'])->name('thank-you');

Route::post('form-validation', [PageController::class, 'validateForm'])->name('form.validation');




