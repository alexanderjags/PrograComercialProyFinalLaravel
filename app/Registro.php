<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $table = 'registros';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function ahijados()
    {
        return $this->belongsToMany(ahijado::Class);
    }
} 