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
  <script type="text/javascript" src="js/calender.js" charset="UTF-8"></script>
</head>

<body class= "c2">

<header>
<div class="inner">
<p id="logo"><a href="index.html"><img src="images/logo.png" width="220" height="30" alt=""></a></p>
<p id="cart"><a href="#">カートをみる</a></p>
</div>
</header>

<nav id="menubar">
<ul>
<li><a href="{!! URL::to('company') !!}">ABOUT US</a></li>
<li><a href="info.html">COLLECTION</a></li>
<li><a href="shopping.html">EVENTS & NEWS</a></li>
<li><a href="{!! URL::to('shopping') !!}">SHOPPING</a></li>
<li><a href="{!! URL::to('contact') !!}">CONTACT</a></li>
</ul>
</nav>

<div id="contents">

<div id="contents-in">

<div id="main">

<section>

<h2>お問い合わせ</h2>
<table class="ta1 mb15">
<tr>
<th colspan="2" class="tamidashi">※マークは入力必須です</th>
</tr>
<tr>
<th>お名前※</th>
<td><input type="text" name="お名前" size="30" class="ws"></td>
</tr>
<tr>
<th>メールアドレス※</th>
<td><input type="text" name="メールアドレス" size="30" class="ws"></td>
</tr>
<tr>
<th>ご住所(都道府県)</th>
<td>
<select name="ご住所(都道府県)">
<option value="" selected="selected">都道府県選択</option>
<option value="北海道">北海道</option>
<option value="青森県">青森県</option>
<option value="岩手県">岩手県</option>
<option value="宮城県">宮城県</option>
<option value="秋田県">秋田県</option>
<option value="山形県">山形県</option>
<option value="福島県">福島県</option>
<option value="茨城県">茨城県</option>
<option value="栃木県">栃木県</option>
<option value="群馬県">群馬県</option>
<option value="埼玉県">埼玉県</option>
<option value="千葉県">千葉県</option>
<option value="東京都">東京都</option>
<option value="神奈川県">神奈川県</option>
<option value="新潟県">新潟県</option>
<option value="富山県">富山県</option>
<option value="石川県">石川県</option>
<option value="福井県">福井県</option>
<option value="山梨県">山梨県</option>
<option value="長野県">長野県</option>
<option value="岐阜県">岐阜県</option>
<option value="静岡県">静岡県</option>
<option value="愛知県">愛知県</option>
<option value="三重県">三重県</option>
<option value="滋賀県">滋賀県</option>
<option value="京都府">京都府</option>
<option value="大阪府">大阪府</option>
<option value="兵庫県">兵庫県</option>
<option value="奈良県">奈良県</option>
<option value="和歌山県">和歌山県</option>
<option value="鳥取県">鳥取県</option>
<option value="島根県">島根県</option>
<option value="岡山県">岡山県</option>
<option value="広島県">広島県</option>
<option value="山口県">山口県</option>
<option value="徳島県">徳島県</option>
<option value="香川県">香川県</option>
<option value="愛媛県">愛媛県</option>
<option value="高知県">高知県</option>
<option value="福岡県">福岡県</option>
<option value="佐賀県">佐賀県</option>
<option value="長崎県">長崎県</option>
<option value="熊本県">熊本県</option>
<option value="大分県">大分県</option>
<option value="宮崎県">宮崎県</option>
<option value="鹿児島県">鹿児島県</option>
<option value="沖縄県">沖縄県</option>
</select></td>
</tr>
<tr>
<th>ご住所(市区町村以下)</th>
<td><input type="text" name="ご住所(市区町村以下)" size="30" class="wl"></td>
</tr>
<tr>
<th>お問い合わせ項目※</th>
<td>
<label><input type="checkbox" name="お問い合わせ項目" value="お問い合わせ項目１">お問い合わせ項目１</label><br>
<label><input type="checkbox" name="お問い合わせ項目" value="お問い合わせ項目２">お問い合わせ項目２</label><br>
<label><input type="checkbox" name="お問い合わせ項目" value="お問い合わせ項目３">お問い合わせ項目３</label><br>
<label><input type="checkbox" name="お問い合わせ項目" value="お問い合わせ項目４">お問い合わせ項目４</label><br>
<label><input type="checkbox" name="お問い合わせ項目" value="お問い合わせ項目５">お問い合わせ項目５</label>
</td>
</tr>
<tr>
<th>お問い合わせ詳細※</th>
<td><textarea name="お問い合わせ詳細" cols="30" rows="10" class="wl"></textarea></td>
</tr>
</table>

<p class="c">
<input type="submit" value="内容を確認する">
</p>

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
