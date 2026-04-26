<?php

namespace Database\Seeders;

use App\Models\EstadoComercialGanado;
use Illuminate\Database\Seeder;

class EstadoComercialGanadoSeeder extends Seeder
{
    public function run(): void
    {
        $estados = ['Vendido', 'En venta', 'En propiedad'];

        foreach ($estados as $estado) {
            EstadoComercialGanado::create(['nombre' => $estado]);
        }
    }
}