<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('nama');
            $table->integer('harga')->default('1500000');
            $table->integer('harga_nameset')->default('150000');
            $table->integer('sepeda_id');
            $table->boolean('is_ready')->default(true);
            $table->string('spesifikasi')->default('Steel Frame');
            $table->float('berat')->default('20.0');
            $table->string('gambar');
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
