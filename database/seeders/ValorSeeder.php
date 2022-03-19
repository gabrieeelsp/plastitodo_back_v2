<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ValorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('valors')->insert([
            'name' => "Billete de $100",
            "valor" => 100
        ]);
        DB::table('valors')->insert([
            'name' => "Billete de $200",
            "valor" => 200
        ]);

        DB::table('valors')->insert([
            'name' => "Moneda de $10",
            "valor" => 10
        ]);

        DB::table('valors')->insert([
            'name' => "Moneda de $5",
            "valor" => 5
        ]);

    }
}
