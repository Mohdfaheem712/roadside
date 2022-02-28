<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
| Author : Mohd Faheem
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/booknow', [FrontendController::class, 'booknow'])->name('booknow');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [LoginController::class, 'login'])->name('login');
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::get('dashboard', [LoginController::class, 'dashboard']); 
    Route::post('custom-login', [LoginController::class, 'customLogin'])->name('login.custom'); 
    Route::get('registration', [LoginController::class, 'registration'])->name('register-user');
    Route::post('custom-registration', [LoginController::class, 'customRegistration'])->name('register.custom'); 
    Route::get('signout', [LoginController::class, 'signOut'])->name('signout');
});