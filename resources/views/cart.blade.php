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
          <th>詳細</th>
          <th>	Ref. </th>
          <th>Avail.</th>
          <th>単価</th>
          <th>数量</th>
          <th>合計</th>
        </tr>
      </thead>
      <tbody>

        <?php

        //foreach($cart as $key => $val)
        foreach (Cart::content() as $item)
        {
          print $item->id;
          print '<tr>';
          print '<td><img width="100" src="/images/e.jpg" alt=""></td>';
          print '<td>'.$item->name.'<br>Carate : 22<br>Model : n/a</td>';
          print '<td> - </td>';
          print '<td><span class="shopBtn"><span class="icon-ok"></span></span> </td>';
          print '<td>'.$item->price.'</td>';
          print '<td>';
          print '<input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16" type="text" value="2">';
          print '<div class="input-append">';
          print '<button class="btn btn-mini" type="button">-</button><button class="btn btn-mini" type="button"> + </button><button class="btn btn-mini btn-danger" type="button"><span class="icon-remove"></span></button>';
          print '</div>';
          print '</td>';
          print '<td>'.$item->subtotal.'</td>';
          print '</tr>';
        }

        ?>

        <tr>
          <td colspan="6" class="alignR">税金:	</td>
          <td> ¥{{ Cart::instance('default')->tax() }}</td>
        </tr>
        <tr>
          <td colspan="6" class="alignR">合計:	</td>
          <td class="label label-primary"> ¥{{ Cart::total() }}</td>
        </tr>
      </tbody>
    </table><br/>

    <div style="float:right">
    <form action="{{ url('/emptyCart') }}" method="POST">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" class="btn btn-danger btn-lg" value="Empty Cart">
    </form>
  </div>

    <a href="products.html" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Continue Shopping </a>
    <a href="login.html" class="shopBtn btn-large pull-right">Next <span class="icon-arrow-right"></span></a>

  </div>

</div>


@stop
