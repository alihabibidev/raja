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
    Route::get('exit',  [\App\Http\Controllers\UserController::class, 'exitUser'])->name('exit');

    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('addUser', function () {
        return view('admin.addUser');
    })->name('addUser');
    Route::get('user/show',  [\App\Http\Controllers\UserController::class, 'showAllUserPage'])->name('showUser');
    Route::get('user/addtoken/{id}',  [\App\Http\Controllers\UserController::class, 'addUserToken'])->name('addUserToken');
    Route::get('user/deletetoken/{id}',  [\App\Http\Controllers\UserController::class, 'deleteUserToken'])->name('deleteUserToken');
    Route::get('user/edit/{id}',  [\App\Http\Controllers\UserController::class, 'editUser'])->name('editUser');
    Route::get('user/delete/{id}',  [\App\Http\Controllers\UserController::class, 'deleteUser'])->name('deleteUser');

    Route::get('addBrand', function () {
        return view('admin.addBrand');
    })->name('addBrand');

    Route::get('brand/show',  [\App\Http\Controllers\BrandController::class, 'showAllBrandPage'])->name('showBrand');
    Route::get('brand/delete/{id}',  [\App\Http\Controllers\BrandController::class, 'deleteBrand'])->name('deleteBrand');
    Route::get('brand/edit/{id}',  [\App\Http\Controllers\BrandController::class, 'editBrandPage'])->name('editBrandPage');
    Route::post('brand/edit', [\App\Http\Controllers\BrandController::class, 'editBrandAction'])->name('editBrandAction');


    Route::get('train/show',  [\App\Http\Controllers\TrainController::class, 'showAllTrainPage'])->name('showTrain');
    Route::get('train/delete/{id}',  [\App\Http\Controllers\TrainController::class, 'deleteTrain'])->name('deleteTrain');
    Route::get('train/edit/{id}',  [\App\Http\Controllers\TrainController::class, 'editTrainPage'])->name('editTrainPage');
    Route::post('train/edit', [\App\Http\Controllers\TrainController::class, 'editTrainAction'])->name('editTrainAction');


    Route::get('trip/show',  [\App\Http\Controllers\TripController::class, 'showAlltripPage'])->name('showtrip');
    Route::get('trip/delete/{id}',  [\App\Http\Controllers\TripController::class, 'deletetrip'])->name('deleteTrip');
    Route::get('trip/edit/{id}',  [\App\Http\Controllers\TripController::class, 'editTripPage'])->name('editTripPage');
    Route::post('trip/edit', [\App\Http\Controllers\TripController::class, 'editTripAction'])->name('editTripAction');




    Route::get('addTrain', [\App\Http\Controllers\TrainController::class, 'addTrainPage'])->name('addTrainPage');
    Route::post('addTrain', [\App\Http\Controllers\TrainController::class, 'addTrain'])->name('addTrain');

    Route::get('addTrip', [\App\Http\Controllers\TripController::class, 'addTripPage'])->name('addTripPage');
    Route::post('addTrip', [\App\Http\Controllers\TripController::class, 'addTrip'])->name('addTrip');

    Route::post('addUserValidate', [\App\Http\Controllers\UserController::class, 'addUser'])->name('addUserValidate');
    Route::post('addBrandValidate', [\App\Http\Controllers\BrandController::class, 'addBrand'])->name('addBrandValidate');
});
