<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>LeDag Shop</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="copyright" content="Template Party">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="css/style.css">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type="text/javascript" src="js/openclose.js"></script>
</head>

<body class = "c2">

<header>
<div class="inner">
<p id="logo"><a href="index.html"><img src="images/logo.png" width="220" height="30" alt=""></a></p>
<p id="cart"><a href="#">カートをみる</a></p>
</div>
</header>

<nav id="menubar">
<ul>
<li><a href="{!! URL::to('company') !!}">ABOUT US</a></li>
<li><a href="{!! URL::to('collection') !!}">COLLECTION</a></li>
<li><a href="{!! URL::to('eventnews') !!}">EVENTS & NEWS</a></li>
<li><a href="{!! URL::to('shopping') !!}">SHOPPING</a></li>
<li><a href="{!! URL::to('contact') !!}">CONTACT</a></li>
</ul>
</nav>

<div id="contents">

<div id="contents-in">

<div id="main">

<section>

<h2>SHOPPING</h2>
<p>販売商品のご案内。</p>

    <section class="list">
    <a href="item.html">
    <h4>商品名</h4>
    <figure><img src="images/sample2.jpg" alt="商品名をここに入れます"></figure>
    <p>商品の説明をここに書きます。</p>
    </a>
    </section>

    <section class="list">
    <a href="item.html">
    <h4>商品名</h4>
    <figure><img src="images/sample2.jpg" alt="商品名をここに入れます"></figure>
    <p>商品の説明をここに書きます。</p>
    </a>
    </section>

    <section class="list">
    <a href="item.html">
    <h4>商品名</h4>
    <figure><img src="images/sample2.jpg" alt="商品名をここに入れます"></figure>
    <p>商品の説明をここに書きます。</p>
    </a>
    </section>

</section>

</div>
<!--/main-->

<div id="sub">

<nav class="box1">
<h2>カテゴリ一覧</h2>
<ul>
<li><a href="#">ハンカチ</a></li>
<li><a href="#">バグ</a></li>
<li><a href="#">男性服</a></li>
<li><a href="#">女性服</a></li>
<li><a href="#">キッズ</a></li>
<li><a href="#">雑貨</a></li>
<li><a href="#">その他</a></li>
<li><a href="#">Oder made</a></li>
</ul>
</nav>

<section class="box">
<h2>カレンダー</h2>
<div id="cal1" style="padding:10px"></div>
<div id="cal2" style="padding:10px"></div>
<p><img src="images/sample_cal.png" width="188" height="140"><br>
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
<!--/side-->

<ul id="footermenu">
<li><a href="index.html">ホーム</a></li>
<li><a href="contact.html">お問い合わせ</a></li>
</ul>

<p id="pagetop"><a href="#">↑ PAGE TOP</a></p>

</div>
<!--/contents-->

<footer>
<small>Copyright&copy; 2015 <a href="index.html">Sample Online Shop</a> All Rights Reserved.</small>
<span class="pr"><a href="http://template-party.com/" target="_blank">Web Design:Template-Party</a></span>
</footer>

<!--スマホ用メニューバー-->
<img src="images/icon_bar.png" width="20" height="16" alt="" id="menubar_hdr" class="close">
<script type="text/javascript">
if (OCwindowWidth() < 480) {
	open_close("menubar_hdr", "menubar");
}
</script>

</body>
</html>
