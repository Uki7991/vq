<?php

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

Route::get('/', function () {
    return redirect()->route('broadcasts.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/broadcasts/show_admin/{id}', [\App\Http\Controllers\BroadcastController::class, 'showAdmin'])->name('broadcasts.show_admin');
Route::resource('broadcasts', \App\Http\Controllers\BroadcastController::class);

require __DIR__.'/auth.php';
