@extends('page_default')

@section('page_content')
<div id="main">

  <section class="box">
    <h2>EVENT&NEWS</h2>
    <br />
    @foreach($category_posts as $category_post)

    <h3>{{ $category_post->title }} &emsp; (投稿日:{{ date("Y年 m月 d日",strtotime($category_post->created_at)) }})
    </h3>
    <!--<p style="text-align:right">{{ date("Y年 m月 d日",strtotime($category_post->created_at)) }}</p>-->

    <?php
      echo $category_post->content_summary;
     ?>

    <a href="{!! URL::to('detail/'.$category_post->id.'') !!}" class="defaultBtn pull-right" >続きを読む</a>
    <br />
    <!--<a href="{{{asset('/cart_input')}}}" class="shopBtn" >Next <span class="icon-arrow-right"></span></a>-->
    <hr />
    @endforeach

  </section>

</div>
<!--/main-->
@stop
