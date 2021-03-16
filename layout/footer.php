<?php if(!isset($_GET['option'])){include "models/companyInfo.php";}?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear">
    <div class="center btmspace-50"> 
      <!-- ################################################################################################ -->
      <h6 class="heading">Festival</h6>
      <ul class="faico clear">
        <li><a class="faicon-dribble" href="#"><i class="fab fa-dribbble"></i></a></li>
        <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
      </ul>
      <p class="nospace">Nói theo cách của bạn, trừ tiền theo cách của chúng tôi</p>
      <!-- ################################################################################################ -->
    </div>
    <hr class="btmspace-50">
    <div class="group"> 
      <!-- ################################################################################################ -->
      <div class="one_half first">
        <h6 class="heading">Thông tin liên lạc</h6>
        <ul class="nospace btmspace-30 linklist contact">
          <li><i class="fas fa-map-marker-alt"></i>
            <address>

            <?php 
             $result=showAddress();
            	echo $result['address'];
            ?>
            </address>
          </li>
          <li><i class="fas fa-phone"></i> <?php 
             $result=showPhonenumber();
            	echo $result['phonenumber'];
            ?></li>
          <li><i class="far fa-envelope"></i> <?php 
             $result=showEmail();
            	echo $result['email'];
            ?></li>
          <li><i class="fas fa-clock"></i> <?php 
             $result=showWorkinghour();
            	echo $result['workinghour'];
            ?></li>
        </ul>
      </div>
      
      
      <div class="one_half">
        <h6 class="heading">Tìm chúng tôi qua Google map</h6>
        
          <li><a href="https://goo.gl/maps/UCA9Z3vYxSBDNsT69"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7295883688726!2d105.84691087943449!3d21.0034739940852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac428c3336e5%3A0xb7d4993d5b02357e!2sAptech%20Computer%20Education!5e0!3m2!1sen!2s!4v1615017266616!5m2!1sen!2s" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></a></li>
          
        
      </div>
      <!-- ################################################################################################ -->
    </div>
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">AptechLearning</a></p>
    <p class="fl_right">Made by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">Aptech students</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>