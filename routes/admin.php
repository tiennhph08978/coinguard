<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CoinController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SettingController;

Auth::routes();
Route::group(['middleware' => ['auth']], function() {
	Route::prefix('admin')->group(function(){
		//home
		Route::get('/',[HomeController::class, 'index'])->name('admin.index');

		//coin
		Route::get('/coin',[CoinController::class, 'index'])->name('admin.coin');
		Route::get('/active-coin/{id}',[CoinController::class, 'active'])->name('admin.active-coin');
		Route::get('/unactive-coin/{id}',[CoinController::class, 'unactive'])->name('admin.unactive-coin');
		Route::get('/delete-coin/{id}',[CoinController::class, 'destroy'])->name('admin.delete-coin');

		//logo
		Route::resource('images', ImageController::class, ['names'=>'images']);

		Route::get('/active-logo/{id}',[ImageController::class, 'active_logo'])->name('images.active-logo');
		Route::get('/active-favicon/{id}',[ImageController::class, 'active_favicon'])->name('images.active-favicon');	
		Route::get('/delete-image/{id}',[ImageController::class, 'destroy'])->name('images.delete-image');	
		//banner
		Route::resource('banner', BannerController::class, ['names'=>'banner']);

		Route::get('/edit-banner/{id}',[BannerController::class, 'edit'])->name('banner.edit-banner');
		Route::post('/edit-banner/{id}',[BannerController::class, 'update'])->name('banner.edit-banner-post');
		
		Route::get('/delete-banner/{id}',[BannerController::class, 'destroy'])->name('banner.delete');

		Route::get('/active-banner/{id}',[BannerController::class, 'active_banner'])->name('banner.active-banner');
		//roles
		Route::resource('roles', RoleController::class,['names'=>'roles']);
		Route::get('/delete-role/{id}',[RoleController::class, 'destroy'])->name('role.delete-role');	

		// users
    	Route::resource('users', UserController::class,['names'=>'users']);
		Route::get('/delete-user/{id}',[UserController::class, 'destroy'])->name('user.delete-user');	

		//setting 
		Route::get('/setting', [SettingController::class, 'index'])->name('admin.setting');
		Route::post('/update', [SettingController::class, 'update'])->name('admin.setting-update');

	});
});