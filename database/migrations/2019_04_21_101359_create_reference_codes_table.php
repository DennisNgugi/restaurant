<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferenceCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reference_codes', function (Blueprint $table) {
          $table->increments('id');
          $table->string('reference_code');
          $table->integer('total_quantity');
          $table->integer('grand_total');
          $table->integer('amount_recieved');
          $table->integer('due');
          $table->string('served_by');
          $table->string('payment_type');
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
        Schema::dropIfExists('reference_codes');
    }
}
