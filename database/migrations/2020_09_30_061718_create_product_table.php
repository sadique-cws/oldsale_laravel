<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->integer("category");
            $table->string("address");
            $table->string("city");
            $table->string("state");
            $table->string("image");
            $table->string("description");
            $table->string("brand");
            $table->string("model");
            $table->string("price");
            $table->string("name");
            $table->string("contact");
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
        Schema::dropIfExists('product');
    }
}
