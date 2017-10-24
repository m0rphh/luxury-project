<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0"/>
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap-grid.css">
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <link rel="stylesheet" href="css/jquery.multilevelpushmenu.css">
    <!-- <link rel="stylesheet" href="css/component.css">
    <link rel="stylesheet" href="css/demo.css"> -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>LUXURY4.ME | Shop</title>
  </head>
  <body>

    <?php include "inc/header.php"; ?>
    <?php include "inc/navigation.php"; ?>
    <?php include "inc/slider-shop.php"; ?>

    <div class="container featured-products">
      <h2>featured products</h2>
      <ul class="featured-products-nav">
        <li>
          <a href="">Fashion</a>
        </li>
        <li>
          <a href="">Watches & Jewellery</a>
        </li>
        <li>
          <a href="">Home & Interiors</a>
        </li>
        <li>
          <a href="">Fine dining</a>
        </li>
      </ul>

      <ul class="featured-products">
        <li>
          <a href="">
            <img src="img/shop/fotelja1.jpg" alt="">
          </a>
          <a href="" class="product-name">balmoral</a>
          <a href="" class="brand">Chesterfield</a>
          <p class="price"> <span class="old-price">600 €</span> 500 €</p>
        </li>
        <li>
          <a href="">
            <img src="img/shop/fotelja2.jpg" alt="">
          </a>
          <a href="" class="product-name">balmoral</a>
          <a href="" class="brand">Chesterfield</a>
        <p class="price">  500 €</p>
        </li>
        <li>
          <a href="">
            <img src="img/shop/fotelja3.jpg" alt="">
          </a>
          <a href="" class="product-name">balmoral</a>
          <a href="" class="brand">Chesterfield</a>
        <p class="price">  500 €</p>
        </li>
        <li>
          <a href="">
            <img src="img/shop/fotelja4.jpg" alt="">
          </av>
          <a href="" class="product-name">balmoral</a>
          <a href="" class="brand">Chesterfield</a>
        <p class="price">  500 €</p>
        </li>
      </ul>
    </div>

    <div class="container product-categories">
      <div>
        <img src="img/shop/torba.jpg" alt="">
      </div>
      <div>
        <img src="img/shop/sat.jpg" alt="">
        <div class="holder">
        <h3>watches</h3>
        <p>New Tag Heuer collection</p>
        <a href="" class="read-more">find out more</a>
        </div>
      </div>
      <div>
        <img src="img/shop/torba2.jpg" alt="">
      </div>
    </div>

    <div class="container shop__products">
      <div>
        <h2>featured products</h2>
      </div>

      <div>
        <h2>new products</h2>
      </div>

      <div>
      <h2>on-sale</h2>
      </div>

      <div>
        <h2>top products</h2>
      </div>
    </div>






    <?php include "inc/footer.php"; ?>






    <script
          src="https://code.jquery.com/jquery-2.2.4.min.js"
          integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
          crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
<script type="text/javascript">
  $('.bxslider').bxSlider({
    slideMargin: 0,
    slideWidth: 1920,
    pager: false
  });
</script>
</body>
</html>
