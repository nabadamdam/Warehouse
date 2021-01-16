<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_histories', function (Blueprint $table) {
            $table->id();
            $table->integer("Quantity");
            $table->date("Date");
            $table->boolean("Entry");
            $table->boolean("TakenOut");
            $table->bigInteger("articles_id")->unsigned();
            $table->foreign("articles_id")->references("id")->on("articles");
            $table->bigInteger("warehouse_id")->unsigned();
            $table->foreign("warehouse_id")->references("id")->on("warehouses");
            $table->bigInteger("user_id")->unsigned();
            $table->foreign("user_id")->references("id")->on("users");
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
        Schema::dropIfExists('article_histories');
    }
}
