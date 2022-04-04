<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\BlogController;

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
Route::get('/blogs', [FrontendController::class, 'blogs'])->name('blogs');
Route::get('/blogs/{title}', [FrontendController::class, 'blog'])->name('blog');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/booknow', [FrontendController::class, 'booknow'])->name('booknow');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact', [FrontendController::class, 'postContact'])->name('postContact');


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

    Route::get('gallery', [GalleryController::class, 'gallery'])->name('gallery');
    Route::get('gallery/addImage/', [GalleryController::class, 'addImage'])->name('addImage');
    Route::post('gallery/postImage/', [GalleryController::class, 'postImage'])->name('postImage'); 
    Route::get('gallery/edit/{id}', [GalleryController::class, 'editImage'])->name('editImage');
    Route::post('gallery/updateImage/{id}', [GalleryController::class, 'updateImage'])->name('updateImage'); 
    Route::delete('gallery/deleteImage/{id}', [GalleryController::class, 'deleteImage'])->name('deleteImage');
    
    Route::get('blog', [BlogController::class, 'blog'])->name('blog');
    Route::get('blog/addBlog/', [BlogController::class, 'addBlog'])->name('addBlog');
    Route::post('blog/postBlog/', [BlogController::class, 'postBlog'])->name('postBlog');
    Route::get('blog/edit/{id}', [BlogController::class, 'editBlog'])->name('editBlog');
    Route::post('blog/updateBlog/{id}', [BlogController::class, 'updateBlog'])->name('updateBlog'); 
    Route::delete('blog/deleteBlog/{id}', [BlogController::class, 'deleteBlog'])->name('deleteBlog');                 
      
});