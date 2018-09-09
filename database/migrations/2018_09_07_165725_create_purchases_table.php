<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->double('amount');
            $table->string('currency')->default('kyat');
            $table->timestamps();
        });

        Schema::create('item_purchase', function (Blueprint $table) {
            $table->unsignedInteger('item_id');
            $table->unsignedInteger('purchase_id');
            $table->double('price');
            $table->integer('quantity');
            $table->timestamps();
            $table->foreign('item_id')->references('id')->on('items');
            $table->foreign('purchase_id')->references('id')->on('purchases');
            $table->primary(['item_id', 'purchase_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
        Schema::dropIfExists('item_purchase');
    }

    public function items()
    {
        return $this->belongsToMany('App\Item');
    }
}
