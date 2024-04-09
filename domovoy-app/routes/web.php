<?php

use App\Http\Controllers\ContractorController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TypeOfWorkController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::user()->role == __('Employer')) return redirect('contractors');
        else if(Auth::user()->role==__('Contractor')) return redirect('employers');
        else return view('dashboard');
    })->name('dashboard');
    Route::resource('/contractors', ContractorController::class);
    Route::resource('/employers', EmployerController::class);
    Route::resource('/orders', OrderController::class);
    Route::resource('/type_of_work', TypeOfWorkController::class);
});
