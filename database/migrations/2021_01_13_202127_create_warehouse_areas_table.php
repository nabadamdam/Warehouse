<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehouseAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouse_areas', function (Blueprint $table) {
            $table->id();
            $table->string("Name");
            $table->bigInteger("warehouse_id")->unsigned();
            $table->foreign("warehouse_id")->references("id")->on("warehouses");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warehouse_areas');
    }
}
