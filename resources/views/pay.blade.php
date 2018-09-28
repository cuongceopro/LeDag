@extends('page_default')

@section('page_content')

<div id="main">

  <section class="box">
    <h2>{{ __('messages.payment_method') }}</h2>
    <h3>1. {{ __('messages.payment_info') }}</h3>
    <p style="margin-left:50px;">
        {{ __('messages.bank') }}：	三井住友銀行(Mitsui Sumitomo Bank) <br>
        {{ __('messages.branch') }}: 	浅草　（ＡＳＡＫＵＳＡ）<br>
        {{ __('messages.bank_type') }}：	普通 <br>
        {{ __('messages.bank_account') }}：	7244100 <br>
        {{ __('messages.account_owner') }}：	レダクオ　（ド <br>
        <br />
        {{ __('messages.bank') }}：	ゆうちょう銀行 <br>
        {{ __('messages.branch') }}：	〇一八（ゼロイチハチ）<br>
        {{ __('messages.branch_code') }}：	018<br>
        {{ __('messages.bank_account') }}：	7417881<br>
        {{ __('messages.account_owner') }}：	レ．ダクオ　（ド <br>
    </p>
    <h3>2. {{ __('messages.delivery') }}</h3>
    <h5>　2.1. {{ __('messages.shipping_fee') }}</h5>
    <p>
      {{ __('messages.shipping_fee_detail') }}
    </p>
      <table class="ta1">
      <tr>
        <td>{{ __('messages.shipping_fee') }}</td>
        <td>※{{ __('messages.price_notice') }}</td>
      </tr>
      <tr>
        <td>{{ __('messages.shipping_fee_table_1') }}</td>
        <td>{{ __('messages.free') }}</td>
      </tr>
      <tr>
        <td>{{ __('messages.shipping_fee_table_2') }}</td>
        <td>480円</td>
      </tr>
      <tr>
        <td>{{ __('messages.shipping_fee_table_3') }}</td>
        <td>500円</td>
      </tr>
      <tr>
        <td>{{ __('messages.shipping_fee_table_4') }}</td>
        <td>980円</td>
      </tr>
      <tr>
        <td>{{ __('messages.shipping_fee_table_5') }}</td>
        <td>324円</td>
      </tr>
      </table>
      <br />
     <h5><b>　2.2. {{ __('messages.delivery_assign') }}</b></h5>
     <p>
      {{ __('messages.delivery_assign_detail_1') }}
     <br>
	・ {{ __('messages.delivery_assign_detail_2') }}<br>
	・ {{ __('messages.delivery_assign_detail_3') }}<br>
	　　{{ __('messages.delivery_assign_detail_4') }}<br>
	　　{{ __('messages.delivery_assign_detail_5') }}<br>
	・ {{ __('messages.delivery_assign_detail_6') }}<br>
	　　{{ __('messages.delivery_assign_detail_7') }}<br>
  </p>
	<h5>　2.3. {{ __('messages.how_to_use') }}</h3>
    <p>
	　（1）{{ __('messages.how_to_use_1') }}<br>
	　（2）{{ __('messages.how_to_use_2') }}<br>
		　※{{ __('messages.how_to_use_3') }}<br>
	　（3）{{ __('messages.how_to_use_4') }}<br>
    </p>
	<h5>　2.4. {{ __('messages.notes') }}</h5>
	<p>
	- {{ __('messages.notes_1') }}<br>
	{{ __('messages.notes_1_1') }}<br>
	- {{ __('messages.notes_2') }}<br>
	{{ __('messages.notes_2_1') }}<br>
	- {{ __('messages.notes_3') }}<br>
	{{ __('messages.notes_3_1') }}<br>
	</p>
  </section>

</div>

@stop
