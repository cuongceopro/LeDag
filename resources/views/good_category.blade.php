@extends('page_default')

@section('page_content')
<div id="main">

  <section>

    <h2>{{ $goodcategory_goods[0]->category->name}}</h2>
    <p>販売商品のご案内。</p>

    @foreach($goodcategory_goods as $category_good)
      <div class="well well-small">
        <div class="row-fluid">

          <div class="span2">
            <img src="{{{asset('images/a.jpg')}}}" alt="">
          </div>

          <div class="span6">
            <h5 class="shop">{{ $category_good->name }}</h5>
            <p>
              {{ $category_good->detail }}
            </p>
          </div>
          <div class="span4 alignR">
            <form class="form-horizontal qtyFrm">
              <div class="shop">¥{{ $category_good->cost }}</div>
              <div class="btn-group">
                <form class="form-horizontal qtyFrm" action="{!! URL::to('/cart') !!}" method="post">
                <input type="hidden" name="id" value="{{ $category_good->id }}">
                <input type="hidden" name="name" value="{{ $category_good->name }}">
                <input type="hidden" name="price" value="{{ $category_good->cost }}">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <button type="submit" class="shopBtn"><span class=" icon-shopping-cart"></span> Add to cart</button>
              </form>
                <!--<a href="product_details.html" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>-->
                <a href="{!! URL::to('/good/'.$category_good->id.'') !!}" class="shopBtn">VIEW</a>
              </div>
            </form>
          </div>
        </div>
      </div>
      @endforeach


      <!--
    @foreach($goodcategory_goods as $category_good)
    <section class="list">
      <a href="{!! URL::to('/good/'.$category_good->id.'') !!}">
        <h4>商品名：{{ $category_good->name }}</h4>
        <figure><img src="{{{asset('images/sample2.jpg')}}}" alt="商品名をここに入れます"></figure>
        <p>{{ $category_good->detail }}</p>
      </a>
    </section>
    @endforeach
  -->



  </section>

</div>
<!--/main-->
@stop
