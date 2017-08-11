@extends('manage.manage_default')

@section('page_content')
<div id="main">

  <section class="box">

    <h2>注文</h2>
    <br>
    <div align="right">
    <a href="{!! URL::to('/manage/order_todo/'.$order->id.'') !!}" class="defaultBtn">未確認にする</a>
    <a href="{!! URL::to('/manage/order_done/'.$order->id.'') !!}" class="defaultBtn">確認済みにする</a>
    </div>
    <br>
    <section>

      <table class="ta1">
      <tr>
      <th>品番</th>
      <th>単価</th>
      <th>数量</th>
      <th>合計</th>
      </tr>

      @foreach($carts as $cart)

      <tr>
      <td>{{ $cart->good_code }}</td>
      <td>{{ $cart->cost }}</td>
      <td>{{ $cart->number }}</td>
      <td>¥{{ $cart->subtotal }}</td>
      </tr>

      @endforeach

    </table>
    <p align="right">合計： ¥{{ $order->total }}</p>
    <br>

      <table class="ta1 mb15">
        <tr>
          <th>お名前(漢字)※</th>
          <td>{{ $order->name_kanji}}</td>
        </tr>
        <tr>
          <th>お名前(かな)</th>
          <td>{{ $order->name_kana}}</td>
        </tr>
        <tr>
          <th>メールアドレス※</th>
          <td>{{ $order->name_email}}</td>
        </tr>
        <tr>
          <th>ご住所(都道府県)※</th>
          <td>{{ $order->address_1}}</td>
          </tr>
          <tr>
            <th>ご住所(市区町村以下)※</th>
            <td>{{ $order->address_2 }}</td>
          </tr>
          <tr>
            <th>電話番号※</th>
            <td>{{ $order->tel}}</td>
          </tr>
          <tr>
            <th>お支払い方法※</th>
            <td>{{ $order->pay}}</td>
            </tr>
          <tr>
            <th>その他（任意）</th>
            <td>{{ $order->other }}</td>
          </tr>
        </table>

        </section>

    </div>
    <!--/main-->
    @stop
