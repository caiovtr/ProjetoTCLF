<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelJogador extends Model
{
    use HasFactory;
    protected $fillable = ['Nome', 'Posicao', 'Idade', 'Numero'];
}
