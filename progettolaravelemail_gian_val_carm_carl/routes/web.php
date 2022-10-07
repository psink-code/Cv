<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PersonalController;



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

Route::get('/' , [PublicController::class, 'home'])->name('home');
Route::get('/i-nostri-servizi',[ServiceController::class,'index'])->name('service.index');
Route::get('/servizio/{id}',[ServiceController::class, 'show'])->name('service.show');
Route::get('/categoria/{category}', [ServiceController::class, 'serviceForCategory'])->name('service.category');
Route::get('/personal' , [PersonalController::class, 'ShowPersonalHome'])->name('ShowPersonalHome');
Route::get('/areaComune',[PublicController::class,'areaComune'] )->name('area.comune');
//ROTTA CONTATTI
Route::get('/contatti', [PublicController::class, 'getContactPage'])->name('contact_page');

//ROTTA FORM POST/GET
Route::post('/contatto-inviato',[PublicController::class, 'contactSend'])->name('contact.send');
Route::get('/Grazie-al-cazzo', [PublicController::class, 'graziealcazzo'])->name('contact.graziealcazzo');
Route::get('/areaComunePersonale',[PublicController::class,'areaComunePersonale'])->name('area.Comune.Personale');
Route::post('/article/store',[ArticleController::class, 'store'])->name('article.store');

