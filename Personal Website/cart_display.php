<?php
  session_start();
  include_once('functions/functions.php');
  include_once('functions/cat_sort.php');
  include_once('functions/cart.php');
  include_once('functions/update_quantity.php');
 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Shopping Store</title>
    <link rel="shortcut icon" href="images\Website_Logo_black.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
    <link rel="stylesheet" href="styles\Style.css">
    <!-- <script type="text/javascript">
      function update_quantity(val){
        if(window.XMLHttpRequest){
          xmlhttp = new XMLHttpRequest();
        }else{
          xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
        }
        xmlhttp.onreadystatechange = function(){
          if(xmlhttp.readyState == 4 && xmlhttp.status == 200){

          }
        }
      }
    </script> -->
</head>

<body>
  <header class="header-position">
      <img class="logo">
      <nav class="head_nav">
          <ul>
              <li class=""><span></span><a href="index.php" class="home_t"><i class="fa fa-home" aria-hidden="true"></i>  Home</a></li>
              <?php get_list(); ?>
              <li class =""><span></span><a href="aboutus.php" class="about_t"><i class="fa fa-question-circle-o" aria-hidden="true"></i>  About</a></li>
              <li class=""><span></span><a href="products.php" class="products_t"><i class="fa fa-product-hunt" aria-hidden="true"></i>   Products</a></li>
              <li class=""><span></span><a href="http://adityashinde989.000webhostapp.com" class="contact_t"><i class="fa fa-address-card-o" aria-hidden="true"></i>   Contact</a></li>
              <li class=""><span></span><a href="stores.php" class="store_t"><i class="fa fa-street-view" aria-hidden="true"></i>   Store</a></li>
              <?php logout(); ?>
          </ul>
      </nav>
      <a class="head_nav_2" href="#">+email</a>
      <div class="mobile-nav">
          <button type="button" id="menu">
        <span class="glyphicon glyphicon-align-justify"></span>
    </button>
      </div>
  </header>
  <div class="mobile-nav-isopen">
      <ul>
        <li class="active home_t"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>  Home</a></li>
        <?php get_list(); ?>
        <li class="about_t"><a href="aboutus.php"><i class="fa fa-question-circle-o" aria-hidden="true"></i>  About</a></li>
        <li class="products_t"><a href="products.php"><i class="fa fa-product-hunt" aria-hidden="true"></i>   Products</a></li>
        <li class="contact_t"><a href="http://adityashinde989.000webhostapp.com/Personal-Website/index.php"><i class="fa fa-address-card-o" aria-hidden="true"></i>  Contact</a></li>
        <li class="store_t"><a href="stores.php"><i class="fa fa-street-view" aria-hidden="true"></i>  Store</a></li>
        <?php logout(); ?>
      </ul>
  </div>
    <div class="container-fluid " width ="800px">
      <h1 class="title">Your Cart</h1>
      <hr width = 50%><br><br><br><br>
      <div class="table-responsive attr">
        <table class="table product-table table-hover">
          <thead>
            <tr>
              <th></th>
              <th style="text-align:center"><h3>Product</h3></th>
              <th><h3>Price</h3></th>
              <th><h3>Quantity<a href="#" style="text-decoration: none; color:black;" data-toggle="tooltip" title="quantity must me between 1-10">
                <i class="fa fa-question-circle" aria-hidden="true"></i></a></h3></th>
              <th style="text-align:center"><h3>Amount</h3></th>
            </tr>
          </thead>
          <tbody>
            <?php get_cart_items(); ?>
          </tbody>
        </table>
      </div>

  </div>
    <footer class="foot container-fluid">
        <div class="text-center center-block">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-md-3">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Partners</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Designer Studio</a></li>
                            <li><a href="#">Sponsors</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Marketing Team</a></li>
                            <li><a href="#">Presentations</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Product Help</a></li>
                            <li><a href="#">Our Designers</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="/">© 2017 AR Design Studios Pvt Ltd</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>
            </div>
            <br />
            <a href="#"><i class="fa fa-facebook-square fa-3x social" id="social-fb"></i></a>
            <a href="#"><i class="fa fa-twitter-square fa-3x social" id=social-tw></i></a>
            <a href="#"><i class="fa fa-google-plus-square fa-3x social" id="social-gp"></i></a>
            <a href="#"><i class="fa fa-envelope-square fa-3x social" id="social-em"></i></a>
        </div>
    </footer>
    <script src="https://use.fontawesome.com/80dcb2c1fd.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="script\script.js"></script>
</body>

</html>
