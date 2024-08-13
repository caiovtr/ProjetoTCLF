<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelTimeJogador extends Model
{
    use HasFactory;
    protected $fillable = ['autor_id', 'livro_id'];
    public function campeonato(){
        return $this->belongsTo('App\Models\Campeonato');
    }
    public function time(){
        return $this->belongsTo('App\Models\Time');
    }
}
