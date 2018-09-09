<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->double('amount');
            $table->string('currency')->default('kyat');
            $table->timestamps();
        });

        Schema::create('item_sale', function (Blueprint $table) {
         $table->unsignedInteger('item_id');
         $table->unsignedInteger('sale_id');
         $table->double('price');
         $table->integer('quantity');
         $table->timestamps();
         $table->foreign('item_id')->references('id')->on('items');
         $table->foreign('sale_id')->references('id')->on('sales');
         $table->primary(['item_id', 'sale_id']);
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
        Schema::dropIfExists('item_sale');
    }
}
