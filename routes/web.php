<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD

=======
use App\Http\Controllers\DashboardController;
>>>>>>> upstream/master
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
    return view('welcome');
});
<<<<<<< HEAD
=======
Route::get('/dashboard', [DashboardController::class,'dashboard']);
Route::get('/ticket', [DashboardController::class,'tickets'])->name('ticket');
Route::get('/contacts', [DashboardController::class,'contacts'])->name('contacts');
Route::get('/archives', [DashboardController::class,'archives'])->name('archives');
>>>>>>> upstream/master
