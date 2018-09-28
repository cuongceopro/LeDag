@extends('page_default')

@section('page_content')
<div id="main">

  <article>

    <!--
    <h2>{{ $good->name}}</h2>
    <p>{{ $good->detail }}</p>
    <figure class="mb15">
      <img src="{{{asset('images/sample2.jpg')}}}" alt="写真の説明を入れます">
    </figure>
  -->



  <div class="well well-small">
<div class="row-fluid">
  <div class="span5">
  <div id="myCarousel" class="carousel slide cntr">
            <div class="carousel-inner">
              <div class="item active">
               <a href="#"> <img src="/ledaq/images/product/{{$good->image1 }}" alt="" style="width:100%"></a>
              </div>
              @if ($good->image2 !== null)
              <div class="item">
                 <a href="#"> <img src="/ledaq/images/product/{{$good->image2 }}" alt="" style="width:100%"></a>
              </div>
              @endif
              @if ($good->image3 !== null)
              <div class="item">
                <a href="#"> <img src="/ledaq/images/product/{{$good->image3 }}" alt="" style="width:100%"></a>
              </div>
              @endif
              @if ($good->image4 !== null)
              <div class="item">
                <a href="#"> <img src="/ledaq/images/product/{{$good->image4 }}" alt="" style="width:100%"></a>
              </div>
              @endif
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
        </div>
  </div>
    <div class="span7">
      <div class="h3_shop">
        @if(config('app.locale') == 'en' && $good->name_en) 
          {{ $good->name_en }} 
        @else
          {{ $good->name }}
        @endif
      </div>

      <hr class="soft"/>

      <!--<form class="form-horizontal qtyFrm" action="{!! URL::to('/cart/'.$good->id.'') !!}" method="get">-->
        <form class="form-horizontal qtyFrm" action="{!! URL::to('/cart') !!}" method="post">
        <div class="control-group">
        <label class="control-label"><span>¥{{ $good->cost}}</span></label>
        <div class="controls">
        <input type="number" name="quantity" class="span6" placeholder={{ __('messages.good_quantity') }}>
        </div>
        </div>

        <div class="control-group">
        <label class="control-label"><span>{{ __('messages.good_color') }}</span></label>
        <div class="controls">
          <select name="color" class="span11">
            <option selected="selected">
              @if(config('app.locale') == 'en' && $good->color_en) 
                {{ $good->color_en }} 
              @else
                {{ $good->color }}
              @endif
            </option>

          </select>
        </div>
        </div>
        <!--
        <div class="control-group">
        <label class="control-label"><span>材料</span></label>
        <div class="controls">
          <select class="span11">
            <option>Material 1</option>
            <option>Material 2</option>
            <option>Material 3</option>
            <option>Material 4</option>
          </select>
        </div>
        </div>
        -->
        <!--<h4>100 items in stock</h4>-->
        <br />
        <?php
        echo '<p>';
        if (config('app.locale') == 'en' && $good->summary_en)
          echo $good->summary_en;
        else
          echo $good->summary;
        echo '</p>';
         ?>
        <br />
        <!--
        <p>
          {{ $good->summary }}
        <p>
        -->
          <input type="hidden" name="id" value="{{ $good->id }}">
          <input type="hidden" name="name" value="{{ $good->name }}">
          <input type="hidden" name="price" value="{{ $good->cost }}">
          <input type="hidden" name="code" value="{{ $good->code }}">
          <input type="hidden" name="image" value="{{ $good->image1 }}">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <button type="submit" class="shopBtn"><span class=" icon-shopping-cart"></span> Add to cart</button>
      </form>
    </div>
    </div>
    <hr class="softn clr"/>

    <div class="h4_shop">{{ __('messages.good_detail_information') }}</div>
    <table class="table table-striped">
<tbody>
<!--<tr class="techSpecRow"><td class="techSpecTD1">Color:</td><td class="techSpecTD2">Black</td></tr>-->
<tr class="techSpecRow"><td class="techSpecTD1">{{ __('messages.good_code') }}:</td><td class="techSpecTD2">{{ $good->code }}</td></tr>
<tr class="techSpecRow"><td class="techSpecTD1">{{ __('messages.good_color') }}:</td><td class="techSpecTD2">
  @if(config('app.locale') == 'en' && $good->color_en) 
    {{ $good->color_en }} 
  @else
    {{ $good->color }}
  @endif
</td></tr>

<tr class="techSpecRow"><td class="techSpecTD1">Size:</td><td class="techSpecTD2">{{ $good->size }}</td></tr>
</tbody>
</table>

@if ( $good->detail !== null)
<p>
  @if(config('app.locale') == 'en' && $good->detail_vn) 
    {{ $good->detail_vn }} 
  @else
    {{ $good->detail }}
  @endif
</p>
@endif

  </div>



</article>

</div>
<!--/main-->
@stop
