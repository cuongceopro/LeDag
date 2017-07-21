@extends('page_default')

@section('page_content')

<div id="main">

  <section class="box">
    <h2>EVENT&NEWS</h2>
    <br />

    <h3>{{ $post->title }}
    </h3>
    <p style="text-align:right">{{ date("Y年 m月 d日",strtotime($post->created_at)) }}</p>
    <!--<p>カテゴリー：{{ $post->category->name }}</p>-->
    <!--<p>{{ $post->content }}</p>-->

    <?php
      echo $post->content;
     ?>
    <hr />

  </section>

</div>

@stop
