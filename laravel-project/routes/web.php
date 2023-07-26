<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

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




//questa viene sovrascritta se aggiungiamo un'altra rotta "/"
//cosa che abbiamo fatto con la rotta 'project.index'
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//creiamo le rotte index e show senza pensare alla distinzione loggato o non-loggato per il momento
Route::get('/', [MainController::class, 'index'])->name('project.index');
Route::get('/show/{id}', [MainController::class, 'show'])->name('project.show')
//aggiungiamo questa linea di codice per riservare la rotta '/show/{id}' a utenti loggati
->middleware(['auth', 'verified']);

Route::get('/create',[MainController::class, 'create'])->name('project.create')
->middleware(['auth', 'verified']);

Route::post('/store',[MainController::class, 'store'])->name('project.store')
->middleware(['auth', 'verified']);

