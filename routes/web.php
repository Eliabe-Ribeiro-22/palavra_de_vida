<?php
use Illuminate\Support\Facades\Route;

// Chamando Controllers
use App\Http\Controllers\IgrejaController;


// Rotas do site
Route::get('/', [IgrejaController::class, 'mainPg'])->name('main.page');

Route::get('api/contato', [IgrejaController::class, 'form_create'])->name('contact.page');
Route::post('api/sendForm', [IgrejaController::class, 'sendForm'])->name('form_send');