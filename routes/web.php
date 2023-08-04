<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EspecialidadController;
/*Route::view('/','inicio') -> name('inicio');*/

Route::get('/',[EspecialidadController::class,'index'])->name('inicio');

Route::view('/donar','donar') -> name('donar');
Route::view('/sobre-nosotros','about') -> name('about');
Route::view('/noticias','noticia') -> name('noticia');
Route::view('/participa','participa') -> name('participa');
Route::view('/servicios','servicio') -> name('servicio');
Route::view('/nuestro-equipo','team') -> name('team');
