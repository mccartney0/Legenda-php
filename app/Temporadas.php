<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporadas extends Model
{
    public $timestamps = false;
    protected $fillable = ['numero'];

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }

    public function episodios(){
        return $this->hasMany(Episodios::class);
    }
}
