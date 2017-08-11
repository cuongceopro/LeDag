@extends('manage.manage_default')

@section('page_content')
<div id="main">

  <section class="box">

    <h2>Event作成</h2>
    <br>

    {{ Form::open(['url' => 'manage/event_store'], array('class' => 'form')) }}

    {{-- エラーメッセージの表示 --}}
    @foreach($errors->all() as $message)
      <font color="red">{{ $message }} </font><br>
    @endforeach

    <table class="ta1 mb15">
      <tr>
        <th>タイトル</th>
        <td><input type="text" name="title" size="30" class="ws"></td>
      </tr>
      <tr>
        <th>概要</th>
        <td><textarea name="content_summary" cols="30" rows="10" class="wl"></textarea></td>
      </tr>
      <tr>
        <th>本文</th>
        <td><textarea name="content" cols="30" rows="10" class="wl"></textarea></td>
      </tr>
    </table>

    <p class="c">
      <input type="submit" value="送信する">
    </p>

    {{ Form::close() }}

  </section>

</div>
<!--/main-->
@stop
