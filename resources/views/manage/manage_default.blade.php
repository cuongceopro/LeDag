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
  <link rel="stylesheet" href="{{{asset('css/style_add.css')}}}">
  <!--
  <link rel="stylesheet" href="{{{asset('css/bootstrap_add.css')}}}">
  <link rel="stylesheet" href="{{{asset('css/bootstrap_add1.css')}}}">
-->
  <link rel="stylesheet" href="{{{asset('css/bootstrap-responsive.css')}}}">
  <link rel="stylesheet" href="{{{asset('css/bootstrap-responsive.min.css')}}}">
  <!--<link rel="stylesheet" href="{{{asset('css/bootstrap.css')}}}">-->
  <link rel="stylesheet" href="{{{asset('css/bootstrap.min.css')}}}">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!-- Bootstrap styles -->
  <link href="{{{asset('assets/css/bootstrap.css')}}}" rel="stylesheet"/>
  <!-- font awesome styles -->
  <link href="{{{asset('assets/font-awesome/css/font-awesome.css')}}}" rel="stylesheet">
  <!--fullcalendar-->
  <link href="{{{asset('css/fullcalendar.css')}}}" rel='stylesheet' />
  <link href="{{{asset('css/fullcalendar.print.css')}}}" rel='stylesheet' media='print' />
  <script src="{{{asset('js/moment.min.js')}}}"></script>
  <script src="{{{asset('js/jquery.min.js')}}}"></script>
  <script src="{{{asset('js/fullcalendar.min.js')}}}"></script>
  <!--fullcalendar-->
  <script type="text/javascript" src="js/openclose.js"></script>

</head>

<body class= "c2">

  <header>
    <div class="inner">
      <p id="logo"><a href="{!! URL::to('ledaq') !!}"><img src="{{{asset('images/home/logo5.png')}}}" width="330" height="45" alt=""></a></p>
      <p id="cart"><a href="{!! URL::to('cart') !!}">カートをみる</a></p>
    </div>
  </header>


  <nav id="menubar">
    <ul>
      <li><a href="{!! URL::to('company') !!}">ABOUT US</a></li>
      <li><a href="{!! URL::to('eventnews') !!}">EVENTS & NEWS</a></li>
      <li><a href="{!! URL::to('category/2') !!}">AKIKALE</a></li>
      <li><a href="{!! URL::to('category/3') !!}">KAORU ZHOU</a></li>
      <li><a href="{!! URL::to('contact') !!}">CONTACT</a></li>
    </ul>
  </nav>

  <!--
  <div id="menubar">
    <ul >
      <li id="test1"><a id="test2" href="{!! URL::to('company') !!}">ABOUT US</a></li>
      <li id="test1"><a id="test2" href="{!! URL::to('eventnews') !!}">EVENTS & NEWS</a></li>
      <li id="test1"><a id="test2" href="{!! URL::to('category/2') !!}">AKIKALE</a></li>
      <li id="test1"><a id="test2" href="{!! URL::to('category/3') !!}">KAORU ZHOU</a></li>
      <li id="test1"><a id="test2" href="{!! URL::to('contact') !!}">CONTACT</a></li>
    </ul>
  </div>
-->

  <div id="contents">

    <div id="contents-in">

      @yield('page_content')

        <div id="sub">

          <nav class="box1">
            <h2>管理用一覧</h2>
            <ul>
              <li><a href="{!! URL::to('manage/inquiry/1') !!}">問い合わせ</a></li>
              <li><a href="{!! URL::to('category/2') !!}">AKIKALE</a></li>
              <li><a href="{!! URL::to('category/3') !!}">KAORU ZHOU</a></li>
              <li><a href="{!! URL::to('category/4') !!}">その他</a></li>
              <li><a href="{!! URL::to('order') !!}">オーダーメイド&リメーク</a></li>
              <li><a href="{!! URL::to('rental') !!}">レンタル</a></li>
            </ul>
          </nav>
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
      <!--<script src="{{{asset('assets/js/jquery.js')}}}"></script>-->
  	  <script src="{{{asset('assets/js/bootstrap.min.js')}}}"></script>
  	  <script src="{{{asset('assets/js/jquery.easing-1.3.min.js')}}}"></script>
      <script src="{{{asset('assets/js/jquery.scrollTo-1.4.3.1-min.js')}}}"></script>
      <script src="{{{asset('assets/js/shop.js')}}}"></script>

      <!--スマホ用更新情報-->
      <script type="text/javascript">
      if (OCwindowWidth() < 480) {
        open_close("newinfo_hdr", "newinfo");
      }
      </script>

    </body>
    </html>
