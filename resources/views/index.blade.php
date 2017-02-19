@extends('default')
@section('content')

<div class="col-xs-8 col-xs-offset-2">

@foreach($posts as $post)

	<h2>タイトル：{{ $post->title }}
		<small>投稿日：{{ date("Y年 m月 d日",strtotime($post->created_at)) }}</small>
	</h2>
  <!-- <p>カテゴリー：{{ $post->category->name }}</p> -->
  <a href="{!! URL::to('category/'.$post->category->id.'') !!}">{{ $post->category->name }}</a>
	<p>{{ $post->content }}</p>
  <a href="{!! URL::to('detail/'.$post->id.'') !!}">続きを読む</a>
	<hr />
@endforeach

</div>

@stop
