<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use \Cart as Cart;
use Validator;
//use Request;

class CartController extends Controller
{

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    //$quantity = $request->input('quantity');
    return view('cart');
  }

  public function cart_done()
  {
    Cart::destroy();
    return view('cart_done');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
      return $cartItem->id === $request->id;
    });

    //if (!$duplicates->isEmpty()) {
    //return redirect('cart');
    //}

    $quantity = $request->input('quantity');

    if($quantity <= 0) {
      $quantity = 1;
    }

    Cart::add(['id' => $request->id, 'name' => $request->name, 'qty' => $quantity, 'price' => $request->price, 'options' => ['color' => $request->color, 'code' => $request->code, 'image' => $request->image]])->associate('App\Good');
    return redirect('cart')->withSuccessMessage('Item was added to your cart!')->with('quantity',$quantity);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\JsonResponse
  */
  public function update(Request $request, $id)
  {
    // Validation on max quantity
    $validator = Validator::make($request->all(), [
      'quantity' => 'required|numeric|between:1,5'
    ]);

    if ($validator->fails()) {
      session()->flash('error_message', 'Quantity must be between 1 and 5.');
      return response()->json(['success' => false]);
    }

    Cart::update($id, $request->quantity);
    session()->flash('success_message', 'Quantity was updated successfully!');

    return response()->json(['success' => true]);

  }

  //数を減らす
  public function reduce(Request $request, $rowId)
  {
    $item = Cart::get($rowId);
    Cart::update($rowId, $item->qty - 1);

    return redirect('cart');
  }

  //数を増やす
  public function increase(Request $request, $rowId)
  {
    $item = Cart::get($rowId);
    Cart::update($rowId, $item->qty + 1);

    return redirect('cart');
  }

  //アイテムを削除
  public function delete_item(Request $request, $rowId)
  {
    //$item = Cart::get($rowId);
    Cart::update($rowId, 0);

    return redirect('cart');
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    Cart::remove($id);
    return redirect('cart')->withSuccessMessage('Item has been removed!');
  }

  /**
  * Remove the resource from storage.
  *
  * @return \Illuminate\Http\Response
  */
  public function emptyCart()
  {
    Cart::destroy();
    return redirect('cart')->withSuccessMessage('Your cart has been cleared!');
  }

  /**
  * Switch item from shopping cart to wishlist.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function switchToWishlist($id)
  {
    $item = Cart::get($id);

    Cart::remove($id);

    $duplicates = Cart::instance('wishlist')->search(function ($cartItem, $rowId) use ($id) {
      return $cartItem->id === $id;
    });

    if (!$duplicates->isEmpty()) {
      return redirect('cart')->withSuccessMessage('Item is already in your Wishlist!');
    }

    Cart::instance('wishlist')->add($item->id, $item->name, 1, $item->price)
    ->associate('App\Product');

    return redirect('cart')->withSuccessMessage('Item has been moved to your Wishlist!');

  }

  public function cart_input()
  {
    //$goodcategory_goods = Good::where('cat_id', $id)->get();

    return view('cart_input');
  }


}
