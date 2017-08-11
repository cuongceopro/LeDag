@extends('manage.manage_default')

@section('page_content')
<div id="main">

  <section class="box">

    <h2>注文</h2>
    <br>
    <div align="right">
    <a href="{!! URL::to('/manage/order/1') !!}" class="defaultBtn">未確認</a>
    <a href="{!! URL::to('/manage/order/2') !!}" class="defaultBtn">確認済み</a>
    </div>
    <br>

    <section>

      <table class="ta1">
      <tr>
      <th>お名前</th>
      <th>電話番号</th>
      <th>メールアドレス</th>
      <th>合計</th>
      <th>詳細</th>
      </tr>

      @foreach($orders as $order)

      <tr>
      <td>{{ $order->name_kanji }}</td>
      <td>{{ $order->tel }}</td>
      <td>{{ $order->email }}</td>
      <td>¥{{ $order->total }}</td>
      <td><a href="{!! URL::to('/manage/order_detail/'.$order->id.'') !!}" class="defaultBtn">詳細</a></td>
      </tr>

      @endforeach

    </table>
    <br />

    </section>

        </section>

    </div>
    <!--/main-->
    @stop
