<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
// use App\Comment;
// include App\Post.php;

class GoodSeeder extends Seeder{

public function run(){
	$detail = 'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。';

	$cost = '5000';

	for( $i = 1 ; $i <= 10 ; $i++) {
		$good = new App\Good;
		$good->name = "$i 番目の投稿";
		$good->detail = $detail;
		$good->cat_id = 1;
		$good->cost = $cost;
		$good->save();
	}

	// カテゴリーを追加する
	$cat1 = new App\GoodCategory;
	$cat1->name = "ハンカチ";
	$cat1->save();

	$cat2 = new App\GoodCategory;
	$cat2->name = "男性服";
	$cat2->save();

}
}
