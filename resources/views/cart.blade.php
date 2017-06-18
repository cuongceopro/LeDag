@extends('page_default')

@section('page_content')

<div id="main">


  <?php
  //session_start();
  //if(isset($_SESSION['cart']) == true){
  //$cart = $_SESSION['cart'];
  //}
  //$cart[] = $good->id;
  //$_SESSION['cart'] = $cart;
  ?>



  <div class="well well-small">
    <h1>Check Out <small class="pull-right">
      <?php
      //$count = count($cart);
      //print ''.$count.' Items are in the cart';
      ?>
    </small></h1>

    <hr class="soften"/>

    <table class="table table-bordered table-condensed">
      <thead>
        <tr>
          <th>商品</th>
          <th>商品名</th>
          <th>色</th>
          <th>素材</th>
          <th>単価</th>
          <th>数量</th>
          <th>合計</th>
        </tr>
      </thead>
      <tbody>

        <?php

        //$item = Cart::search(function ($cartItem, $rowId){
        //return $cartItem->id === '11';
        //});

        //print $item;

        //foreach($cart as $key => $val)
        foreach (Cart::content() as $item)
        {
          //echo $item;
          //print $item->rowId;
          //print $test;
          //print '<br />';
          //print 'Quantity:';
          //print $item->qty;
          print '<tr>';
          print '<td><img width="100" src="/images/product/1.jpg" alt=""></td>';
          print '<td>'.$item->name.'</td>';
          print '<td> - </td>';
          //print '<td><span class="shopBtn"><span class="icon-ok"></span></span> </td>';
          print '<td> - </td>';
          print '<td>¥'.$item->price.'</td>';
          print '<td>';
          print '<input class="span1" style="max-width:34px" placeholder="'.$item->qty.'" id="appendedInputButtons" size="16" type="text" value="'.$item->qty.'">';
          print '<div class="input-append">';
          print '<a href = "/reduce/'.$item->rowId.'"><button class="btn btn-mini" type="button">-</button></a>';
          print '<a href = "/increase/'.$item->rowId.'"><button class="btn btn-mini" type="button"> + </button></a>';
          print '<a href = "/delete_item/'.$item->rowId.'"><button class="btn btn-mini btn-danger" type="button"><span class="icon-remove"></span></button></a>';
          print '</div>';
          print '</td>';
          print '<td>¥'.$item->subtotal.'</td>';
          print '</tr>';
        }

        ?>

        <tr>
          <td colspan="6" class="alignR">税金:	</td>
          <td> ¥{{ Cart::instance('default')->tax() }}</td>
        </tr>
        <tr>
          <td colspan="6" class="alignR">合計:	</td>
          <td> ¥{{ Cart::total() }}</td>
        </tr>
      </tbody>
    </table><br/>

    <a href="{!! URL::to('category/2') !!}" class="shopBtn"><span class="icon-arrow-left"></span> Continue Shopping </a>

    <div >
      <form action="{{ url('/emptyCart') }}" method="POST">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="DELETE">
        <!--<input type="submit" class="btn btn-danger btn-lg" value="Empty Cart">-->
        <button type="submit" class="defaultBtn pull-right">Empty Cart</button>
      </form>
    </div>

    <!--
    <div >
    <form action="{!! URL::to('/cart') !!}" method="put">
    {!! csrf_field() !!}
    <button type="submit" class="shopBtn pull-right">Recalculation</button>
    </form>
    </div>
    -->


<a href="{{{asset('/cart_input')}}}" class="shopBtn" >Next <span class="icon-arrow-right"></span></a>
<!--<a style="float:right" href="{{{asset('/cart_input')}}}" class="shopBtn" >Next</a>-->




</div>

</div>


@stop
