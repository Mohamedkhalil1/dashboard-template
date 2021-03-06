<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Profile\Show;
use App\Http\Livewire\Transaction\AdvancedIndex;
use App\Http\Livewire\Transaction\Index;
use App\Http\Livewire\User\Create;
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

Route::group([
    'middleware' => 'guest',
], function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});

Route::group([
    'middleware' => 'auth',
], function () {

    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('/profile', Show::class)->name('profile.show');
    Route::get('/user/create', Create::class)->name('user.create');
    Route::get('/transactions', Index::class)->name('transaction.index');
    Route::get('/transactions/advanced', AdvancedIndex::class)->name('transaction.advanced-index');
});

Route::post('logout', [LoginController::class, 'logout'])->name('logout');


