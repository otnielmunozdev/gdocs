<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
   // protected $fillable = ['envia',  'no_oficio', 'fecha_recibido', 'recibido']; //todas las columnas que quiero dejar que se asignan la informacion masiva
    protected $guarder = ['id']; //no los asigna el usuario y asume que todo lo demas es fillable , son los que estan protegidos
    public function user()
    {
        return $this->belongsTo(User::class); //paso el usuario al que pertenece
    }

    public function funcionarios()
    {
        return $this->belongsToMany(Funcionario::class);//este dociumentpo pertenence a muchos funcionarios
    }
}
