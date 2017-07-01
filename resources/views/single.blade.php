@extends('page_default')

@section('page_content')

<div id="main">

  <section class="box">
    <h2>EVENT&NEWS</h2>
    <br />

    <h3>タイトル：{{ $post->title }}
      <small>投稿日：{{ date("Y年 m月 d日",strtotime($post->created_at)) }}</small>
    </h3>
    <!--<p>カテゴリー：{{ $post->category->name }}</p>-->
    <p>{{ $post->content }}</p>
    <p>{{ $post->content }}</p>
    <p>{{ $post->content }}</p>
    <p>{{ $post->content }}</p>
    <p>{{ $post->content }}</p>
    <p>{{ $post->content }}</p>
    <p>{{ $post->content }}</p>
    <p>{{ $post->content }}</p>
    
    <hr />

  </section>

</div>

@stop
