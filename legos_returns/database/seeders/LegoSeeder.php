<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Lego;

class LegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('legos')->truncate();

        DB::table('legos')->insert([
    [
        'numero' => 1,
        'nombre' => 'Lego Ciudad',
        'tema' => 'Ciudades',
        'precio' => 30,
        'cantidad' => 100,
    ],
    [
        'numero' => 12,
        'nombre' => 'Lego Espacial',
        'tema' => 'Espacio',
        'precio' => 40,
        'cantidad' => 75,
    ],
    [
        'numero' => 2,
        'nombre' => 'Lego Castillo',
        'tema' => 'Medieval',
        'precio' => 35,
        'cantidad' => 90,
    ],
    [
        'numero' => 3,
        'nombre' => 'Lego Ferrocarril',
        'tema' => 'Transporte',
        'precio' => 45,
        'cantidad' => 60,
    ],
    [
        'numero' => 4,
        'nombre' => 'Lego Piratas',
        'tema' => 'Aventuras',
        'precio' => 32,
        'cantidad' => 80,
    ],
    [
        'numero' => 5,
        'nombre' => 'Lego Dinosaurios',
        'tema' => 'Prehistoria',
        'precio' => 37,
        'cantidad' => 70,
    ],
    [
        'numero' => 6,
        'nombre' => 'Lego Technic',
        'tema' => 'Tecnología',
        'precio' => 50,
        'cantidad' => 55,
    ],
    [
        'numero' => 7,
        'nombre' => 'Lego Superhéroes',
        'tema' => 'Superhéroes',
        'precio' => 42,
        'cantidad' => 65,
    ],
    [
        'numero' => 8,
        'nombre' => 'Lego Animales',
        'tema' => 'Naturaleza',
        'precio' => 28,
        'cantidad' => 110,
    ],
    [
        'numero' => 9,
        'nombre' => 'Lego Star Wars',
        'tema' => 'Ciencia ficción',
        'precio' => 48,
        'cantidad' => 45,
    ],
    [
        'numero' => 10,
        'nombre' => 'Lego Trenes',
        'tema' => 'Transporte',
        'precio' => 37,
        'cantidad' => 75,
    ],
    [
        'numero' => 11,
        'nombre' => 'Lego Naves Espaciales',
        'tema' => 'Espacio',
        'precio' => 39,
        'cantidad' => 70,
    ],
    [
        'numero' => 13,
        'nombre' => 'Lego Pirámides',
        'tema' => 'Historia',
        'precio' => 33,
        'cantidad' => 85,
    ],
    // Agrega más registros según sea necesario
]);
    }
}
