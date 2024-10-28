<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('all.home');
// })->name("dashboard");
    
// Route::get('/dashboard', function () {
//     return view('all.home');
// });
// Route::get('/edit', function () {
//     return view('all.edit');
// });

Route::get('/dashboard',[DashboardController::class, 'dada'])->name("dashboard");
Route::get('/service',[DashboardController::class, 'list'])->name("service");
Route::get('/add-service',[DashboardController::class, 'da'])->name("add.service");
Route::get('/edit-data/{id}',[DashboardController::class, 'editAllData'])->name('edit-data');
Route::post('/add-input',[DashboardController::class, 'from'])->name("input");
Route::post('/edit-list-update',[DashboardController::class, 'Updatelist'])->name('update');




// Route::get('/table', function () {
//     return view('table');
// });

