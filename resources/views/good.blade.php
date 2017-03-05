@extends('page_default')

@section('page_content')
<div id="main">

  <article>

    <h2>{{ $good->name}}</h2>
    <p>{{ $good->detail }}</p>

    <figure class="mb15">
      <img src="{{{asset('images/sample2.jpg')}}}" alt="写真の説明を入れます">
    </figure>

    <table class="ta1 mb15">
      <tr>
        <th colspan="2" class="tamidashi">見出しが必要であればここを使います</th>
      </tr>
      <tr>
        <th>サンプル見出し</th>
        <td>サンプルテキスト。</td>
      </tr>
      <tr>
        <th>サンプル見出し</th>
        <td>サンプルテキスト。</td>
      </tr>
      <tr>
        <th>サンプル見出し</th>
        <td>サンプルテキスト。</td>
      </tr>
      <tr>
        <th>サンプル見出し</th>
        <td>サンプルテキスト。</td>
      </tr>
      <tr>
        <th>サンプル見出し</th>
        <td>サンプルテキスト。</td>
      </tr>
    </table>

    <p class="c">
      <a href="#"><input type="submit" value="カートにいれる"></a><br>
      ※カート機能は<a href="http://template-party.com/file/cms_shop.html">ショップCMS</a>に備わったシステムです。
    </p>

  </article>

  <p><a href="javascript:history.back()">&lt;&lt; 前のページに戻る</a></p>

</div>
<!--/main-->
@stop
