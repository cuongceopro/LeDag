<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInquirysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('inquirys', function($table){
   			$table->increments('id');
   			$table->string('name_roma');
   			$table->string('name_kana');
        $table->string('address_1');
        $table->string('address_2');
        $table->string('tel');
        $table->string('email');
        $table->string('requirement');
        $table->string('daiichikibou');
        $table->string('numbers_people');
        $table->string('have_gone');
        $table->string('detail');
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
      Schema::drop('inquirys');
    }
}
