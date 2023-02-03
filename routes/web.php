<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerPanelController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\ServiceController;
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

Route::get('/admin', [PanelController::class, 'home'])->name('home');

Route::get('/add_services', [PanelController::class, 'addservice'])->name('add.services');

Route::get('/service_manager', [PanelController::class, 'servicemanager'])->name('service.manager');

Route::get('/article_manager', [PanelController::class, 'articlemanager'])->name('article.manager');

Route::post('/edit_service', [PanelController::class, 'serviceeditor'])->name('edit.service');

Route::post('/edithome', [ArticleController::class, 'create'])->name('create.article');

Route::post('/deletearticle', [ArticleController::class, 'delete'])->name('delete.article');

Route::get('/edit_article', [ArticleController::class, 'editarticlepage'])->name('edit.article');

Route::post('/update_article', [ArticleController::class, 'update'])->name('update.article');

Route::post('/add_service', [ServiceController::class, 'create'])->name('add.service');

Route::post('update_service', [ServiceController::class, 'update'])->name('update.service');

Route::post('update_service_img', [ServiceController::class, 'updateImage'])->name('update.service.image');

Route::post('/delete_service', [ServiceController::class, 'delete'])->name('delete.service');

// handle authentication for admin panel:

Route::get('/login_page', [PanelController::class, 'login'])->name('admin.login.page');

Route::post('authenticate', [AuthController::class,'authenticate'])->name('admin.authenticate');

Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::post('register', [AuthController::class, 'register'])->name('admin.register');

// handle front facing website:

Route::get('/', [CustomerPanelController::class, 'home'])->name('cust.home');

Route::get('/services', [CustomerPanelController::class, 'services'])->name('cust.services');

Route::get('/blog', [CustomerPanelController::class, 'blog'])->name('cust.blog');

Route::get('/contact', [CustomerPanelController::class, 'contact'])->name('cust.contact');

Route::post('/schedule', [CustomerPanelController::class, 'schedule'])->name('cust.schedule');
