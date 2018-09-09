@extends('page_default')

@section('page_content')
<div id="main">

  <section>
    <h2>{{ __('messages.company_information') }}</h2>
    <br />
    <h3>{{ __('messages.company_information') }}</h3>
    <table class="ta1">
    <tr>
    <th>{{ __('messages.company_name') }}</th>
    <td>レダクォー合同会社 (Le.Daq LLC)</td>
    </tr>
    <tr>
    <th>{{ __('messages.company_address') }}</th>
    <td>{{ __('messages.company_address_value') }}</td>
    </tr>
    <tr>
    <th>{{ __('messages.contact_information') }}</th>
    <td>Tel: 03-5849-4079<br />Mail: info@ledaq.com</td>
    </tr>
    <tr>
    <th>{{ __('messages.business_hours') }}</th>
    <td>{{ __('messages.business_hours_value') }}</td>
    </tr>
    <tr>
    <th>{{ __('messages.formation') }}</th>
    <td>{{ __('messages.formation_value') }}</td>
    </tr>
    <tr>
    <th>{{ __('messages.director') }}</th>
    <td>レ　ティ　トゥ　フォン (Le Thi Thu Huong)</td>
    </tr>
    <tr>
    <th>{{ __('messages.business_activites') }}</th>
    <td>
      ・{{ __('messages.business_activites_value_1') }}<br />・{{ __('messages.business_activites_value_2') }}<br />・{{ __('messages.business_activites_value_3') }}<br />
    </td>
    </tr>
    <tr>
    <th>{{ __('messages.treated_brands') }}</th>
    <td>
      KAORU ZHOU<br>
      <p>
        <b>{{ __('messages.concept') }}</b>: {{ __('messages.concept_kaoru_zo') }} <br>
        <b>URL</b>: <a href="http://www.kaoruzhou.com/">http://www.kaoruzhou.com/</a> <br>
        <b>Instagram</b>: kaoruzhou <br>
        <b>Facebook</b>: KAORU ZHOU
      </p>
      AKIKA LE<br>
      <p>
        <b>{{ __('messages.concept') }}</b>:{{ __('messages.concept_akika_le') }}
      </p>
    </td>
    </tr>
    <tr>
      <th>
        Staff
      </th>
      <td>
        <b>AKIKA LE</b><br>
        <p>
        {{ __('messages.staff_akika_le_1') }}<br>
        {{ __('messages.staff_akika_le_2') }}
      </p>

        <b>URAKAWA KAORU</b><br>
          <p>
          {{ __('messages.staff_urakawa_kaoru_1') }}<br>
          {{ __('messages.staff_urakawa_kaoru_2') }}
          </p>
      </td>
    </tr>
    </table>
    <br />

  </section>

    <h3>{{ __('messages.access_map') }}</h3>

    <!--<div id="company_map">-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.3071492645345!2d139.78613651524037!3d35.718663935525704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188e93e2397b89%3A0xc8da966a7763b7f6!2z44CSMTEwLTAwMTMg5p2x5Lqs6YO95Y-w5p2x5Yy65YWl6LC377yS5LiB55uu77yT4oiS77yS!5e0!3m2!1sja!2sjp!4v1496484303859" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen margin="10"></iframe>
    <!--</div>-->


  <section class="box">
    <!--<div id="company_access">-->
    <p>
    【{{ __('messages.address') }}】：{{ __('messages.company_address_value') }} <br />
    【{{ __('messages.access_from_station') }}】： <br />
    　{{ __('messages.access_from_station_1') }} <br />
    　{{ __('messages.access_from_station_2') }} <br />
    　{{ __('messages.access_from_station_3') }} <br />
    　{{ __('messages.access_from_station_4') }} <br />
    </p>
    <!--</div>-->


</section>

  <!--
  <p>
    社名：レダクォー合同会社 (Le.Daq LLC) <br />
    所在地：〒110-0013 東京都台束区入谷2-3-2-504号 <br />
    連絡先： Tel: 03-5849-4079 Mail: info@ledaq.com <br />
    営業時間：10:30~19:00 (最終受付時間) <br />
    事業内容：・フルオーダーメード　・その他オリジナル商品の生産・販売 <br />
    設立：2016年6月27日 <br />
    代表者：レ　ティ　トゥ　フォン <br />

    アクセスマップ <br />
    (MAP) <br />
    【住所】：東京都台束区入谷2-3-2-504号 <br />
    【駅からのアクセス】： <br />
    　東京メトロ日比谷線入谷駅から5分 <br />
    　銀座線稲荷駅から15分 <br />
    　つくばエクスプレス浅草駅から10分 <br />
    　JR鶯谷駅から13分 <br />
  </p>
-->

</div>
<!--/main-->
@stop
