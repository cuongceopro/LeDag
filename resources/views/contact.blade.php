@extends('page_default')

@section('page_content')
<div id="main">

  <section class="box">

    {{ Form::open(['url' => 'inquiry_store'], array('class' => 'form')) }}

    <h2>お問い合わせ</h2>
    <p>
      お問い合わせは、お電話(03-5849-4079)にてお問い合わせいただくか、下記の入力画面に必要事項を
      ご記入いただき、入力画面の最後にある「送信する」ボタンよりお問い合わせください。
    </p>

    {{-- エラーメッセージの表示 --}}
    @foreach($errors->all() as $message)
      <font color="red">{{ $message }} </font><br>
    @endforeach

    <table class="ta1 mb15">
      <tr>
        <th colspan="2" class="tamidashi">※マークは入力必須です</th>
      </tr>
      <tr>
        <th>お名前※</th>
        <td><input type="text" name="name_roma" size="30" class="ws"></td>
      </tr>
      <tr>
        <th>フリガナ</th>
        <td><input type="text" name="name_kana" size="30" class="ws"></td>
      </tr>
      <tr>
        <th>ご住所(都道府県)</th>
        <td>
          <select name="address_1">
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
          <td><input type="text" name="address_2" size="30" class="wl"></td>
        </tr>
        <tr>
          <th>電話番号(携帯電話)※</th>
          <td><input type="text" name="tel" size="30" class="ws"></td>
        </tr>
        <tr>
          <th>メールアドレス※</th>
          <td><input type="text" name="email" size="30" class="ws"></td>
        </tr>
        <tr>
          <th>ご用件</th>
          <td>
            <select name="requirement">
              <option value="お問い合わせ">お問い合わせ</option>
              <option value="オーダーのご予約">オーダーのご予約</option>
              <option value="フィッチング(お直し)のご予約">フィッチング(お直し)のご予約</option>
            </select>
          </td>
        </tr>
        <tr>
          <th>オーダー/フィッテング第一希望</th>
          <td><input type="text" name="daiichikibou" size="30" class="ws"></td>
        </tr>
        <tr>
          <th>オーダー/フィッテング参加希望人数(合計)</th>
          <td>
            <select name="numbers_people">
              <option value="" selected="selected">人数</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6~10">6~10</option>
              <option value="10以上">10以上</option>
            </select></td>
          </tr>
          <tr>
            <th>今までLeDaqにお越しいただいたことがありますか。</th>
            <td>
              <select name="have_gone">
                <option selected="selected" value="なし">なし</option>
                <option value="ある">ある</option>
              </select>
            </td>
          </tr>
          <tr>
            <th>お問い合わせ詳細</th>
            <td><textarea name="detail" cols="30" rows="10" class="wl"></textarea></td>
          </tr>
        </table>
        <p>
          お客様の個人情報の漏洩を防ぐため、このページの情報は暗号化され、SSLモードで送信されます。
          必要事項が入力できたら、「送信する」ボタンを押してください。
          お問い合わせ、ありがとうございます。
        </p>
        <p class="c">
          <input type="submit" value="送信する">
        </p>

        {{ Form::close() }}

        <h3>プライバシーポリシー</h3>
        <p>
          LeDaq（以下「当社」）は、個人情報捕集に関する法令等を厳守し、お客様、お取引先及び
          全ての従業者の個人情報を適正に取り扱い、管理します。
        </p>
        <h4>1.個人情報の定義について</h4>
        <p>
          個人情報とは、個人に関する情報であり、氏名、生年月日、性別、電話番号、電子メールアドレス、職業、勤務先等、特定の個人識別し得る情報をいいます。
        </p>
        <h4>2.個人情報の管理について</h4>
        <p>
          個人情報に対する不正なアクセスや、個人情報の消失・破壊・改ざん・漏えいなどに対する合理的かつ適切な安全対策を施致します。
        </p>
        <h4>3.個人情報の第三者提供について</h4>
        <p>
          当社は、法令に基づく場合等正当な理由によらない限り、事前に本人の同意を得ることなく、個人情報を第三者に開示・提供することはありません。
        </p>
        <h4>4.法令の厳守について</h4>
        <p>
          当社は、個人情報の保護に関する法令その他の規範を遵守致します。
        </P>
      </section>

    </div>
    <!--/main-->
    @stop
