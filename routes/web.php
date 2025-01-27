<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get("/admin/dashboard",[SuperAdminController::class,'Dashboard'])->name('SuperAdmin.Dashboard');
Route::get("/admin/employer/accounts",[SuperAdminController::class,'EmployerAccount'])->name('SuperAdmin.EmployerAccount');
Route::get("/admin/employees/account",[SuperAdminController::class,'EmployeesAccount'])->name('SuperAdmin.EmployeesAccount');
Route::get("/admin/payroll",[SuperAdminController::class,'Payroll'])->name('SuperAdmin.Payroll');
Route::get("/admin/upload/documents",[SuperAdminController::class,'UploadDoc'])->name('SuperAdmin.UploadDoc');

require __DIR__.'/auth.php';
