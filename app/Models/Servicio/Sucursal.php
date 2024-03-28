<?php

namespace App\Models\Servicio;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = "sucursales";
    protected $fillable = ['cio', 'inmueble', 'ciudad', 'usuario_id'];

    //uno a muchos
    public function usuarios()
    {
        return $this->belongsTo('App\Models\Seguridad\Usuario','usuario_id');
    }

}
