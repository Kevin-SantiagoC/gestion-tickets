<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;



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

    //Reporte y Estadisticas
    Route::get('/reportes', [ReporteController::class, 'index'])->name('reportes.index');



    //Gestion de Tickets

    Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');


    //-------------FAQ--------------
    Route::get('/faqs', [FaqController::class, 'index'])->name('faqs.index');

   


});

require __DIR__.'/auth.php';
