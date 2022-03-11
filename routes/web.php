<?php

use Illuminate\Support\Facades\Route;
use App\Models\livro;
use App\Http\Controllers\LivrosController; //extend variavel

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

Route::get('/consultacervo', function(){
    return view('consultacervo');
});

Route::get('/realizaemprestimo', function(){
    return view('realizaemprestimo');
});


//Route::get('/cadastrarlivro', function(){
//    $livr = new livro();
//    $livr->titulo = "Programacao Java";    
//    $livr->isbn = "12345";
//    $livr->genero = "Tecnologia";
//    $livr->save();
//    return $livr::all();
//});

Route::get('/cadastrarlivro',[LivroController::class, 'cadastrar_livro']);