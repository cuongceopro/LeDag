@extends('default')
@section('content')

<div class="col-xs-8 col-xs-offset-2">

<h2>タイトル：{{ $post->title }}
	<small>投稿日：{{ date("Y年 m月 d日",strtotime($post->created_at)) }}</small>
</h2>
<p>カテゴリー：{{ $post->category->name }}</p>
<p>{{ $post->content }}</p>

<hr />

</div>

@stop
