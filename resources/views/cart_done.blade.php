@extends('page_default')

@section('page_content')
<div id="main">

  <section class="box">

    <h2>注文</h2>
    <p>
      お注文いただき、ありがとうございます。<br>
      後ほど担当者より、ご連絡をさせていただきます。
    </p>

    <div align="center">
    <a href="{!! URL::to('/') !!}" class="defaultBtn">ホームに戻る</a>
    </div>
    </section>

    </div>
    <!--/main-->
    @stop
