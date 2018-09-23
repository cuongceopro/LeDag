@extends('page_default')

@section('page_content')

<div id="main">

  <section class="box">
    <h2>オーダーメイド&リメーク</h2>

    <br />
    <img src="{{{asset('images/order/ordermade.png')}}}" height="300" alt="">
    <br />
    <br />

    <p style="text-align:center">
      お好きなデザイン・生地で、お客様のサイズにぴったりあったお洋服をお作りします。
    </p>
    <p style="text-align:center">
      仮縫い1っ回つきで、お忙しい方でも無理なく、お洋服が出来ます。
    </p>
    <p style="text-align:center">
      お客様のご希望に沿ったお洋服を、相談しながら、丁寧にお作り出来ます。
    </p>

    <h3>フルオーダーの流れ</h3>

    <p>
      STEP 1: ご予約/デザイン
      <img src="{{{asset('images/order/1.jpg')}}}" alt="">
    </p>

    <p>
      STEP 2: 採寸
      <img src="{{{asset('images/order/2.jpg')}}}" alt="">
    </p>

    <p>
      STEP 3: パターン/仮縫い
      <img src="{{{asset('images/order/3.png')}}}" alt="">
    </p>

    <p>
      STEP 4: 縫製
      <img src="{{{asset('images/order/4.jpg')}}}" alt="">
    </p>

    <p>
      STEP 4: 発送<br>
      納期約1.5か月～2か月間（混み具合に前後します）
    </p>

    </br>

    <h3>料金一覧</h3>

    <table class="ta1">
      <tr>
        <th>種類</th>
        <td>価格</td>
      </tr>
      <tr>
        <th>トップス</th>
        <td>7000円〜</td>
      </tr>
      <tr>
        <th>スカート</th>
        <td>7000円〜</td>
      </tr>
      <tr>
        <th>パンツ</th>
        <td>7000円〜</td>
      </tr>
      <tr>
        <th>ワンピース</th>
        <td>6000円〜</td>
      </tr>
      <tr>
        <th>ジャケット</th>
        <td>18000円〜</td>
      </tr>
      <tr>
        <th>コート</th>
        <td>18000円〜</td>
      </tr>
    </table>
    <br />

    <h3>マイパターンを承ります</h3>
    <p>
      お客様のお気に入りのお洋服と同じ形のお洋服をお作りします。
    </p>

    <div class="well well-small">
      <div class="row-fluid">
        <div class="span2">
          <img src="{{{asset('images/order/product_1_small.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_2_small.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_3_small.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_4_small.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_5_small.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_6_small.jpg')}}}" alt="">
        </div>
      </div>
      <br />
      <div class="row-fluid">
        <div class="span2">
          <img src="{{{asset('images/order/product_7_small.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_8_small.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_9_small.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_10_small.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_11_small.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_12_small.jpg')}}}" alt="">
        </div>
      </div>
      <br />
      <div class="row-fluid">
        <div class="span2">
          <img src="{{{asset('images/order/product_13_small.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_14_small.JPG')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_15_small.JPG')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_16_small.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_17_small.jpg')}}}" alt="">
        </div>
        <div class="span2">
          <img src="{{{asset('images/order/product_18_small.jpg')}}}" alt="">
        </div>
      </div>
    </div>

  </section>

</div>

@stop