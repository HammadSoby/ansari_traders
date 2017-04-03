<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('main_category_id')->index()->unsigned();
            $table->foreign('main_category_id')->references('id')->on('categories');
            $table->integer('sub_category_id')->index()->unsigned();
            $table->foreign('sub_category_id')->references('id')->on('sub_categories');
            $table->string('slug');
            $table->string('price');
            $table->string('weight');
            $table->string('image');
            $table->text('description');
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
        Schema::dropIfExists('products');
    }
}
