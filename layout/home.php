<div id="pageintro" class="hoc clear"> 
  
    
    <article>
    <h3 class="heading">About Us</h3>
      <p>Festivals.com is an website which provides information about various festivals</p>
      <footer><a style="background-color: #ffab00; color: black;" class="btn" href="?option=aboutus">More</a></footer>
    </article>
  
  </div>

</div>
<div class="wrapper row3">
  <main class="hoc container clear"> 
  
    <div class="sectiontitle">
      <h6 class="heading font-x3">Recommended Festival</h6>
    </div>
    <div class="posts">
    <?php foreach($result as $item):?>
      <figure class="group">
        <div><a class="imgover" href="?option=festivalDetail&id=<?=$item['fes_id']?>"><img src="<?=$item['title_image']?>" alt=""></a></div>
        <figcaption>
          <h6 class="heading"><?=$item['title']?></h6>
          <p><?=$item['description']?></p> <!-- Gioi thieu chung -->
          <footer><a style="background-color: #ffab00; color: black;" class="btn" href="?option=festivalDetail&id=<?=$item['fes_id']?>">More</a></footer>
        </figcaption>
      </figure>
      <?php endforeach;?>
      </div>
  
    <div class="clear">

    </div>
  </main>
</div>

<div class="wrapper row2">
  <section class="hoc container clear"> 
  
    <div class="sectiontitle">
      <h6 class="heading font-x3">Sponsor by</h6>
      
    </div>
    <ul class="nospace group center">
      <li class="one_third first">
        <article><i class="btmspace-30 fa-6x fas fa-hands-helping"></i>
          <h6 class="heading">Company A</h6>
          <p class="btmspace-30">Cooperate with us since 2008</p>
        </article>
      </li>
      <li class="one_third">
        <article><i class="btmspace-30 fa-6x fas fa-gem"></i>
          <h6 class="heading">Company B</h6>
          <p class="btmspace-30">Cooperate with us since 2015 </p>
        </article>
      </li>
      <li class="one_third">
        <article><i class="btmspace-30 fa-6x fas fa-volleyball-ball"></i>
          <h6 class="heading">Company C</h6>
          <p class="btmspace-30">Cooperate with us since 2018 </p>
        </article>
      </li>
    </ul>
  
  </section>
</div>

  
