<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistroPeso extends Model
{
    protected $fillable = ['ganado_id', 'peso_estimado', 'peso_corregido', 'fecha'];

    protected $casts = ['fecha' => 'date'];

    public function ganado()
    {
        return $this->belongsTo(Ganado::class, 'ganado_id');
    }
}