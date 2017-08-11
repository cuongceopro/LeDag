@extends('manage.manage_default')

@section('page_content')
<div id="main">

  <section class="box">

    <h2>お問い合わせ</h2>
    <br>
    <div align="right">
    <a href="{!! URL::to('/manage/inquiry/1') !!}" class="defaultBtn">未確認</a>
    <a href="{!! URL::to('/manage/inquiry/2') !!}" class="defaultBtn">確認済み</a>
    </div>
    <br>

    <section>

      <table class="ta1">
      <tr>
      <th>お名前</th>
      <th>電話番号</th>
      <th>メールアドレス</th>
      <th>要件</th>
      <th>詳細</th>
      </tr>

      @foreach($inquiries as $inquiry)

      <tr>
      <td>{{ $inquiry->name_roma }}</td>
      <td>{{ $inquiry->tel }}</td>
      <td>{{ $inquiry->email }}</td>
      <td>{{ $inquiry->requirement }}</td>
      <td><a href="{!! URL::to('/manage/inquiry_detail/'.$inquiry->id.'') !!}" class="defaultBtn">詳細</a></td>
      </tr>

      @endforeach

    </table>
    <br />

    </section>

        </section>

    </div>
    <!--/main-->
    @stop
