<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolicitudRegistro extends Model
{
    protected $fillable = [
        'estado_id', 'nombre', 'apellidos', 'correo',
        'numero_celular', 'archivo_cedula', 'archivo_certificado'
    ];

    public function estado()
    {
        return $this->belongsTo(EstadoSolicitud::class, 'estado_id');
    }
}