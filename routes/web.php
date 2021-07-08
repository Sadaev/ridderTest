<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Hospitals;
use App\Http\Livewire\CountOfVaccine;
use App\Http\Livewire\Vaccine;
use App\Http\Livewire\RegistrationForVaccine;

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

Route::get('/', function () {
    return view('landing');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/hospitals', Hospitals::class)->name('hospitals');
Route::get('/countofvaccine', CountOfVaccine::class)->name('countofvaccine');
Route::get('/vaccine', Vaccine::class)->name('vaccine');
Route::get('/register_for_vaccination', RegistrationForVaccine::class)->name('register_for_vaccination');
