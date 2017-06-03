<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
         {
             Schema::create('products', function (Blueprint $table) {
                 $table->increments('id');
                 $table->string('name');
                 $table->string('slug');
                 $table->text('description');
                 $table->decimal('price', 10, 2);
                 $table->string('image');
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