<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SadminController;
use App\Http\Controllers\SsadminController;
use App\Http\Controllers\SecurityController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth','role:ssadmin'])->group(function(){
    Route::get('/ssadmin/dashboard', [SsadminController::class, 'SsadminDashboard'])->name('ssadmin.dashboard');
}); //end group ssadmin middleware

Route::middleware(['auth','role:sadmin'])->group(function(){
    Route::get('/sadmin/dashboard', [SadminController::class, 'SadminDashboard'])->name('sadmin.dashboard');
}); //end group sadmin middleware

Route::middleware(['auth','role:security'])->group(function(){
    Route::get('/security/dashboard', [SecurityController::class, 'SecurityDashboard'])->name('security.dashboard');
}); //end group security middleware