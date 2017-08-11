@extends('page_default')

@section('page_content')

<div id="mainBanner">
  <div class="inner">
    <img src="images/banners/mainImg.jpg" width="940" height="300" alt="ホームページサンプル株式会社のサイトです">
  </div>
</div>

<div id="wrapper">
  <section class="gridWrapper">
    <article class="grid">
      <div class="box">
        <h3>Vấn đề xã hội</h3>
        <p class="img"><img width="220" height="220" src="images/banners/eyecatch4.jpg" alt="" /></p>
        <!--<p class="img"><img width="220" height="220" src="images/banners_new/vandexahoi_new.jpg" alt="" /></p>-->
        <p> Chuyên mục sẽ đi vào phân tích các vấn đề của xã hội Việt Nam dưới góc nhìn của những sinh viên đang học tập
          và làm việc ở Nhật. Chúng tôi hi vọng tiếp cận các vấn đề sâu hơn đa chiều hơn, cung cấp cho người đọc một lượng
          kiến thức nhất định để có thể phản ánh các hiện tượng còn nhiều bất cập đang xảy ra trong xã hội một cách khách
          quan nhất. &#8230;</p>
          <p class="readmore"><a href="{!! URL::to('sub/1') !!}">Xem thêm</a></p>
        </div>
      </article>
      <article class="grid">
        <div class="box">
          <h3>Dịch thuật</h3>
          <p class="img"><img width="220" height="220" src="images/banners/eyecatch1.jpg" alt="" /></p>
          <!--<p class="img"><img width="220" height="220" src="images/banners_new/dichthuat_new.jpg" alt="" /></p>-->
          <p>Chuyên mục sẽ dịch những cuốn sách về tu thân và rèn luyện nhân cách. Thông qua đó chúng tôi hy vọng sẽ truyền đạt
            đến đọc giả những quan điểm, suy nghĩ hay về rèn luyện bản thân. Từ đó, góp phần chung tay xây dựng một giới trẻ Việt
            Nam vững vàng về tư tưởng. &#8230;</p>
            <p class="readmore"><a href="{!! URL::to('sub/2') !!}">Xem thêm</a></p>
            <br />
            <br />
            <br />
          </div>
        </article>
        <article class="grid">
          <div class="box">
            <h3>Project</h3>
            <p class="img"><img width="220" height="220" src="images/banners/eyecatch3.jpg" alt="" /></p>
            <!--<p class="img"><img width="220" height="220" src="images/banners_new/project_new.jpg" alt="" /></p>-->
            <p>Từ những gì hằng ngày được nghe, được thấy, được đọc, thúc đẩy những con người trẻ chúng ta suy ngẫm, và trong bản thân
              đưa ra cho mình những nhận định, những ý tưởng riêng. Tại đây các thành viên mong muốn được tổng hợp, sắp xếp lại những ý
              tưởng tạo tiền đề cho việc hình thành những dự án độc lập sau này. &#8230;</p>
              <p class="readmore"><a href="{!! URL::to('/error') !!}">Xem thêm</a></p>
            </div>
          </article>
          <article class="grid">
            <div class="box">
              <h3>Suy ngẫm</h3>
              <p class="img"><img width="220" height="220" src="images/banners/eyecatch2.jpg" alt="" /></p>
              <!--<p class="img"><img width="220" height="220" src="images/banners_new/suyngam_new.jpg" alt="" /></p>-->
              <p>Chuyên mục chia sẻ những câu chuyện và triết lý sống được nhóm đúc kết trong quá trình học tập và làm việc tại Nhật Bản.
                Từ đó, chúng tôi hi vọng mang đến một cơ hội lan tỏa hướng suy nghĩ tích cực đến giới trẻ cho một xã hội Việt năng động
                hơn.&#8230;</p>
                <p class="readmore"><a href="{!! URL::to('sub/4') !!}">Xem thêm</a></p>
              </div>
            </article>
          </section>
          <section id="post-221" class="content">
            <h3 class="heading">Concept</h3>
            <article class="post">
              <img src="images/banners/sample1.jpg" alt="" width="260" height="113" class="alignright" />
              <p>
                Với thành phần chủ yếu là những du học sinh (DHS) Việt Nam tại Nhật Bản, chúng tôi xây dựng trang VJShare nhằm chia sẻ và mang đến
                cho xã hội những gì tích luỹ được từ quá trình học tập và tiếp xúc trong cuộc sống du học.
                Mục đích chúng tôi hướng đến là:
                <br />

                ● Chia sẻ những câu chuyện và suy nghĩ của mình về các vấn đề xã hội.<br />
                ● Cung cấp những cách nhìn đa chiều để khơi dậy một môi trường giúp người đọc có thể phát triển thêm những hướng suy nghĩ cho riêng mình.<br />
              </p>

              <p>
                <strong>CHÚNG TÔI MONG MUỐN GÓP PHẦN XÂY DỰNG MỘT GIỚI TRẺ SỐNG CÓ  CHÍNH KIẾN VÀ NĂNG ĐỘNG HƠN TRONG XÃ HỘI VIỆT NAM.</strong>
              </p>
            </p>
          </article>
        </section>
      </div>

      @stop
