<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\JuegosController;
use App\Http\Controllers\ProfileController;
use App\Mail\Contacto;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
})->middleware(['auth', 'verified']);


//Segunda froma de crear rutas
Route::resource('juegos',JuegosController::class)->middleware(['auth', 'verified','validaradmin']);
/*
Route::get('/conactactanos',function(){
    Mail::to('luna@gmail.com')->send(new Contacto);

    return 'Mensaje enviado';
})->name('emails.index');
*/

Route::resource('contactanos',ContactanosController::class)->middleware(['auth', 'verified']);



require __DIR__.'/auth.php';
