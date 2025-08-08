<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\JobOffer;
use App\Http\Controllers\ApplicationController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'is_admin'])->name('dashboard');

Route::get('/offres', function () {
    $offers = JobOffer::orderByDesc('publication_date')->paginate(12);
    return view('job_offers.public', compact('offers'));
})->name('job-offers.public');

Route::get('/offres/{jobOffer}/postuler', [ApplicationController::class, 'create'])->name('job-application.form');
Route::post('/offres/{jobOffer}/postuler', [ApplicationController::class, 'store'])->name('job-application.store');

Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::resource('job-offers', \App\Http\Controllers\JobOfferController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/applications', [ApplicationController::class, 'index'])->name('applications.index');
});

require __DIR__.'/auth.php';
