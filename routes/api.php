<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Chamando Controllers
use App\Http\Controllers\IgrejaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Rotas da barra de navegação
Route::get('/institucional', [IgrejaController::class, 'institutionalPg'])->name('institutional.page');
Route::get('/projetos', [IgrejaController::class, 'projectsPg'])->name('projects.page');
Route::get('/reunioes', [IgrejaController::class, 'reunionsPg'])->name('reunions.page');

