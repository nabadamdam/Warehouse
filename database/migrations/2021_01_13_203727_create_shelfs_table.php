<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShelfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shelfs', function (Blueprint $table) {
            $table->id();
            $table->string("Name");
            $table->string("Label");
            $table->integer("Capacity");
            $table->bigInteger("warehouseareas_id")->unsigned();
            $table->foreign("warehouseareas_id")->references("id")->on("warehouse_areas");
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
        Schema::dropIfExists('shelfs');
    }
}
