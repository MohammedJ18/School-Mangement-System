<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\Home\Main as Home;
use App\Http\Livewire\Pages\Students\Main as Students;
use App\Http\Livewire\Pages\Profile\Main as Profile;
use App\Http\Livewire\Pages\Systems\Main as Systems;
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
//group by middleware
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/students', Students::class)->name('students');
    // Route::get('/profile/{$id}', Profile::class)->name('profile');
    Route::get('/systems', Systems::class)->name('systems');
    Route::get('/profile/{id}', Profile::class)->name('profile');
});

require __DIR__ . '/auth.php';
