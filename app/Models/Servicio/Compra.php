<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = "compra_servicio";
    protected $fillable = ['fecha_compra',
                            'reporte_ruta',
                            'observaciones', 
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
