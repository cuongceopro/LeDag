<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('goods', function($table){
			$table->increments('id');
			$table->string('name');
			$table->string('cat_id'); // ポストテーブルとカテゴリーテーブルの紐付けに利用します
			$table->text('detail');
      $table->unsignedInteger('cost'); // 投稿に何件のコメントがついたのかをカウントします
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
		Schema::drop('goods');
	}

}
