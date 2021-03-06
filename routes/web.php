<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AuthController,DashboardController,ZoomController};

//authentication
Route::get('/login',[AuthController::class,'create'])->name('login');
Route::post('/login',[AuthController::class,'store'])->name('login.store');
Route::post('logout',[AuthController::class,'logout'])->name('logout');
Route::get('register',fn()=>inertia('Auth/Register'))->name('register')->breadcrumbs('User Registration');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])
         ->name('dashboard')
         ->breadcrumbs('dashboard');

});

Route::get('/',fn()=>ZoomController::list_meetings());

