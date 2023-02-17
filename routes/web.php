<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
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

Route::get('/form', [FormController::class, 'load_form']);
Route::post('form', [FormController::class, 'store_form']);

Route::get('/formulario', function () {
    return redirect('/form');
});


/*
Route::get('/dashboard', function(){
    return view('dashboard/area_trabalho');
});
*/

Route::get('/admin/dashboard', [AdminController::class, 'showDashboard']);

Route::get('/admin/opcoes', [AdminController::class, 'show_options']);
Route::post('/admin/opcoes/editar', [AdminController::class, 'edit_option']);
Route::post('/admin/opcoes/apagar', [AdminController::class, 'delete_option']);


/*
Route::get('/tailwind_form', function () {
    return view('tailwind_form');
});
*/



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
