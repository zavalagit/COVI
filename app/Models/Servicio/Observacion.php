<?php

namespace App\Models\Servicio;

use Illuminate\Database\Eloquent\Model;

class Observacion extends Model
{
    protected $table = "observacion_servicio";
    protected $fillable = ['observaciones', 
                            'fecha_observacion', 
                            'usuario_id', 
                            'servicio_id'];
    
    //uno a muchos
    public function usuarios()
    {
        return $this->belongsTo('App\Models\Seguridad\Usuario','usuario_id');
    }

    //uno a muchos
    public function servicios()
    {
        return $this->belongsTo('App\Models\Servicio\Servicio','servicio_id');
    }
}
