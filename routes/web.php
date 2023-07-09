<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShiftController;

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
    return view('welcome');
});

Route::get('/about', [ShiftController::class, 'about'])->name('shift.about');

Route::get('/shifts/{id?}', [ShiftController::class, 'index'])->name('shift.index');

Route::get('/shift/show/{id?}', [ShiftController::class, 'show'])->name('shift.show');

Route::get('/shift/create/{id?}', [ShiftController::class, 'create'])->name('shift.create');

Route::get('/shift/edit/{id?}', [ShiftController::class, 'edit'])->name('shift.edit');
