<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\CoinController;

use App\Http\Controllers\Fontends\HomeController;
use App\Http\Controllers\Fontends\PorfolioController;
use App\Http\Controllers\Fontends\SettingController;
use App\Http\Controllers\Fontends\SubmitCoinController;
use App\Http\Controllers\Fontends\WatchListController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/',[HomeController::class, 'index'])->name('font-ends.index');
Route::get('/coin',[HomeController::class, 'coin'])->name('coin');

Route::get('/search/{q}', [CoinController::class, 'search'])->name('search');
Route::get('/new', [CoinController::class, 'new'])->name('new');

Route::get('/setting',[SettingController::class, 'index'])->name('font-ends.setting');

Route::get('/submit-coin',[SubmitCoinController::class, 'index'])->name('font-ends.submit-coin');
Route::post('/submit-coin',[SubmitCoinController::class, 'store']);

Route::get('/coin/{id}',[HomeController::class, 'detail'])->name('detail.coin');
Route::get('/coin_today',[HomeController::class, 'coin_today'])->name('coin_today');
Route::get('/coins_all',[HomeController::class, 'coins_all'])->name('coins_all');
Route::get('/coins_new',[HomeController::class, 'coins_new'])->name('coins_new');
Route::get('/marketcap',[HomeController::class, 'marketcap'])->name('marketcap');
Route::get('/presales',[HomeController::class, 'presales'])->name('presales');


Route::get('/login',[LoginController::class, 'index'])->name('font-ends.login');

Route::get('/register',[LoginController::class, 'register'])->name('font-ends.register');


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

require_once'admin.php';

Route::group(['middleware' => ['auth']], function() {

    Route::get('/watch-list',[WatchListController::class, 'index'])->name('font-ends.watch-list');
    Route::get('/add-watchlist/{id}', [WatchListController::class, 'update'])->name('font-ends.add-watchlist');
    Route::get('/del-watchlist/{id}', [WatchListController::class, 'destroy'])->name('font-ends.del-watchlist');

    Route::get('/portfolio',[PorfolioController::class, 'index'])->name('font-ends.portfolio');

    Route::get('/vote/{id}', [CoinController::class, 'vote'])->name('vote');
});