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
<br />
<!--<a style="float:right" href="{{{asset('/cart_input')}}}" class="shopBtn" >Next</a>-->

  <section>
    <form action="{!! URL::to('/ledaq') !!}" method="post">

    <h3>お客様情報</h3>
    <table class="ta1 mb15">
      <tr>
        <th colspan="2" class="tamidashi">※マークは入力必須です</th>
      </tr>
      <tr>
        <th>お名前※</th>
        <td><input type="text" name="お名前" size="30" class="ws"></td>
      </tr>
      <tr>
        <th>メールアドレス※</th>
        <td><input type="text" name="メールアドレス" size="30" class="ws"></td>
      </tr>
      <tr>
        <th>ご住所(都道府県)※</th>
        <td>
          <select name="ご住所(都道府県)">
            <option value="" selected="selected">都道府県選択</option>
            <option value="北海道">北海道</option>
            <option value="青森県">青森県</option>
            <option value="岩手県">岩手県</option>
            <option value="宮城県">宮城県</option>
            <option value="秋田県">秋田県</option>
            <option value="山形県">山形県</option>
            <option value="福島県">福島県</option>
            <option value="茨城県">茨城県</option>
            <option value="栃木県">栃木県</option>
            <option value="群馬県">群馬県</option>
            <option value="埼玉県">埼玉県</option>
            <option value="千葉県">千葉県</option>
            <option value="東京都">東京都</option>
            <option value="神奈川県">神奈川県</option>
            <option value="新潟県">新潟県</option>
            <option value="富山県">富山県</option>
            <option value="石川県">石川県</option>
            <option value="福井県">福井県</option>
            <option value="山梨県">山梨県</option>
            <option value="長野県">長野県</option>
            <option value="岐阜県">岐阜県</option>
            <option value="静岡県">静岡県</option>
            <option value="愛知県">愛知県</option>
            <option value="三重県">三重県</option>
            <option value="滋賀県">滋賀県</option>
            <option value="京都府">京都府</option>
            <option value="大阪府">大阪府</option>
            <option value="兵庫県">兵庫県</option>
            <option value="奈良県">奈良県</option>
            <option value="和歌山県">和歌山県</option>
            <option value="鳥取県">鳥取県</option>
            <option value="島根県">島根県</option>
            <option value="岡山県">岡山県</option>
            <option value="広島県">広島県</option>
            <option value="山口県">山口県</option>
            <option value="徳島県">徳島県</option>
            <option value="香川県">香川県</option>
            <option value="愛媛県">愛媛県</option>
            <option value="高知県">高知県</option>
            <option value="福岡県">福岡県</option>
            <option value="佐賀県">佐賀県</option>
            <option value="長崎県">長崎県</option>
            <option value="熊本県">熊本県</option>
            <option value="大分県">大分県</option>
            <option value="宮崎県">宮崎県</option>
            <option value="鹿児島県">鹿児島県</option>
            <option value="沖縄県">沖縄県</option>
          </select></td>
        </tr>
        <tr>
          <th>ご住所(市区町村以下)※</th>
          <td><input type="text" name="ご住所(市区町村以下)" size="30" class="wl"></td>
        </tr>
        <tr>
          <th>電話番号※</th>
          <td><input type="text" name="ご住所(市区町村以下)" size="30" class="wl"></td>
        </tr>
        <tr>
          <th>お支払い方法※</th>
          <td>
            <select name="お支払い方法">
              <option value="" selected="selected">お支払い方法</option>
              <option value="北海道">口座振り込み</option>
              <option value="北海道">代引き</option>
            </select></td>
          </tr>
        <tr>
          <th>その他（任意）</th>
          <td><textarea name="お問い合わせ詳細" cols="30" rows="10" class="wl"></textarea></td>
        </tr>
      </table>

      <p class="c">
        <input type="submit" value="内容を確認する">
      </p>
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

    </form>
    </section>

  </div>

</div>


@stop
