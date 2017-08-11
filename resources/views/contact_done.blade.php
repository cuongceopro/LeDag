@extends('page_default')

@section('page_content')
<div id="main">

  <section class="box">

    <h2>お問い合わせ</h2>
    <p>
      お問い合わせいただき、ありがとうございます。<br>
      後ほど担当者より、ご連絡をさせていただきます。
    </p>

    <div align="center">
    <a href="{!! URL::to('/ledaq') !!}" class="defaultBtn">ホームに戻る</a>
    </div>
    </section>

    </div>
    <!--/main-->
    @stop
