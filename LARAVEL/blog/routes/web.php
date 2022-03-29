<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// on a branché la route home sur la méthode index du controleur (classe) HomeController.
// dans les vues pour créer les liens route('melissa')
Route::get('/home', [HomeController::class, 'index'])->name('home');

// route dynamique book/8 book/1 => pour récupérer l'idée book
// vous pouvez faire du binding avec le modèle id => instance de la classe Book
// les routes sont avec paramètre (id du livre à afficher )
Route::get('/book/{book}', [HomeController::class, 'showBook'])->name('book');
Route::get('/author/{author}', [HomeController::class, 'showAuthor'])->name('author');

Route::get('/sex/{name}', [HomeController::class, 'showSex'])->name('sex');

Route::get('/', function () {
    return view('welcome');
});
