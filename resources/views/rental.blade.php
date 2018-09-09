@extends('page_default')

@section('page_content')

<div id="main">

  <section class="box">
    <h2>{{ __('messages.rental') }}</h2>
    <p>
      {{ __('messages.rental_concept') }}
    </p>
    <p>
      {{ __('messages.click_image') }}
    </p>
    <div class="well well-small">
      <div class="row-fluid">
        <div class="span2">
          <a href="good/73"><img src="{{{asset('images/product/rent/AKL-AD001_1.jpg')}}}" alt=""></a>
        </div>
        <div class="span2">
          <a href="good/111"><img src="{{{asset('images/product/rent/AKL-AD002_1.jpg')}}}" alt=""></a>
        </div>
        <div class="span2">
          <a href="good/112"><img src="{{{asset('images/product/rent/AKL-AD003_1.jpg')}}}" alt=""></a>
        </div>
        <div class="span2">
          <a href="good/113"><img src="{{{asset('images/product/rent/LD-R-001_1.JPG')}}}" alt=""></a>
        </div>
        <div class="span2">
          <a href="good/115"><img src="{{{asset('images/product/rent/LD-R-002_1.JPG')}}}" alt=""></a>
        </div>
        <div class="span2">
          <a href="good/117"><img src="{{{asset('images/product/rent/LD-R-003_1.JPG')}}}" alt=""></a>
        </div>
      </div>
      <br/>
      <div class="row-fluid">
        <div class="span2">
          <a href="good/118"><img src="{{{asset('images/product/rent/LD-R-005_1.jpg')}}}" alt=""></a>
        </div>
        <div class="span2">
          <a href="good/119"><img src="{{{asset('images/product/rent/LD-R-006_1.jpg')}}}" alt=""></a>
        </div>
        <div class="span2">
          <a href="good/120"><img src="{{{asset('images/product/rent/LD-R-007_1.jpg')}}}" alt=""></a>
        </div>
        <div class="span2">
          <!--<img src="{{{asset('images/product/rent/10.png')}}}" alt="">-->
        </div>
        <div class="span2">
          <!--<img src="{{{asset('images/product/rent/11.png')}}}" alt="">-->
        </div>
      </div>
    </div>
    <h3>{{ __('messages.option') }}</h3>

      <b>1. {{ __('messages.option_1') }}</b><br>
    <p>
      {{ __('messages.option_1_detail') }}
    </p>
      <b>2. {{ __('messages.option_2') }}</b><br>
      <p>
        {{ __('messages.option_2_detail') }}
    </p>
  </section>

</div>

@stop
