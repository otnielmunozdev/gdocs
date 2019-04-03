<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    public $timestamps = false;
    protected $fillable = ['nombre','cargo'];

    public function documentos()
    {
        return $this->belongsToMany(Documento::class); //pertenece a muchis documentos
    }
}
