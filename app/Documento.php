<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    //protected $table = 'proveedores'  

    public function user()
    {
        return $this->belongsTo(User::class); //paso el usuario al que pertenece
    }
}
