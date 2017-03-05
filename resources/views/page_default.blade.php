<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>LeDag Shop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="copyright" content="Template Party">
  <meta name="description" content="ここにサイト説明を入れます">
  <meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
  <link rel="stylesheet" href="{{{asset('css/style.css')}}}">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <script type="text/javascript" src="js/openclose.js"></script>
  <script type="text/javascript" src="js/calender.js" charset="UTF-8"></script>
</head>

<body class= "c2">

  <header>
    <div class="inner">
      <p id="logo"><a href="{!! URL::to('ledaq') !!}"><img src="{{{asset('images/logo.png')}}}" width="220" height="30" alt=""></a></p>
      <p id="cart"><a href="#">カートをみる</a></p>
    </div>
  </header>

  <nav id="menubar">
    <ul>
      <li><a href="{!! URL::to('company') !!}">ABOUT US</a></li>
      <!--<li><a href="{!! URL::to('collection') !!}">COLLECTION</a></li>-->
      <li><a href="{!! URL::to('eventnews') !!}">EVENTS & NEWS</a></li>
      <li><a href="{!! URL::to('category/2') !!}">AKIKALE</a></li>
      <li><a href="{!! URL::to('category/3') !!}">KAORU ZHOU</a></li>
      <!--<li><a href="{!! URL::to('shopping') !!}">SHOPPING</a></li>-->
      <li><a href="{!! URL::to('contact') !!}">CONTACT</a></li>
    </ul>
  </nav>

  <div id="contents">

    <div id="contents-in">

      @yield('page_content')

        <div id="sub">

          <nav class="box1">
            <h2>カテゴリ一覧</h2>
            <ul>
              <li><a href="{!! URL::to('category/1') !!}">手刺繍ギフト</a></li>
              <li><a href="{!! URL::to('category/2') !!}">AKIKALE</a></li>
              <li><a href="{!! URL::to('category/3') !!}">KAORU ZHOU</a></li>
              <li><a href="{!! URL::to('category/4') !!}">その他</a></li>
              <li><a href="{!! URL::to('category/5') !!}">オーダーメイド&リメーク</a></li>
              <li><a href="{!! URL::to('category/6') !!}">レンタル</a></li>
            </ul>
          </nav>

          <section class="box">
            <h2>カレンダー</h2>
            <div id="cal1" style="padding:10px"></div>
            <div id="cal2" style="padding:10px"></div>
            <p><img src="{{{asset('images/sample_cal.png')}}}" width="188" height="140"><br>
            </section>

            <aside>
              <h2>オンライン限定セール</h2>
              <ul class="submenu">
                <li><a href="#">ショッピングガイド</a></li>
                <li><a href="#">〇〇</a></li>
                <li><a href="#">お支払い方法</a></li>
                <li><a href="#">制作工程</a></li>
              </ul>
            </aside>

          </div>
          <!--/sub-->

        </div>
        <!--/contents in-->


        <ul id="footermenu">
          <li><a href="index.html">ホーム</a></li>
          <li><a href="contact.html">お問い合わせ</a></li>
        </ul>

        <p id="pagetop"><a href="#">↑ PAGE TOP</a></p>

      </div>
      <!--/contents-->

      <footer>
        <small>Copyright&copy; 2017 <a href="index.html">LeDag Shop</a> All Rights Reserved.</small>
        <span class="pr"><a href="http://template-party.com/" target="_blank">Web Design:Template-Party</a></span>
      </footer>

      <!--スライドショースクリプト-->
      <script type="text/javascript" src="js/slide_simple_pack.js"></script>

      <!--スマホ用更新情報-->
      <script type="text/javascript">
      if (OCwindowWidth() < 480) {
        open_close("newinfo_hdr", "newinfo");
      }
      </script>

    </body>
    </html>
