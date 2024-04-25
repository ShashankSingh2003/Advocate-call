<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\SelectController;
use App\Http\Controllers\FindController;
use App\Http\Controllers\YourController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\KnownAdvocateController;

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

Auth::routes();


Route::get('/', [AdminDashboardController::class, 'index'])->name('home');

Route::get("/select-search", [SelectController::class, 'index']);
Route::get("/your-advocate", [YourController::class, 'index']);
Route::get("/find-advocate", [FindController::class, 'index']);
Route::get("/follow-steps", [FollowController::class,'index']);

Route::post('/store', [HomeController::class, 'store'])->name('peoples.store');
Route::post('/known-advocate', [YourController::class, 'store'])->name('known.advocate');

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/dashboard', [AdminDashboardController::class, 'users'])->name('admin.dashboard');
    Route::get('/users', [AdminDashboardController::class, 'users'])->name('admin.users');
    Route::get('/leads/view/{id}', [AdminDashboardController::class, 'leadsview'])->name('leads.view');
    Route::get('/knownadvocate', [KnownAdvocateController::class, 'knownadvocate'])->name('admin.knownadvocate');
   
    Route::get('/admin/users', [AdminDashboardController::class, 'users'])->name('admin.users');
    Route::get('/save-otp/{personId}', [AdminDashboardController::class, 'saveOTP'])->name('admin.users');
});



