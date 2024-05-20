<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 

Route::controller(ClientController::class)->prefix('clients')->group(function () {
    Route::get('', 'index')->name('clients');
    Route::get('create', 'create')->name('clients.create');
    Route::post('store', 'store')->name('clients.store');
    Route::get('show/{id}', 'how')->name('clients.show');
    Route::get('edit/{id}', 'edit')->name('clients.edit');
    Route::put('edit/{id}', 'update')->name('clients.update');
    Route::delete('destroy/{id}', 'destroy')->name('clients.destroy');
});
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});