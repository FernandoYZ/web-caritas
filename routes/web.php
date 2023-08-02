<?php

use Illuminate\Support\Facades\Route;

Route::view('/','inicio') -> name('inicio');
Route::view('/donar','donar') -> name('donar');
Route::view('/sobre-nosotros','about') -> name('about');
Route::view('/noticias','noticia') -> name('noticia');
Route::view('/participa','participa') -> name('participa');
Route::view('/servicios','servicio') -> name('servicio');
Route::view('/nuestro-equipo','team') -> name('team');