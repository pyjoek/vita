<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVita7sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vita7s', function (Blueprint $table) {
            $table->id();
            $table->string('stock_item');
            $table->integer('quantity');
            $table->integer('delivery_no');
            $table->date('date_delivered');
            $table->date('date_recieved');
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
        Schema::dropIfExists('vita7s');
    }
}
