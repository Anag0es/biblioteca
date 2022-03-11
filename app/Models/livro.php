<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\LivrosControllers;

class livro extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'titulo',
        'isbn',
        'genero',
    ];

}
