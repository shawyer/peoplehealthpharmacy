<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ItemSale extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  
    public function up()
    {
        Schema::dropIfExists('ItemSale');
        Schema::create('ItemSale', function (Blueprint $table) {
            $table->id("id");
            $table->bigInteger('Items_Id')->unsigned();
            $table->bigInteger('Sales_Id')->unsigned();
            $table->foreign("Items_id")->references('id')->on('Items')->onDelete('cascade');
            $table->foreign("Sales_Id")->references('id')->on('Sales')->onDelete('cascade');
            $table->integer("Item_Sold");
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
        //
    }
}
