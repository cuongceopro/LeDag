<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\View;
use Request;
use Redirect;

use App\Good;
use Cart;

class GoodsController extends BaseController
{

  public function showCategory($id)
  {
    $goodcategory_goods = Good::where('cat_id', $id)->get();

    return View::make('good_category')
    ->with('goodcategory_goods', $goodcategory_goods);
  }

  public function good($id)
  {
    $good = Good::find($id);
    return View::make('good')->with('good', $good);
  }

  public function cart($id = 0)
  {
    $good = Good::find($id);
    return View::make('cart')->with('good', $good);
  }

  public function add(){
    // カートをクリア
    Cart::destroy();

    // 商品ID, 商品名, 個数, 値段, 詳細情報
    Cart::add([
      'id' => 'a123',
      'name' => 'T-Shirt',
      'qty' => 2,
      'price' => 1000,
      'options' => ['size' => 'large', 'color' => 'blue']
    ]);

    // カートの中身を返す
    return Cart::content();
  }

}
