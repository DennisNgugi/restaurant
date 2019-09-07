<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('reference_id')->unsigned();
          $table->integer('served_by')->unsigned();
          $table->integer('product_id')->unsigned();
          $table->integer('quantity');
          $table->integer('price');
          $table->integer('total');
          $table->date('created_at');
          $table->date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkouts');
    }
}
