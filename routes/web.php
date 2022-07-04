<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ViaCepController;
use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;

Route::controller(ViaCepController::class)->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('index-route');

    Route::get('/viacep', 'index')->name('viacep.index');
    Route::post('/viacep', 'index')->name('viacep.post');
    Route::get('/viacep/{cep}', 'show')->name('viacep.show');
});

Route::get('/weather', [WeatherController::class, 'index'])->name('weather.index');

Route::controller(UserController::class)->group(function () {
    Route::get('/usuarios', 'index')->name('users.index');
    Route::post('usuarios', 'store')->name('users.store');
    Route::get('/usuarios/criar', 'create')->name('users.create');
    Route::get('/usuarios/{userEditId}/editar', 'edit')->name('users.edit');
    Route::delete('/usuarios/{id}', 'destroy')->name('users.destroy');
    Route::put('/usuarios/{id}', 'update')->name('users.update');
    Route::get('/usuarios/{id}', 'show')->name('users.show');
});
