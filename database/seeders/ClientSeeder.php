<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name' => "Aquiles Taborelli",
            'tipo' => 'MAYORISTA',
        ]);

        DB::table('clients')->insert([
            'name' => "Roberto Días",
            'tipo' => 'MINORISTA',
        ]);
        DB::table('clients')->insert([
            'name' => "Elsa Aguirre",
            'tipo' => 'MAYORISTA',
        ]);

        DB::table('clients')->insert([
            'name' => "Cotillon Perez",
            'tipo' => 'MINORISTA',
        ]);

        DB::table('clients')->insert([
            'name' => "Cotillon Gonzales",
            'tipo' => 'MINORISTA',
        ]);
    }
}
