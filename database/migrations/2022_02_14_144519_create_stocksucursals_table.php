<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksucursalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocksucursals', function (Blueprint $table) {
            $table->id();
            $table->decimal('stock', 15, 4)->default(100);
            $table->timestamps();

            $table->foreignId('stockproduct_id')->constrained('stockproducts')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('sucursal_id')->constrained('sucursals')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocksucursals');
    }
}
