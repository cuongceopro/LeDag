@extends('page_default')

@section('page_content')
<div id="main">

  <section class="box">

    <h2>{{ __('messages.shopping_guide') }}</h2>
    <br />
    <p>
      STEP 1: {{ __('messages.select_the_items') }}
    </p>

    <p>
      STEP 2: {{ __('messages.check_the_cart') }}
    </p>

    <p>
      STEP 3: {{ __('messages.input_custom_info') }}
    </p>

    <p>
      STEP 4: {{ __('messages.payment') }}
      {{ __('messages.payment_1') }}<br>
      {{ __('messages.payment_2') }}
    </p>
  </section>
</div>
@stop
