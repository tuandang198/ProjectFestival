<div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    
    <article>
    <h3 class="heading">Về chúng tôi</h3>
      <p>Festivals.com is an website which provides information about various festivals</p>
      <footer><a class="btn" href="?option=aboutus">Đọc thêm</a></footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading font-x3">Các Lễ Hội tiêu biểu</h6>
      <p>Được cập nhật thường xuyên bởi chúng tôi</p>
    </div>
    <div class="posts">
    <?php foreach($result as $item):?>
      <figure class="group">
        <div><a class="imgover" href="?festival=festivalDetail&id=<?=$item['fes_id']?>"><img src="<?=$item['title_image']?>" alt=""></a></div>
        <figcaption>
          <h6 class="heading"><?=$item['title']?></h6>
          <p><?=$item['description']?></p> <!-- Gioi thieu chung -->
          <footer><a class="btn" href="?festival=festivalDetail&id=<?=$item['fes_id']?>">Đọc tiếp</a></footer>
        </figcaption>
      </figure>
      <?php endforeach;?>
      </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear">

    </div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/02.png'); ">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading font-x3">Hợp tác với chúng tôi</h6>
      <p>Thông tin</p>
    </div>
    <ul class="nospace group center">
      <li class="one_third first">
        <article><i class="btmspace-30 fa-6x fas fa-hands-helping"></i>
          <h6 class="heading">Công ty TNHH A</h6>
          <p class="btmspace-30">Đã đồng hành với chúng tôi trong 2 năm qua</p>
          <footer><a class="btn inverse" href="#">Đọc thêm</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><i class="btmspace-30 fa-6x fas fa-gem"></i>
          <h6 class="heading">Công ty TNHH B</h6>
          <p class="btmspace-30">Đã đồng hành cùng chúng tôi trong </p>
          <footer><a class="btn inverse" href="#">Đọc thêm</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><i class="btmspace-30 fa-6x fas fa-volleyball-ball"></i>
          <h6 class="heading">Bộ du lịch nhà nước</h6>
          <p class="btmspace-30">Cung cấp các thông tin liên quan</p>
          <footer><a class="btn inverse" href="#">Đọc Thêm</a></footer>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading font-x3">Nhà điều hành của chúng tôi</h6>
      <p>Ảnh chỉ mang tính chất minh họa</p>
    </div>
    <ul class="nospace group team">
      <li class="one_quarter first">
        <figure><a class="imgover" href="#"><img src="images/demo/300x300.png" alt=""></a>
          <figcaption><strong class="heading">A. Doe</strong> <em>Job Type Here</em></figcaption>
        </figure>
      </li>
      <li class="one_quarter">
        <figure><a class="imgover" href="#"><img src="images/demo/300x300.png" alt=""></a>
          <figcaption><strong class="heading">B. Doe</strong> <em>Job Type Here</em></figcaption>
        </figure>
      </li>
      <li class="one_quarter">
        <figure><a class="imgover" href="#"><img src="images/demo/300x300.png" alt=""></a>
          <figcaption><strong class="heading">C. Doe</strong> <em>Job Type Here</em></figcaption>
        </figure>
      </li>
      <li class="one_quarter">
        <figure><a class="imgover" href="#"><img src="images/demo/300x300.png" alt=""></a>
          <figcaption><strong class="heading">D. Doe</strong> <em>Job Type Here</em></figcaption>
        </figure>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

    <!-- ################################################################################################ -->
    <div class="bgded overlay" style="background-image:url('images/demo/backgrounds/04.png')">
<div class="wrapper bgded" style="background-image:url('../images/demo/backgrounds/03.png');">
  <section id="callback" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div>
      <h6 class="heading">Đăng kí để nhận thông tin</h6>
      <p class="btmspace-30">Chúng tôi cam đoan không sử dụng thông tin của bạn cho vấn đề khác</p>
      <form method="post" action="#">
        <fieldset>
          <input type="text" value="" placeholder="Name">
          <input type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Gửi</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </section>
</div>