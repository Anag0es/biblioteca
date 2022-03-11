<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function cadastrar_livro(){
        return view('cadastrarlivro');
    }

    public function cadastrar_livro_store(Request $req){
        
        $dadosvalidados = $req->validate([
            'titulo_livro' => 'required',
            'isbn' => 'required',
            'genero' => 'required',
        ]);


        $l = new livro();
        $l->titulo = $dadosvalidados['titulo_livro'];
        $l->isbn = $dadosvalidados['isbn'];
        $l->genero = $dadosvalidados['genero'];
        $l->save();
        return redirect()->back()->with('sucess!!', 'Livro cadastrado');
    }
}
