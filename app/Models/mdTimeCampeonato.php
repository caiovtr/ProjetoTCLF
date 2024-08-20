<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mdTimeCampeonato extends Model
{
    use HasFactory;
    protected $fillable = ['time_id', 'campeonato_id'];
    public function campeonato(){
        return $this->belongsTo('App\Models\mdCampeonato');
    }
    public function time(){
        return $this->belongsTo('App\Models\mdTime');
    }
}
