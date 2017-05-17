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

  <section>
    <form action="{!! URL::to('/cart') !!}" method="post">

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
