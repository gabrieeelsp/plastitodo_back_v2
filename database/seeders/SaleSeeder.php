<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use App\Models\Saleproduct;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* for ( $i = 1; $i < 100000; $i++){
            DB::table('sales')->insert([
            //\App\Models\Sale::create([
                'estado' => 'FINALIZADA',
            ]);
            DB::table('saleitems')->insert([
                'saleproduct_id' => 1,
                'cantidad' => 2,
                'precio' => 10,
                'sale_id' => $i
            ]);
            DB::table('saleitems')->insert([
                'saleproduct_id' => 2,
                'cantidad' => 3,
                'precio' => 20,
                'sale_id' => $i
            ]);
        } */
        


        
    }
}
