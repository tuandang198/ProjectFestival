<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/04.png'); height: 1000px">
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <header id="header" class="hoc clear center">
      <!-- ################################################################################################ -->
      <h1 id="logo"><i class="fas fa-truck-loading"></i> <a href="?option=home">Festival</a></h1>
      <!-- ################################################################################################ -->
    </header>
  </div>
  
  <div class="wrapper row1">
    <nav id="mainav" class="hoc clear">
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="?option=home">Home</a></li>
        <li><a class="drop" href="?festival=show">Festival</a>
          <ul>
            <?php 
              $query="select * from religion where status=1";
              $result=$connect->query($query);
            ?>
            <?php foreach($result as $item):?>
            <li><a href="?festival=show&religionID=<?=$item['id']?>"><?=$item['religion_name']?></a></li>
            
            <?php endforeach;?>
          </ul>
        </li>
        <li><a class="?option=drop" href="#">Gallerry</a>
          <ul>
            <li><a href="?option=galleryfestival">Festival</a></li>
            <li><a href="?option=gallerybook">Books</a>
            </li>
          </ul>
        </li>
        <li><a href="?option=aboutus">About Us</a></li>
        <li><a href="?option=feedback">Feedback</a></li>
        <li><a href="?order=books">Books</a></li>
        <?php if (!isset($_SESSION['customerAccount'])) : ?>
          <li><a href="?account=signin">Go to cart<i class="fas fa-shopping-cart"></i></a></li>
          <li><a href="?account=signin">Sign in</a></li>
          <li><a href="?account=signup">Sign up</a></li>
        <?php else : ?>
          <li><a href="?order=cart">Go to cart<i class="fas fa-shopping-cart"></i></a></li>
          <li><a href="?account=profile">[<?= $_SESSION['customerAccount'] ?>]</a></li>
          <li><a href="?account=signout">Sign out</a></li>
        <?php endif; ?>
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->