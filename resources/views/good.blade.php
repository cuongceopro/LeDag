@extends('page_default')

@section('page_content')
<div id="main">

  <article>

    <!--
    <h2>{{ $good->name}}</h2>
    <p>{{ $good->detail }}</p>

    <figure class="mb15">
      <img src="{{{asset('images/sample2.jpg')}}}" alt="写真の説明を入れます">
    </figure>
  -->



  <div class="well well-small">
<div class="row-fluid">
    <div class="span5">
      <div class="carousel-inner">
      <div class="item">
      <a href="#"> <img src="{{{asset('images/a.jpg')}}}" alt="" style="width:100%"></a>
      </div>
    </div>
      <!--
    <div id="myCarousel" class="carousel slide cntr">
              <div class="carousel-inner">
                <div class="item active">
                 <a href="#"> <img src="assets/img/a.jpg" alt="" style="width:100%"></a>
                </div>
                <div class="item">
                   <a href="#"> <img src="assets/img/b.jpg" alt="" style="width:100%"></a>
                </div>
                <div class="item">
                  <a href="#"> <img src="assets/img/e.jpg" alt="" style="width:100%"></a>
                </div>
              </div>
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
          </div>
        -->
    </div>
    <div class="span7">
      <div class="h3_shop">Name of the Item [$140.00]</div>
      <hr class="soft"/>

      <form class="form-horizontal qtyFrm">
        <div class="control-group">
        <label class="control-label"><span>$140.00</span></label>
        <div class="controls">
        <input type="number" class="span6" placeholder="Qty.">
        </div>
        </div>

        <div class="control-group">
        <label class="control-label"><span>Color</span></label>
        <div class="controls">
          <select class="span11">
            <option>Red</option>
            <option>Purple</option>
            <option>Pink</option>
            <option>Red</option>
          </select>
        </div>
        </div>
        <div class="control-group">
        <label class="control-label"><span>Materials</span></label>
        <div class="controls">
          <select class="span11">
            <option>Material 1</option>
            <option>Material 2</option>
            <option>Material 3</option>
            <option>Material 4</option>
          </select>
        </div>
        </div>
        <h4>100 items in stock</h4>
        <p>Nowadays the lingerie industry is one of the most successful business spheres.
        Nowadays the lingerie industry is one of ...
        <p>
        <button type="submit" class="shopBtn"><span class=" icon-shopping-cart"></span> Add to cart</button>
      </form>
    </div>
    </div>
    <hr class="softn clr"/>

    <div class="h4_shop">Product Information</div>
    <table class="table table-striped">
<tbody>
<tr class="techSpecRow"><td class="techSpecTD1">Color:</td><td class="techSpecTD2">Black</td></tr>
<tr class="techSpecRow"><td class="techSpecTD1">Style:</td><td class="techSpecTD2">Apparel,Sports</td></tr>
<tr class="techSpecRow"><td class="techSpecTD1">Season:</td><td class="techSpecTD2">spring/summer</td></tr>
<tr class="techSpecRow"><td class="techSpecTD1">Usage:</td><td class="techSpecTD2">fitness</td></tr>
<tr class="techSpecRow"><td class="techSpecTD1">Sport:</td><td class="techSpecTD2">122855031</td></tr>
<tr class="techSpecRow"><td class="techSpecTD1">Brand:</td><td class="techSpecTD2">Shock Absorber</td></tr>
</tbody>
</table>

<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>


  </div>



</article>

</div>
<!--/main-->
@stop
