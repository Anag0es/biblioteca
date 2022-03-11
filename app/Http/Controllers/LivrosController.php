<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function cadastrar_livro(){
        return view('cadastrarlivro');
    }
}
