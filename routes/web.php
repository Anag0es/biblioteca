<?php

use Illuminate\Support\Facades\Route;
use App\Models\livro;

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

Route::get('/cadastrarlivro', function(){
    $livrJava = new livro();
    $livrJava -> titulo = "Programacao Java";    
    $livrJava -> isbn = "12345";
    $livrJava -> genero = "Tecnologia";
    $livrJava->save();
    return $livro::all();
});
