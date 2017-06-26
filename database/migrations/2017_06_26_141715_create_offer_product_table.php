<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_product', function (Blueprint $table) {
            $table->integer('product_id')->unsigned();
            $table->integer('offer_id')->unsigned();
            $table->integer('qte')->unsigned();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('offer_id')->references('id')->on('offers');

            $table->primary(['product_id', 'offer_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_product');
    }
}
