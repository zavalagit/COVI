<?php

namespace App\Models\Servicio;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = "servicios";
    protected $fillable = ['obra', 
                            'ticket', 
                            'cliente', 
                            'sucursal_id', 
                            'supervisor_id', 
                            'usuario_id',
                            'autorizacion', 
                            'oc/fecha',
                            'factura',
                            'subtotal',
                            'iva',
                            'total',
                            'comentario',
                            'prioridad',
                            'hoja_servicio',
                            'reporte_fotografico'];

    //uno a muchos
    public function usuarios()
    {
        return $this->belongsTo('App\Models\Seguridad\Usuario','usuario_id');
    }

    //uno a muchos
    public function sucursales()
    {
        return $this->belongsTo('App\Models\Servicio\Sucursal','sucursal_id');
    }

    //uno a muchos
    public function supervisor()
    {
        return $this->belongsTo('App\Models\Seguridad\Usuario','supervisor_id');
    }



}
