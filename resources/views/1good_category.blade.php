@extends('page_default')

@section('page_content')
<div id="main">

  <section>

    <h2>{{ $goodcategory_goods[0]->category->name}}</h2>
    <p>販売商品のご案内。</p>

    @foreach($goodcategory_goods as $category_good)
    <section class="list">
      <a href="{!! URL::to('/good/'.$category_good->id.'') !!}">
        <h4>商品名：{{ $category_good->name }}</h4>
        <figure><img src="{{{asset('images/sample2.jpg')}}}" alt="商品名をここに入れます"></figure>
        <p>{{ $category_good->detail }}</p>
      </a>
    </section>
    @endforeach

  </section>

</div>
<!--/main-->
@stop
