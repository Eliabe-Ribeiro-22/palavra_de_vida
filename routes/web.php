<?php
use Illuminate\Support\Facades\Route;

// Chamando Controllers
use App\Http\Controllers\AdadController;
use App\Http\Controllers\IgrejaController;


// Rotas do site
Route::get('/', [IgrejaController::class, 'mainPg'])->name('main.page');

// Rotas da barra de navegação
Route::get('/institucional', [IgrejaController::class, 'institutionalPg'])->name('institutional.page');
Route::get('/contato', [IgrejaController::class, 'form_create'])->name('contact.page');
Route::get('/projetos', [IgrejaController::class, 'projectsPg'])->name('projects.page');
Route::get('/reunioes', [IgrejaController::class, 'reunionsPg'])->name('reunions.page');

Route::post('/sendForm', [IgrejaController::class, 'sendForm'])->name('form_send');