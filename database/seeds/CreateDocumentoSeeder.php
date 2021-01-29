<?php

use Illuminate\Database\Seeder;
use App\Models\Documento;

class CreateDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Documento::create([
            "nombre" => "GT - ESH - 001 - CHECKLIST CAMIONES Y SEMIRREMOLQUES - V01"
        ]);
        Documento::create([
            "nombre" => "GT - ESH - 002 - TOMA 5 - REV2"
        ]);
        Documento::create([
            "nombre" => "GT - ESH - 003 - PLAN DE VIAJE - V1"
        ]);
        Documento::create([
            "nombre" => "GT - ESH - 004 - CUESTIONARIO SOMNOLENCIA GARRIDO - V2"
        ]);
        Documento::create([
            "nombre" => "GT - ESH - 005 - LISTA VERIFICACION SANITIZACION VEHICULOS COVID19 - V1"
        ]);
        Documento::create([
            "nombre" => "GT - ESH - 006 - LISTA DE VERIFICACION HIGIENE Y SANITIZACION AREAS - V1"
        ]);
        Documento::create([
            "nombre" => "GT - ESH - 007 - LISTA VERIFICACION CAMIONES ANEXO 2 PINTADO - V1"
        ]);
        Documento::create([
            "nombre" => "GT - ESH - 008 - LISTA VERIFICACION CONDICIONES CONDUCTOR PINTADO - V1"
        ]);
        Documento::create([
            "nombre" => "GT - ESH - 009 - REGISTRO PRUEBA DE COMUNICACION RADIAL EMERGENCIAS - REV2"
        ]);
        Documento::create([
            "nombre" => "GT - ESH - 010 - LISTA VERIFICACION RIESGO CRITICO TRABAJO EN ALTURA - V1"
        ]);
        Documento::create([
            "nombre" => "GT - ESH - 011 - CARTILLA OBSERVACION CUIDADO DE MANOS - V1"
        ]);
        Documento::create([
            "nombre" => "GT - ESH - 012 - LISTA DE VERIFICACION GESTION VIAL - V1"
        ]);
        Documento::create([
            "nombre" => "GT - ESH - 013 - CHEQUEO COVID19 PARA TRANSPORTISTAS - V1"
        ]);
        Documento::create([
            "nombre" => "GT - ESH - 014  CHECK LIST CAMBIO DE TURNO - V1"
        ]);
        Documento::create([
            "nombre" => "GT - ESH - 015 - CHEQUEO VERIFICACION DEL SUPERVISOR COVID19 - V1"
        ]);
        Documento::create([
            "nombre" => "GT - ESH - 016 - LISTA VERIFICACION MEDIDAS SANITARIAS - V1"
        ]);
        Documento::create([
            "nombre" => "GT - ESH - 017 - REGISTRO DE BARRERA SANITARIA - V1"
        ]);
        Documento::create([
            "nombre" => "GT - ESH - 018 - ANALISIS SEGURIDAD TRABAJO - REV2"
        ]);
    }
}
