@extends('page_default')

@section('page_content')

<div id="main">

  <section class="box">
    <h2>{{ __('messages.order_made_remake') }}</h2>

    <br />
    <img src="{{{asset('images/order/ordermade.png')}}}" height="300" alt="">
    <br />
    <br />

    <p style="text-align:center">
      {{ __('messages.order_made_remake_detail_1') }} 
    </p>
    <p style="text-align:center">
      {{ __('messages.order_made_remake_detail_2') }} 
    </p>
    <p style="text-align:center">
      {{ __('messages.order_made_remake_detail_3') }} 
    </p>

    <h3>{{ __('messages.order_process') }} </h3>

    <p>
      STEP 1: {{ __('messages.order_process_detail_1') }}
      <img src="{{{asset('images/order/1.jpg')}}}" alt="">
    </p>

    <p>
      STEP 2: {{ __('messages.order_process_detail_2') }}
      <img src="{{{asset('images/order/2.jpg')}}}" alt="">
    </p>

    <p>
      STEP 3: {{ __('messages.order_process_detail_3') }}
      <img src="{{{asset('images/order/3.png')}}}" alt="">
    </p>

    <p>
      STEP 4: {{ __('messages.order_process_detail_4') }}
      <img src="{{{asset('images/order/4.jpg')}}}" alt="">
    </p>

    <p>
      STEP 5: {{ __('messages.order_process_detail_5') }}<br>
      {{ __('messages.order_process_detail_5_1') }}
    </p>

    </br>

    <h3>{{ __('messages.price_list') }}</h3>

    <table class="ta1">
      <tr>
        <th>{{ __('messages.type') }}</th>
        <td>{{ __('messages.price') }}</td>
      </tr>
      <tr>
        <th>{{ __('messages.tops') }}</th>
        <td>7000円〜</td>
      </tr>
      <tr>
        <th>{{ __('messages.skirt') }}</th>
        <td>7000円〜</td>
      </tr>
      <tr>
        <th>{{ __('messages.pants') }}</th>
        <td>7000円〜</td>
      </tr>
      <tr>
        <th>{{ __('messages.one_piece') }}</th>
        <td>6000円〜</td>
      </tr>
      <tr>
        <th>{{ __('messages.jacket') }}</th>
        <td>18000円〜</td>
      </tr>
      <tr>
        <th>{{ __('messages.coat') }}</th>
        <td>18000円〜</td>
      </tr>
    </table>
      <p><font color="red">※{{ __('messages.notice') }}</font></p>
    <br />

    <h3>{{ __('messages.my_pattern') }}</h3>

    <div class="well well-small">
      <div class="row-fluid">
        <div class="span2">
          <img src="{{{asset('images/order/product_1.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_2.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_3.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_4.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_5.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_6_kari.jpg')}}}" alt="">
        </div>
      </div>
      <br />
      <div class="row-fluid">
        <div class="span2">
          <img src="{{{asset('images/order/product_7.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_8.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_9.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_10.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_11_kari.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_12_kari.jpg')}}}" alt="">
        </div>
      </div>
      <br />
      <div class="row-fluid">
        <div class="span2">
          <img src="{{{asset('images/order/product_13.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_14.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_15.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_16.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_17.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_18.jpg')}}}" alt="">
        </div>
      </div>
    </div>
    <br />

    <h3>{{ __('messages.reform') }}</h3>
    <img src="{{{asset('images/order/5.png')}}}" alt="">

  </section>

</div>

@stop
