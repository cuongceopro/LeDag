@extends('page_default')

@section('page_content')

<div id="main">

  <section class="box">
    <h2>お支払い方法</h2>
    <h3>1. 支払情報 (Payment method)</h3>
    <p style="margin-left:50px;">
        銀行名(Bank)：  三井住友銀行(Mitsui Sumitomo Bank) <br>
        支店名(Branch):  浅草　（ＡＳＡＫＵＳＡ）<br>
        科目(Type)： 普通 <br>
        口座番号(Bank account)： 7244100 <br>
        口座名(Account owner)： レダクオ　（ド <br>
        <br />
        銀行名(Bank)：  ゆうちょう銀行 <br>
        店名(Branch Name)：  〇一八（ゼロイチハチ）<br>
        店番(Branch Code)：  018<br>
        口座番号(Bank account)： 7417881<br>
        口座名(Account owner)： レ．ダクオ　（ド <br>
    </p>
    <h3>2. 配送について(Regarding delivery)</h3>
    <h5>　2.1. 送料(Shipping fee)</h5>
    <p>
    1回のご注文でお買い上げ合計額が,800円以上の場合には、送料無料でお届けいたしております。お買い上げ合計額が10,800円未満の場合は、1回のご注文につき送料480円を申し受けます。（お届け先が沖縄の場合を除く。）なお、代引き払いにてご注文の場合は、代引き手数料324円を別途申し受けます。<br>
    If the total purchase amount of one order is 10,800JPY or more, we will ship with no fee. But if that amount is less than  10,800JPY, you will be charged 480JPY for shipping per order. (Excluding shipping to address in Okinawa). In addition, if ordering by cash on delivery, cash on delivery commission of 324JPY will be charged seperately.
    </p>
      <table class="ta1">
      <tr>
        <td>配送料<br>(Regarding delivery)</td>
        <td>※金額はすべて税込み<br>(※All price tax including)</td>
      </tr>
      <tr>
        <td>1回のご注文合計金額が10,800円以上の場合（沖縄を除く）<br>If the total order amount of one order is 10,800JPY or more (excluding Okinawa)</td>
        <td>無料<br>Free</td>
      </tr>
      <tr>
        <td>1回のご注文合計金額が10,800円未満の場合（沖縄を除く）<br>If the total order amount of one order is less than 10,800JPY (excluding Okinawa)</td>
        <td>480円</td>
      </tr>
      <tr>
        <td>お届け先が沖縄県内で1回のご注文合計金額が10,800円以上の場合<br>If the address is in Okinaga and the total order amount is 10,800JPY or more</td>
        <td>500円</td>
      </tr>
      <tr>
        <td>お届け先が沖縄県内で1回のご注文合計金額が10,800円未満の場合<br>If the address is in Okinaga and the total order amount is less than 10,800JPY</td>
        <td>980円</td>
      </tr>
      <tr>
        <td>代引き手数料<br>COD fee</td>
        <td>324円</td>
      </tr>
      </table>
      <br />
     <h5><b>　2.2. 配送日・配送時間・配送先の指定(Designation of delivery date, delivery time, delivery destination)</b></h5>
     <p>
     ご注文の際はご希望の、配送指定日・配送時間帯・配送先をご指定いただけます。<br>
  「指定なし」をお選びいただきますと、最短でお届けさせていただきます。<br>
  ・ 配送日の指定：1週間の範囲でご指定いただけます。ご指定日の詳細につきましてはご注文時にご確認下さい。<br>
  　　時期によりましては、配送日指定をうけたまわれない場合や、配送日を指定できる期間が変更となる場合がございます。<br>
  ・ 配送時間<br>
  　　以下の5通りの配送時間帯をご指定いただけます。<br>
  　　午前 /12:00～14:00 /14:00～16:00/16:00～18:00/18時以降(18:00～21:00)<br>
  ・ 配送先<br>
  　　ご登録ご住所以外にもお届けしております。ご希望の場合は「お届け先追加」にご希望の住所をご入力ください。<br>
  <br />
  When ordering, you can specify the delivery date, delivery time zone, and delivery destination you want.<br>
  If you choose "No designation", we will deliver it in the shortest possible time.<br>
  -Specify delivery date: You can specify within the range of the week. For details on the specified date please comfirm at the time of ordering.<br>
  　Depending on the timing, there are cases where the delivery date designation can not be accepted or the delivery date can be changed.<br>
  -Delivery time<br>
  　You can specify the following five delivery time zones.<br>
  　AM12:00～14:00 /14:00～16:00/16:00～18:00 or later (18:00～21:00)<br>
  - Shipping address<br>
  　We have delivered not only to your registered address. If you wish, please enter the desired address on "Addressee".<br>
  </p>
  <h5>　2.3. ご利用方法(How to use)</h3>
    <p>
  　（1）商品をショッピングカートに入れます。<br>
  　（2）ご注文内容をご確認の上、注文ボタンをクリック<br>
    　※Le.Daqオンラインショップでは、原則として、ご注文完了後の内容変更・キャンセルを承っておりません。<br>
  　（3）ご登録のメールアドレス宛てに、ご注文確認メールが自動配信されます。<br>
    <br />
    (1) Put the item in the shopping cart.<br>
    (2)After checking the contests of your order, click the order button.<br>
    　※As a rule, Le.Daq online shop does not accept content changing/ cancellation after order completion.<br>
    (3) Order comfirmation mail will be automatically delivered to the registered e-mail address.
    </p>
  <h5>　2.4. 注意事項(Notes)</h5>
  <p>
  - ご注文内容の変更について<br>
  ご注文完了後の内容変更・キャンセルを承っておりません。ご注意ください。<br>
  - 返品・交換について<br>
  お買い上げいただいた商品の返品については、商品お受け取り後14日以内に、<br>
  交換はいたしかねますので、あらかじめご了承ください。<br>
  - お品切れについて<br>
  万が一、ご注文完了後にお品切れが発生した場合、お品切れ商品を除いて発送させて頂きます。ご不便をおかけしますがあらかじめご了承下さい。<br>
  <br />
  -About changes of order contents.<br>
  　We do not accept content changing/ cancellation after order completion. Please be careful.<br>
  -About returned goods and exchange<br>
  　With regard to the return of the item you purchased, within 14 days after receipt of the item.<br>
  　Please understand beforehand that we can not exchange it.<br>
  -About out of stock<br>
  　In the unlikely event that out-of-stock occurs after order completion, we will ship out the out-of-stock items. We apologize for any inconveniences that this may cause.
  </p>
  </section>

</div>

@stop
