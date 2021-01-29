<?php

use Illuminate\Database\Seeder;
use App\Models\Region;
use App\Models\Ciudad;
use App\Models\Cliente;
use App\Models\Ducto;
use App\Models\Requerimiento;
use App\Models\TipoVehiculo;
use App\Models\Vehiculo;

class CreateRegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $region = Region::create([
            'nombre' => "Antofagasta",
            'pais' => "Chile",
            'activo' => "0"
        ]);

        $ciudad = Ciudad::create([
            'nombre' => "Antofagasta",
            'region_id' => $region->id,
            'activo' => "0"
        ]);

        $cliente = Cliente::create([
            'rut' => "123456-7",
            'nombre' => "Claudio",
            'giro' => "456-465",
            'ciudad_id' => $ciudad->id,
            'direccion' => "Av las flores",
            'telefono' => "9871324567",
            'email' => "claudio@mail.com",
            'nombre_contacto' => "Claudio",
            'telefono_contacto' => "9871324567",
            'email_contacto' => "claudio@mail.com",
            'activo' => "0"
        ]);

        $ducto = Ducto::create([
            'descripcion' => "Tubería de agua",
            'tipo' => "Origen",
            'activo' => "0"
        ]);
        $ducto = Ducto::create([
            'descripcion' => "Tubería de agua2",
            'tipo' => "Destino",
            'activo' => "0"
        ]);
        $ducto = Ducto::create([
            'descripcion' => "Tubería de agua2",
            'tipo' => "Origen - Destino",
            'activo' => "0"
        ]);

        $requerimiento = Requerimiento::create([
            'fecha_programada' => '2020-11-30',
            'codigo' => '65A4SD',
            'nombre_cliente' => $cliente->id,
            'cantidad_de_equipos' => "3",
            'ducto' => $ducto->id,
            'observaciones' => "Ninguna"
        ]);

        $tipoVehiculo = TipoVehiculo::create([
            'nombre' => "Vehículo pequeño",
            'activo' => "0"
        ]);

        $vehiculo = Vehiculo::create([
            'patente' => "456-132",
            'TipoVehiculo_id' => $tipoVehiculo->id,
            'marca' => "Fiat",
            'modelo' => "Regata",
            'nro_chasis' => "15",
            'nro_motor' => "18",
            'activo' => "0"
        ]);
        
        
    }
}
