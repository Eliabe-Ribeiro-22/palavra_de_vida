<?php
use Illuminate\Support\Facades\Route;

// Chamando Controllers
use App\Http\Controllers\PdAController;


// Rotas do site

Route::get('/', [PdaController::class, 'mainPg'])->name('main.page');
// Rotas da barra de navegação
Route::get('/divulgacao', [PdaController::class, 'divulgationPg'])->name('divulgation.page');

// Formulário para o visitante tornar-se sócio-contribuinte
Route::get('/mantenedor', [PdaController::class, 'maintainer'])->name('maintainer.page');
Route::post('/sendForm', [PdaController::class, 'sendForm'])->name('form_send');

