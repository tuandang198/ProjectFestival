
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/04.png'); height: 1000px">
  <div class="wrapper row0">
    <header id="header" class="hoc clear center">
      <h1 id="logo"><i class="fas fa-truck-loading"></i> <a href="?option=home">Festival</a></h1>
    </header>
  </div>

  <div class="wrapper row1">
    <nav id="mainav" class="hoc clear">
      <ul class="clear">
        <li class="active"><a href="?option=home">Home</a></li>
        <li><a class="drop" href="?option=showFes">Festival</a>
          <ul>
            <?php
            $query = "select * from religion where status=1";
            $result = $connect->query($query);
            ?>
            <?php foreach ($result as $item) : ?>
              <li><a href="?option=showFes&religionID=<?= $item['id'] ?>"><?= $item['religion_name'] ?></a></li>

            <?php endforeach; ?>
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
        <li><a href="?option=books">Books</a></li>
        <?php if (!isset($_SESSION['customerAccount'])) : ?>
          <li><a href="?option=signin">Sign in</a></li>
          <li><a href="?option=signup">Sign up</a></li>
          <li><a class="drop" type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom">
            <i class="fas fa-shopping-cart"></i>
          </a>
          <ul>
            <li><a  href="?option=signin"><?php include "views/books/bookOrder.php"?></a></li>
          </ul>
          </li>
        <?php else : ?>
          <li><a href="?option=profile">[<?= $_SESSION['customerAccount'] ?>]</a></li>
          <li><a href="?option=signout">Sign out</a></li>
          <li id="cart_details"><a class="drop" type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom">
            <i class="fas fa-shopping-cart"></i>
          </a>
          <ul>
          <div id="cart-drawer">
           <li><a href="?option=cart"><?php include "views/books/bookOrder.php"?></a></li>
            <li><a href="?option=cart">Go to cart<i class="fas fa-shopping-cart"></i></a></li>
          </div>
           
          </ul>
          </li>
        <?php endif; ?>
      </ul>
    </nav>
  </div>