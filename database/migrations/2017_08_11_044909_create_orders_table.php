<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('orders', function($table){
        $table->unsignedInteger('id');
        $table->string('name_kanji');
        $table->string('name_kana');
        $table->string('email');
        $table->string('address_1');
        $table->string('address_2');
        $table->string('tel');
        $table->string('pay');
        $table->string('other');
        $table->unsignedInteger('total');
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
      Schema::drop('orders');
    }
}
