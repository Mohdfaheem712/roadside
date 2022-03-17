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
    Route::get('login', [LoginController::class, 'login']);
    Route::post('adminlogin', [LoginController::class, 'customLogin'])->name('adminlogin'); 
    Route::get('signout', [LoginController::class, 'signOut'])->name('signout');
    Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
    Route::get('profile', [AdminController::class, 'profile'])->name('profile');  
    Route::post('updateProfile', [AdminController::class, 'updateProfile'])->name('updateProfile');
    Route::get('setting', [AdminController::class, 'setting'])->name('setting');  
    Route::post('updateSetting', [AdminController::class, 'updateSetting'])->name('updateSetting');
    Route::get('queries', [AdminController::class, 'queries'])->name('queries');  
    Route::post('replyQuery', [AdminController::class, 'replyQuery'])->name('replyQuery'); 
    Route::get('gallery', [AdminController::class, 'gallery'])->name('gallery');
    Route::get('gallery/edit/{id}', [AdminController::class, 'editImage'])->name('editImage');
    Route::post('gallery/updateImage/{id}', [AdminController::class, 'updateImage'])->name('updateImage'); 
    Route::delete('gallery/deleteImage/{id}', [AdminController::class, 'deleteImage'])->name('deleteImage');
    Route::get('gallery/addImage/', [AdminController::class, 'addImage'])->name('addImage');
    Route::post('gallery/postImage/', [AdminController::class, 'postImage'])->name('postImage');               
      
});