<?php
use Illuminate\Support\Facades\Route;

// Chamando Controllers
use App\Http\Controllers\IgrejaController;


// Rotas do site
Route::get('/', [IgrejaController::class, 'mainPg'])->name('main.page');

Route::get('/contato', [IgrejaController::class, 'form_create'])->name('contact.page');
Route::post('/sendForm', [IgrejaController::class, 'sendForm'])->name('form_send');