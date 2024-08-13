<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelTime extends Model
{
    use HasFactory;
    protected $fillable = ['Nome', 'Pais'];
    public function timeCampeonatos(){
        return $this->hasMany('App\Models\mdTimeCampeonato', 'campeonato_id');
    }
}
