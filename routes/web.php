<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\Home\Main as Home;
use App\Http\Livewire\Pages\Students\Main as Students;
use App\Http\Livewire\Pages\Profile\Main as Profile;
use App\Http\Livewire\Pages\Systems\Main as Systems;
use App\Http\Livewire\Guest\Home\Main as GuestHome;
use App\Http\Livewire\Pages\Schedules\Main as Schedule;
use App\Http\Livewire\Pages\Absences\Main as Absences;

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
Route::middleware(['guest'])->group(function () {
Route::get('/', GuestHome::class)->name('guest');
});
//group by middleware
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/school/{id}', Home::class)->name('school');
    Route::get('/students', Students::class)->name('students');
    Route::get('/systems', Systems::class)->name('systems');
    Route::get('/profile/{id}', Profile::class)->name('profile');
    Route::get('/schedule', Schedule::class)->name('schedule');
    Route::get('/absences', Absences::class)->name('absences');
});

require __DIR__ . '/auth.php';
