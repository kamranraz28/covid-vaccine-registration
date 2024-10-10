<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\HomeController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'showForm'])->name('users.form');

Route::post('/', [HomeController::class, 'nidSearch'])->name('nidSearch');



Route::get('/user-register', [RegistrationController::class, 'userRegister'])->name('userRegisterForm');
Route::post('/user-register-submit', [RegistrationController::class, 'registerSubmit'])->name('registerSubmit');
