<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCampeonato extends Model
{
    use HasFactory;
    protected $fillable = ['Nome', 'Tipo'];
    public function timeCampeonatos(){
        return $this->hasMany('App\Models\mdTimeCampeonato', 'time_id');
    }
}
