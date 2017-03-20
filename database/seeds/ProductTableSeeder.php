<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
// use App\Comment;
// include App\Post.php;

class ProductTableSeeder extends Seeder{

public function run(){
	$description = 'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。';

	$price = '5000';

	for( $i = 1 ; $i <= 10 ; $i++) {
		$product = new App\Product;
		$product->name = "$i 商品";
    $product->slug = "$i 商品";
		$product->description = $description;
		$product->price = $price;
		$product->image = "$i image";
		$product->save();
	}

	// カテゴリーを追加する
	//$cat1 = new App\GoodCategory;
	//$cat1->name = "ハンカチ";
	//$cat1->save();

	//$cat2 = new App\GoodCategory;
	//$cat2->name = "男性服";
	//$cat2->save();

}
}
