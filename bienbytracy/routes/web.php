<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\ProfileController;
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

require __DIR__.'/auth.php';

// This is to create a different route for admin system
//This does not solve that user can access the admin dashboard
//Therefore we make a middleware for Multi Auth
//'role' is from the kernel.php which we are passing that the role should be admin
//Thus, the route is only available to admin user.
Route::get('admin/dashboard', [AdminDashboardController::class,'index'])->middleware('auth', 'role:admin')->name('admin.dashboard');

//You might be wondering, why admin can access both user dashboard and admin
//In-fact, it should be possible. What shouldn't be possible
//Is that user can access the Admin Dashboard
//PROBLEM: How can we add the employee role T-T 
