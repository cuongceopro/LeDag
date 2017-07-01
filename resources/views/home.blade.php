@extends('page_default')

@section('page_content')
<div id="main">


  <aside id="mainimg">
    <img class="slide_file" src="images/home/test3_2_Fotor.jpg" title="index.html">
    <img class="slide_file" src="images/home/test2_3_Fotor.jpg" title="index.html">
    <img class="slide_file" src="images/home/test4_2_Fotor.jpg" title="index.html">
    <input type="hidden" id="slide_loop" value="0">
    <a href="index.html" id="slide_link">
      <img id="slide_image" src="images/home/test3_2_Fotor.jpg" alt="">
      <img id="slide_image2" src="images/home/test2_3_Fotor.jpg" alt=""></a>
    </aside>

  <!--
  <aside id="mainimg">
  <img class="slide_file" src="images/1.jpg" title="index.html">
  <img class="slide_file" src="images/2.jpg" title="index.html">
  <img class="slide_file" src="images/3.jpg" title="index.html">
  <input type="hidden" id="slide_loop" value="0">
  <a href="index.html" id="slide_link">
    <img id="slide_image" src="images/1.jpg" alt="">
    <img id="slide_image2" src="images/1.jpg" alt=""></a>
  </aside>
  -->

    <?php
      session_start();
      unset($_SESSION['cart']);
     ?>

    <section id="new" class="box">
      <h2 id="newinfo_hdr" class="close">更新情報・お知らせ</h2>
      <!--<h2>更新情報・お知らせ</h2>-->
      <dl id="newinfo">
        @foreach($posts as $post)
        <a href="{!! URL::to('/detail/'.$post->id.'') !!}">
        <dt><time datetime="2014-00-00"></time>{{ date("Y/m/d",strtotime($post->created_at)) }}</dt>
        <dd>{{ $post->title }}</dd>
        </a>
        @endforeach
      </dl>
    </section>

    <section class="box">
      <h2>Staff</h2>
      <p>ここに動画を入れます。</p>
    </section>



  </div>
  <!--/main-->

  @stop
