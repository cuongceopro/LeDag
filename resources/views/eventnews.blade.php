@extends('page_default')

@section('page_content')
<div id="main">

  <section class="box">
    <h2>EVENT&NEWS</h2>
    <br />
    @foreach($category_posts as $category_post)

    <h3>タイトル：{{ $category_post->title }}
      <small>投稿日：{{ date("Y年 m月 d日",strtotime($category_post->created_at)) }}</small>
    </h3>
    <p>{{ $category_post->content }}</p>
    <a href="{!! URL::to('detail/'.$category_post->id.'') !!}" class="defaultBtn pull-right" >続きを読む</a>
    <br />
    <!--<a href="{{{asset('/cart_input')}}}" class="shopBtn" >Next <span class="icon-arrow-right"></span></a>-->
    <hr />
    @endforeach

  </section>

</div>
<!--/main-->
@stop
