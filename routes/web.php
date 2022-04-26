<?php

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

Route::group(['namespace' => '\App\Http\Controllers\Main'], function () {
    Route::get('/', IndexController::class)->name('main.index');
    Route::get('/search', SearchController::class)->name('main.search');
    Route::group(['namespace' => 'Car','prefix' => 'cars'], function () {
        Route::get('/{mark}', ShowController::class)->name('main.show.car');
    });
    Route::group(['namespace' => 'Like','prefix' => 'like'], function () {
        Route::post('/{product}', IndexController::class)->name('main.Likes');
    });
    Route::group(['namespace' => 'Category','prefix' => 'categories'], function () {
        Route::get('/{car}', ShowController::class)->name('main.show.category');
    });
    Route::group(['namespace' => 'SubCategory','prefix' => 'sub-categories'], function () {
        Route::get('/{category}', ShowController::class)->name('main.show.subCategory');
    });
    Route::group(['namespace' => 'Product','prefix' => 'products'], function () {
        Route::get('/{subcategory}', ShowController::class)->name('main.show.product');
    });
    Route::group(['namespace' => 'Show','prefix' => 'product'], function () {
        Route::get('/{product}', ShowController::class)->name('main.product');
    });

});
Route::group(['namespace' => '\App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', IndexController::class)->name('admin');
    });

    Route::group(['namespace' => 'Mark', 'prefix'=>'marks'], function () {
        Route::get('/', IndexController::class)->name('admin.mark.index');
        Route::get('/create', CreateController::class)->name('admin.mark.create');
        Route::post('/', StoreController::class)->name('admin.mark.store');
        Route::get('/{mark}', ShowController::class)->name('admin.mark.show');
        Route::get('/{mark}/edit', EditController::class)->name('admin.mark.edit');
        Route::patch('/{mark}', UpdateController::class)->name('admin.mark.update');
        Route::delete('/{mark}', DeleteController::class)->name('admin.mark.delete');
    });
    Route::group(['namespace' => 'Car', 'prefix'=>'cars'], function () {
        Route::get('/', IndexController::class)->name('admin.car.index');
        Route::get('/create', CreateController::class)->name('admin.car.create');
        Route::post('/', StoreController::class)->name('admin.car.store');
        Route::get('/{car}', ShowController::class)->name('admin.car.show');
        Route::get('/{car}/edit', EditController::class)->name('admin.car.edit');
        Route::patch('/{car}', UpdateController::class)->name('admin.car.update');
        Route::delete('/{car}', DeleteController::class)->name('admin.car.delete');
    });
    Route::group(['namespace' => 'Category', 'prefix'=>'categories'], function () {
        Route::get('/', IndexController::class)->name('admin.category.index');
        Route::get('/create', CreateController::class)->name('admin.category.create');
        Route::post('/', StoreController::class)->name('admin.category.store');
        Route::get('/{category}', ShowController::class)->name('admin.category.show');
        Route::get('/{category}/edit', EditController::class)->name('admin.category.edit');
        Route::patch('/{category}', UpdateController::class)->name('admin.category.update');
        Route::delete('/{category}', DeleteController::class)->name('admin.category.delete');
    });
    Route::group(['namespace' => 'Subcategory', 'prefix'=>'subcategories'], function () {
        Route::get('/', IndexController::class)->name('admin.subcategory.index');
        Route::get('/create', CreateController::class)->name('admin.subcategory.create');
        Route::post('/', StoreController::class)->name('admin.subcategory.store');
        Route::get('/{subcategory}', ShowController::class)->name('admin.subcategory.show');
        Route::get('/{subcategory}/edit', EditController::class)->name('admin.subcategory.edit');
        Route::patch('/{subcategory}', UpdateController::class)->name('admin.subcategory.update');
        Route::delete('/{subcategory}', DeleteController::class)->name('admin.subcategory.delete');
    });
    Route::group(['namespace' => 'Product', 'prefix'=>'products'], function () {
        Route::get('/', IndexController::class)->name('admin.product.index');
        Route::get('/create', CreateController::class)->name('admin.product.create');
        Route::post('/', StoreController::class)->name('admin.product.store');
        Route::get('/{product}', ShowController::class)->name('admin.product.show');
        Route::get('/{product}/edit', EditController::class)->name('admin.product.edit');
        Route::patch('/{product}', UpdateController::class)->name('admin.product.update');
        Route::delete('/{product}', DeleteController::class)->name('admin.product.delete');
    });
    Route::group(['namespace' => 'Admin', 'prefix'=>'admins'], function () {
        Route::get('/', IndexController::class)->name('admin.user.index');
        Route::get('/create', CreateController::class)->name('admin.user.create');
        Route::post('/', StoreController::class)->name('admin.user.store');
        Route::get('/{user}', ShowController::class)->name('admin.user.show');
        Route::get('/{user}/edit', EditController::class)->name('admin.user.edit');
        Route::patch('/{user}', UpdateController::class)->name('admin.user.update');
        Route::delete('/{user}', DeleteController::class)->name('admin.user.delete');
    });

});


Auth::routes();


