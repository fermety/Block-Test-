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
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Admin\User\CreateUserController;
use App\Http\Controllers\Admin\User\StoreUserController;
use App\Http\Controllers\Admin\User\ShowUserController;
use App\Http\Controllers\Admin\User\EditUserController;
use App\Http\Controllers\Admin\User\UpdateUserController;
use App\Http\Controllers\Admin\User\DeleteUserController;
use App\Http\Controllers\Moder\Main\ModerController;
use App\Http\Controllers\Moder\Post\ModerPostController;
use App\Http\Controllers\Moder\Post\ModerCreatePostController;
use App\Http\Controllers\Moder\Post\ModerStorePostController;
use App\Http\Controllers\Moder\Post\ModerShowPostController;
use App\Http\Controllers\Moder\Post\ModerEditPostController;
use App\Http\Controllers\Moder\Post\ModerUpdatePostController;
use App\Http\Controllers\Moder\Post\ModerDeletePostController;

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


Route::get('/', IndexController::class)->name('main.index');

Route::prefix('moder')->middleware('auth','moder')->group(function (){
    Route::get('/', ModerController::class)->name('moder.main.index');

    Route::prefix('post')->group(function() {
        Route::get('/', ModerPostController::class)->name('moder.post');
        Route::get('/create', ModerCreatePostController::class)->name('moder.post.create');
        Route::post('/', ModerStorePostController::class)->name('moder.post.store');
        Route::get('/{post}', ModerShowPostController::class)->name('moder.post.show');
        Route::get('/{post}/edit', ModerEditPostController::class)->name('moder.post.edit');
        Route::patch('/{post}', ModerUpdatePostController::class)->name('moder.post.update');
        Route::delete('/{post}', ModerDeletePostController::class)->name('moder.post.delete');
    });
});

Route::prefix('admin')->middleware('auth','admin')->group(function (){
    Route::get('/', AdminController::class)->name('admin.main.index');

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

    Route::prefix('users')->group(function() {
        Route::get('/', UserController::class)->name('admin.user');
        Route::get('/create', CreateUserController::class)->name('admin.user.create');
        Route::post('/', StoreUserController::class)->name('admin.user.store');
        Route::get('/{user}', ShowUserController::class)->name('admin.user.show');
        Route::get('/{user}/edit', EditUserController::class)->name('admin.user.edit');
        Route::patch('/{user}', UpdateUserController::class)->name('admin.user.update');
        Route::delete('/{user}', DeleteUserController::class)->name('admin.user.delete');
    });
});

Auth::routes();


