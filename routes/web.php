<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensagemController;
use App\Models\Mensagem;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/read', function () {
    return view('stilingue.read');
}, [])->middleware(['auth'])->name('read');

Route::get('/endpoint', function () {
    return view('stilingue.endpoint');
}, [])->middleware(['auth'])->name('endpoint');

Route::get('/read/{id}', function (Request $objRequest, $id) {
    return 'Read '.$id;
});

Route::get('/mensagem/1', function () {
    return view('stilingue.mensagem');
}, [])->middleware(['auth'])->name('mensagem');

Route::get('/mensagem/{id}', function (Mensagem $objMensagem) {
    return $objMensagem->texto;
}, [MensagemController::class, 'show']);

require __DIR__.'/auth.php';
