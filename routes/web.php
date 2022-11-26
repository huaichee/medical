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
    return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('medical-session-detail/{medicalSession}', [\App\Http\Controllers\MedicalSessionController::class, 'createMedicalDetail'])->name('medical-session-detail.create');
Route::post('medical-session-detail/{medicalSession}', [\App\Http\Controllers\MedicalSessionController::class, 'storeMedicalDetail'])->name('medical-session-detail.store');

Route::get('medical-session-customer/{customer}', [\App\Http\Controllers\MedicalSessionController::class, 'createFromCustomer'])->name('medical-session-customer.create');
Route::post('medical-session-customer/{customer}', [\App\Http\Controllers\MedicalSessionController::class, 'storeFromCustomer'])->name('medical-session-customer.store');
Route::resource('customer', \App\Http\Controllers\CustomerController::class)->names([
    'index' => 'customer'
]);
Route::resource('medical-session', \App\Http\Controllers\MedicalSessionController::class)->except([
    'store',
    'create'
]);

Route::delete('medical-session-detail/{medicalSessionDetail}', [\App\Http\Controllers\MedicalSessionDetailController::class, 'destroy'])->name('medical-session-detail.destroy');


require __DIR__.'/auth.php';
