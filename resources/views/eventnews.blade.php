@extends('page_default')

@section('page_content')
<div id="main">

  <section class="box">
    <h2>EVENT&NEWS</h2>
    <br />
    @foreach($category_posts as $category_post)

    <h3>
        @if(config('app.locale') == 'en' && $category_post->title_en) 
          {{ $category_post->title_en }} 
        @else
          {{ $category_post->title }}
        @endif
        &emsp; ({{ date("Y/m/d",strtotime($category_post->created_at)) }})
    </h3>
    <!--<p style="text-align:right">{{ date("Y年 m月 d日",strtotime($category_post->created_at)) }}</p>-->

    <?php
      if (config('app.locale') == 'en' && $category_post->content_summary_en)
        echo $category_post->content_summary_en;
      else
        echo $category_post->content_summary;
     ?>

    <a href="{!! URL::to('detail/'.$category_post->id.'') !!}" class="defaultBtn pull-right" >{{ __('messages.read_more') }}</a>
    <br />
    <!--<a href="{{{asset('/cart_input')}}}" class="shopBtn" >Next <span class="icon-arrow-right"></span></a>-->
    <hr />
    @endforeach

  </section>

</div>
<!--/main-->
@stop
