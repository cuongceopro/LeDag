@extends('page_default')

@section('page_content')
<div id="main">

  <section>

    <h2>{{ $goodcategory_goods[0]->category->name}}</h2>
    <!--<p>販売商品のご案内。</p>-->
      @foreach($goodcategory_goods as $category_good)
        <div class="well well-small">
          <div class="row-fluid">
            <div class="span2">
              <img src=" /ledaq/images/product/{{$category_good->image_summary }} " alt="">
            </div>
            <div class="span6">
              <h5>
                @if(config('app.locale') == 'en' && $category_good->name_en) 
                  {{ $category_good->name_en }} 
                @else
                  {{ $category_good->name }}
                @endif
              </h5>

              <?php
                if(config('app.locale') == 'en' && $category_good->summary_en)
                  echo $category_good->summary_en;
                else
                echo $category_good->summary;
               ?>
               <!--
              <p>
                {{ $category_good->summary }}
              </p>
            -->
            </div>
            <div class="span4 alignR">
              <form class="form-horizontal qtyFrm" action="{!! URL::to('/cart') !!}" method="post">
                <div class="shop">¥{{ $category_good->cost }}</div>
                <!--
                <label class="checkbox">
                  <input type="checkbox">  Adds product to compair
                </label>
              -->
                <br>
                <div class="btn-group">
                  <!--<form class="form-horizontal qtyFrm" action="{!! URL::to('/cart') !!}" method="post">-->
                  <input type="hidden" name="id" value="{{ $category_good->id }}">
                  <input type="hidden" name="name" value="{{ $category_good->name }}">
                  <input type="hidden" name="price" value="{{ $category_good->cost }}">
                  <input type="hidden" name="quantity" value="1">
                  <input type="hidden" name="color" value="{{ $category_good->color }}">
                  <input type="hidden" name="code" value="{{ $category_good->code }}">
                  <input type="hidden" name="image" value="{{ $category_good->image1 }}">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                  <button type="submit" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</button>
                <!--</form>-->
                  <!--<button><a href="{!! URL::to('/good/'.$category_good->id.'') !!}" class="shopBtn">VIEW</a></button>-->
                </div>
                <a href="{!! URL::to('/good/'.$category_good->id.'') !!}" class="shopBtn">VIEW</a>

              </form>
            </div>
          </div>
          <hr class="soften">

        </div>
        @endforeach
      <!--</div>-->
    <!--</div>-->



  </section>

</div>
@stop
