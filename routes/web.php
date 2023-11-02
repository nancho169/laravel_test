<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TemplateControler;
use App\Http\Controllers\FormulariosController;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\EmailController;

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

Route::get('/',[HomeController::class,'home_inicio'])->name('home_inicio');
Route::get('/hola',[HomeController::class,'home_hola'])->name('home_hola');
Route::get('/saludo',[HomeController::class,'saludo'])->name('saludo');
Route::get('/parametros/{id}/{slug}/{page}',[HomeController::class,'parametros'])->name('parametros');


Route::get('/template',[TemplateControler::class,'template_inicio'])->name('template_inicio');
Route::get('/template/stack',[TemplateControler::class,'template_stack'])->name('template_stack');
Route::get('/formularios',[FormulariosController::class,'formularios_inicio'])->name('formularios_inicio');
Route::get('/formularios/simple',[FormulariosController::class,'formularios_simple'])->name('formularios_simple');
Route::post('/formularios/simple',[FormulariosController::class,'formularios_simple_post'])->name('formularios_simple_post');
Route::get('/formularios/flash',[FormulariosController::class,'formularios_flash'])->name('formularios_flash');
Route::get('/formularios/flash2',[FormulariosController::class,'formularios_flash2'])->name('formularios_flash2');
Route::get('/formularios/flash3',[FormulariosController::class,'formularios_flash3'])->name('formularios_flash3');
Route::get('/formularios/upload',[FormulariosController::class,'formularios_upload'])->name('formularios_upload');
Route::post('/formularios/upload',[FormulariosController::class,'formularios_upload_post'])->name('formularios_upload_post');

Route::get('/helper',[HelperController::class,'helper_inicio'])->name('helper_inicio'); 
Route::get('/mail',[EmailController::class,'email_inicio'])->name('email_inicio'); 
Route::get('/mail/enviar',[EmailController::class,'email_enviar'])->name('email_enviar'); 