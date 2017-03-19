@extends('page_default')

@section('page_content')

<div id="main">

  <?php
  session_start();
  if(isset($_SESSION['cart']) == true){
    $cart = $_SESSION['cart'];
  }
  $cart[] = $good->id;
  $_SESSION['cart'] = $cart;
  ?>


  <div class="well well-small">
    <h1>Check Out <small class="pull-right">
      <?php
      $count = count($cart);
      print ''.$count.' Items are in the cart';
      ?>
    </small></h1>

    <hr class="soften"/>

    <table class="table table-bordered table-condensed">
      <thead>
        <tr>
          <th>Product</th>
          <th>Description</th>
          <th>	Ref. </th>
          <th>Avail.</th>
          <th>Unit price</th>
          <th>Qty </th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>

        <?php

        foreach($cart as $key => $val)
        {
          print '<tr>';
          print '<td><img width="100" src="/images/e.jpg" alt=""></td>';
          print '<td>Items name here<br>Carate : 22<br>Model : n/a</td>';
          print '<td> - </td>';
          print '<td><span class="shopBtn"><span class="icon-ok"></span></span> </td>';
          print '<td>$50.00</td>';
          print '<td>';
          print '<input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16" type="text" value="2">';
          print '<div class="input-append">';
          print '<button class="btn btn-mini" type="button">-</button><button class="btn btn-mini" type="button"> + </button><button class="btn btn-mini btn-danger" type="button"><span class="icon-remove"></span></button>';
          print '</div>';
          print '</td>';
          print '<td>$100.00</td>';
          print '</tr>';
        }

        ?>

        <tr>
          <td colspan="6" class="alignR">Total products:	</td>
          <td> $448.42</td>
        </tr>
        <tr>
          <td colspan="6" class="alignR">Total products:	</td>
          <td> $448.42</td>
        </tr>
        <tr>
          <td colspan="6" class="alignR">Total products:	</td>
          <td> $448.42</td>
        </tr>
        <tr>
          <td colspan="6" class="alignR">Total products:	</td>
          <td class="label label-primary"> $448.42</td>
        </tr>
      </tbody>
    </table><br/>

    <a href="products.html" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Continue Shopping </a>
    <a href="login.html" class="shopBtn btn-large pull-right">Next <span class="icon-arrow-right"></span></a>

  </div>

</div>


@stop
