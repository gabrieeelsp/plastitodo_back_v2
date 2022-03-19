<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(EmpresaSeeder::class);
        $this->call(SucursalSeeder::class);
        $this->call(StockproductSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(ValorSeeder::class);

        $this->call(SaleSeeder::class);

        $this->call(PaymentmethodSeeder::class);
    }
}
