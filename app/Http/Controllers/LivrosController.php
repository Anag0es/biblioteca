<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function cadastrar_livro(){
        return view('cadastrarlivro');
    }

    public function cadastrar_livro_store(Request $req){
        $req->validate([
            "titulo_livro" => 'required'
        ]);

        $livr = new livro();
            $livr->titulo = $dadosvalidados['titulo_livro'];  
            $livr->save();
            return $livr::all();
    }
}
