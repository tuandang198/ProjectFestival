<div class="wrapper row4">
  <footer id="footer" class="hoc clear">
    <div class="center btmspace-50">

      <h6 class="heading">Festival</h6>
      <ul class="faico clear">
        <li><a class="faicon-dribble" href="#"><i class="fab fa-dribbble"></i></a></li>
        <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
      </ul>
      <p class="nospace">- Envy of other people shows how they are unhappy. Their continual attention to others behavior shows how they are boring. - Seneca</p>

    </div>
    <hr class="btmspace-50">
    <div class="group">

      <div class="one_half first">
        <h6 class="heading">Company Information</h6>
        <ul class="nospace btmspace-30 linklist contact">
          <li><i class="fas fa-map-marker-alt"></i>
            <address>

              <?php
              $result = showAddress();
              echo $result['address'];
              ?>
            </address>
          </li>
          <li><i class="fas fa-phone"></i> <?php
                                            $result = showPhonenumber();
                                            echo $result['phonenumber'];
                                            ?></li>
          <li><i class="far fa-envelope"></i> <?php
                                              $result = showEmail();
                                              echo $result['email'];
                                              ?></li>
          <li><i class="fas fa-clock"></i> <?php
                                            $result = showWorkinghour();
                                            echo $result['workinghour'];
                                            ?></li>
        </ul>
      </div>


      <div class="one_half">
        <h6 class="heading">Our Location</h6>
        <?php $map=showGooglemap()?>
        <div id="map" style="height: 300px;
      width: 100%;">
        </div>
          <script>
            function initMap(){
              var location = {lat: <?=$map['latitude']?>,lng: <?=$map['longtitude']?>};
              var map = new google.maps.Map(document.getElementById("map"),{
                zoom:4,
                center:location
              });
              var marker = new google.maps.Marker({
                position: location,
                map: map
              });

            }
          </script>
          <script async defer src="https://maps.googleapis.com/maps/api/js?key=<?=$map['googlemapsAPI']?>&callback=initMap">
          </script>

    </div>
  </footer>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear">

    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">AptechLearning</a></p>
    <p class="fl_right">Made by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">Aptech students</a></p>

  </div>
</div>