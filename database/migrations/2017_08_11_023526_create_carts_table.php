<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('carts', function($table){
        $table->increments('id');
        $table->unsignedInteger('order_id');
        $table->unsignedInteger('good_id');
        $table->unsignedInteger('number');
        $table->unsignedInteger('subtotal');
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
      Schema::drop('carts');
    }
}
