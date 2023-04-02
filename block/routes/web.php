<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Admin\Main\AdminController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Category\CreateCategoryController;
use App\Http\Controllers\Admin\Category\StoreCategoryController;
use App\Http\Controllers\Admin\Category\ShowCategoryController;
use App\Http\Controllers\Admin\Category\EditCategoryController;
use App\Http\Controllers\Admin\Category\UpdateCategoryController;
use App\Http\Controllers\Admin\Category\DeleteCategoryController;
use App\Http\Controllers\Admin\Tag\TagController;
use App\Http\Controllers\Admin\Tag\CreateTagController;
use App\Http\Controllers\Admin\Tag\StoreTagController;
use App\Http\Controllers\Admin\Tag\ShowTagController;
use App\Http\Controllers\Admin\Tag\EditTagController;
use App\Http\Controllers\Admin\Tag\UpdateTagController;
use App\Http\Controllers\Admin\Tag\DeleteTagController;
use App\Http\Controllers\Admin\Post\PostController;
use App\Http\Controllers\Admin\Post\CreatePostController;
use App\Http\Controllers\Admin\Post\StorePostController;
use App\Http\Controllers\Admin\Post\ShowPostController;
use App\Http\Controllers\Admin\Post\EditPostController;
use App\Http\Controllers\Admin\Post\UpdatePostController;
use App\Http\Controllers\Admin\Post\DeletePostController;


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

Route::name('main.')->group(function() {
    Route::get('/', IndexController::class);
});

Route::prefix('admin')->group(function (){
    Route::name('main')->group(function() {
        Route::get('/', AdminController::class);
    });

    Route::prefix('post')->group(function() {
        Route::get('/', PostController::class)->name('admin.post');
        Route::get('/create', CreatePostController::class)->name('admin.post.create');
        Route::post('/', StorePostController::class)->name('admin.post.store');
        Route::get('/{post}', ShowPostController::class)->name('admin.post.show');
        Route::get('/{post}/edit', EditPostController::class)->name('admin.post.edit');
        Route::patch('/{post}', UpdatePostController::class)->name('admin.post.update');
        Route::delete('/{post}', DeletePostController::class)->name('admin.post.delete');
    });

    Route::prefix('categories')->group(function() {
        Route::get('/', CategoryController::class)->name('admin.category');
        Route::get('/create', CreateCategoryController::class)->name('admin.category.create');
        Route::post('/', StoreCategoryController::class)->name('admin.category.store');
        Route::get('/{category}', ShowCategoryController::class)->name('admin.category.show');
        Route::get('/{category}/edit', EditCategoryController::class)->name('admin.category.edit');
        Route::patch('/{category}', UpdateCategoryController::class)->name('admin.category.update');
        Route::delete('/{category}', DeleteCategoryController::class)->name('admin.category.delete');
    });

    Route::prefix('tags')->group(function() {
        Route::get('/', TagController::class)->name('admin.tag');
        Route::get('/create', CreateTagController::class)->name('admin.tag.create');
        Route::post('/', StoreTagController::class)->name('admin.tag.store');
        Route::get('/{tag}', ShowTagController::class)->name('admin.tag.show');
        Route::get('/{tag}/edit', EditTagController::class)->name('admin.tag.edit');
        Route::patch('/{tag}', UpdateTagController::class)->name('admin.tag.update');
        Route::delete('/{tag}', DeleteTagController::class)->name('admin.tag.delete');
    });
});

Auth::routes();


