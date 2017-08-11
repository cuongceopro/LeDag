@extends('manage.manage_default')

@section('page_content')
<div id="main">

  <section class="box">

    <h2>お問い合わせ</h2>
    <br>
    <div align="right">
    <a href="{!! URL::to('/manage/inquiry_todo/'.$inquiry->id.'') !!}" class="defaultBtn">未確認にする</a>
    <a href="{!! URL::to('/manage/inquiry_done/'.$inquiry->id.'') !!}" class="defaultBtn">確認済みにする</a>
    </div>
    <br>

    <section>

      <table class="ta1 mb15">
        <tr>
          <th>お名前※</th>
          <td>{{ $inquiry->name_roma}}</td>
        </tr>
        <tr>
          <th>フリガナ</th>
          <td>{{ $inquiry->name_kana}}</td>
        </tr>
        <tr>
          <th>ご住所(都道府県)</th>
          <td>{{ $inquiry->address_1}}</td>
          </tr>
          <tr>
            <th>ご住所(市区町村以下)</th>
            <td>{{ $inquiry->address_2}}</td>
          </tr>
          <tr>
            <th>電話番号(携帯電話)※</th>
            <td>{{ $inquiry->tel }}</td>
          </tr>
          <tr>
            <th>メールアドレス※</th>
            <td>{{ $inquiry->email}}</td>
          </tr>
          <tr>
            <th>ご用件</th>
            <td>{{ $inquiry->requirement}}</td>
          </tr>
          <tr>
            <th>オーダー/フィッテング第一希望</th>
            <td>{{ $inquiry->daiichikibou }}</td>
          </tr>
          <tr>
            <th>オーダー/フィッテング参加希望人数(合計)</th>
            <td>{{ $inquiry->numbers_people }} </td>
          </tr>
            <tr>
              <th>今までLeDaqにお越しいただいたことがありますか。</th>
              <td>{{ $inquiry->have_gone }}</td>
            </tr>
            <tr>
              <th>お問い合わせ詳細</th>
              <td>{{ $inquiry->detail }}</td>
            </tr>
          </table>

        </section>

    </div>
    <!--/main-->
    @stop
