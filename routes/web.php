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
    return view('welcome');
});

Route::get('login', function () {
    return view('login');
})->name('login');


Route::get('hash/{name}', function ($name) {
    return bcrypt($name);
});

Route::post('validateLogin', [\App\Http\Controllers\UserController::class, 'authenticate'])->name('validateLogin');


Route::middleware(['auth'])->group(function () {

    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('addUser', function () {
        return view('addUser');
    })->name('addUser');

    Route::get('addBrand', function () {
        return view('addBrand');
    })->name('addUser');



    Route::get('addTrain', [\App\Http\Controllers\TrainController::class, 'addTrainPage'])->name('addTrainPage');
    Route::post('addTrain', [\App\Http\Controllers\TrainController::class, 'addTrain'])->name('addTrain');

    Route::get('addTrip', [\App\Http\Controllers\TripController::class, 'addTripPage'])->name('addTripPage');
    Route::post('addTrip', [\App\Http\Controllers\TripController::class, 'addTrip'])->name('addTrip');

    Route::post('addUserValidate', [\App\Http\Controllers\UserController::class, 'addUser'])->name('addUserValidate');
    Route::post('addBrandValidate', [\App\Http\Controllers\BrandController::class, 'addBrand'])->name('addBrandValidate');
});
