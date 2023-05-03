<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CornellnoteController;
use App\Http\Controllers\BugController;
use App\Http\Controllers\SubjectController;

use App\Models\Cornellnote;
use App\Models\Bug;

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
    $cantidad_notas = Cornellnote::where('user_id',auth()->user()->id)->count();
    $cantidad_bugs = Bug::where('user_id',auth()->user()->id)->count();

    return view('dashboard', compact('cantidad_notas', 'cantidad_bugs'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/asignaturas', [SubjectController::class,'index'])->name('asignaturas');
});

//Rutas del crud de Notas
Route::resource('cornellnotes', CornellnoteController::class);

//Rutas del crud de Bugs
Route::resource('bugs', BugController::class);

require __DIR__.'/auth.php';
