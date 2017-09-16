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
      お好きなデザイン・生地で、お客様のサイズにぴったりあったお洋服をお作りします。<br>
      On - demand tailoring, Fabric and other materials: based on clients' demand and interests.
    </p>
    <p style="text-align:center">
      仮縫い1回込み<br>
      Including one try-on before completion.
    </p>
    <p style="text-align:center">
      お客様のご希望に沿ったお洋服を、相談しながら、丁寧にお作り出来ます。<br>
      We commit to complete our clients' products with our highest carefullness based on their demands.
    </p>

    <h3>フルオーダーの流れ(Order process)</h3>

    <p>
      STEP 1: ご予約/デザイン(Contacting - Designing)
      <img src="{{{asset('images/order/1.jpg')}}}" alt="">
    </p>

    <p>
      STEP 2: 採寸(Measuring)
      <img src="{{{asset('images/order/2.jpg')}}}" alt="">
    </p>

    <p>
      STEP 3: パターン/仮縫い(Cutting - Forming)
      <img src="{{{asset('images/order/3.png')}}}" alt="">
    </p>

    <p>
      STEP 4: 縫製(Tailoring)
      <img src="{{{asset('images/order/4.jpg')}}}" alt="">
    </p>

    <p>
      STEP 5: 発送(Delivering)<br>
      納期約1.5か月～2か月間（混み具合に前後します）<br>
      Shipping within 45-60 days (depending on different factors)
    </p>

    </br>

    <h3>料金一覧(Price)</h3>

    <table class="ta1">
      <tr>
        <th>種類(Type)</th>
        <td>価格(Price)</td>
      </tr>
      <tr>
        <th>トップス(tops)</th>
        <td>7000円〜</td>
      </tr>
      <tr>
        <th>スカート(skirt)</th>
        <td>7000円〜</td>
      </tr>
      <tr>
        <th>パンツ(pants)</th>
        <td>7000円〜</td>
      </tr>
      <tr>
        <th>ワンピース(one-piece)</th>
        <td>6000円〜</td>
      </tr>
      <tr>
        <th>ジャケット(jaket)</th>
        <td>18000円〜</td>
      </tr>
      <tr>
        <th>コート(coat)</th>
        <td>18000円〜</td>
      </tr>
    </table>
      <p><font color="red">※生地代は別途かかります<br>Excluding fabric cost</font></p>
    <br />

    <h3>マイパターンを承ります(My pattern)</h3>

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

    <h3>リフォーム(Reform)</h3>
    <img src="{{{asset('images/order/5.png')}}}" alt="">

  </section>

</div>

@stop
