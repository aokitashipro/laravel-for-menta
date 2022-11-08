<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyInfoController;

Route::get('companyinfo/create', [CompanyInfoController::class, 'create'])
->name('companyinfo.create');

Route::post('companyinfo', [CompanyInfoController::class, 'store'])
->name('companyinfo.store');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
