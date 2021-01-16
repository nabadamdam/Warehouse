<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string("Name");
            $table->string("Manufacturer");
            $table->string("ArticleCode");
            $table->integer("Quantity");
            $table->bigInteger("warehouse_id")->unsigned();
            $table->foreign("warehouse_id")->references("id")->on("warehouses");
            $table->bigInteger("categories_id")->unsigned();
            $table->foreign("categories_id")->references("id")->on("categories");
            $table->bigInteger("shelfs_id")->unsigned();
            $table->foreign("shelfs_id")->references("id")->on("shelfs");
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
        Schema::dropIfExists('articles');
    }
}
