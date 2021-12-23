<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <style>

.top-container {
    background-color: #f4acb7;
    opacity: 0.5;
    padding: 60px;
    text-align: center;
    
  }

  .top-container h1{
      font-size:5rem;
      font-weight:bold;
  }
            </style>
    </head>
    <body>
    <?php
            require 'header.php';
           ?>
            <!-- <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to our LifeStyle Store!</h1>
                    <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
                </div>
            </div> -->
            <div>
        <div class="top-container">
      <h1>Sale day makes you happy</h1>
      <p>
        Pay less, buy more<br />

        Up to 50% off
      </p>
    </div>
            <div class="container">

            <div class="text" style="color:grey;text-decoration:#f4acb7 underline;text-align:center;margin:40px;">
                <h1>MEN'S section</h1>
            </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6" style="border:3px solid grey;">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/im1.jpg" alt="Cannon">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3 style="font-weight:bold;">English Navy</h3>
                                    <p>Price: Rs. 7000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-block" style="background-color:#f4acb7; color:grey;border-radius:20px; font-size:20px; ">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block " style="background-color:#f4acb7; color:grey; ">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" style="border:3px solid grey;">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/im2.jpg" alt="Sony DSLR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3 style="font-weight:bold;">Raymond</h3>
                                    <p>Price: Rs. 7000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block" style="background-color:#f4acb7; color:grey; border-radius:20px; font-size:20px;">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary" style="background-color:#f4acb7; color:grey; ">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" style="border:3px solid grey;">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/im4.webp" alt="Sony DSLR" style="height:310px;">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3 style="font-weight:bold;">Invictus</h3>
                                    <p>Price: Rs. 7000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn  btn-block" style="background-color:#f4acb7; color:grey; border-radius:20px; font-size:20px;">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary" style="background-color:#f4acb7; color:grey; ">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" style="border:3px solid grey;" style="border:3px solid grey;">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/im3.jpg" alt="Olympus" style="height:310px;">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3 style="font-weight:bold;">Dennison</h3>
                                    <p>Price: Rs. 7000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block" style="background-color:#f4acb7; color:grey; border-radius:20px; font-size:20px;">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary" style="background-color:#f4acb7; color:grey; ">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="text" style="color:grey;text-decoration:#f4acb7 underline;text-align:center;margin:40px;">
                <h1>WOMEN'S section</h1>
            </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6" style="border:3px solid grey;">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/im4.jpg" alt="Titan 301">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3 style="font-weight:bold;">Anouk</h3>
                                    <p>Price: Rs. 5000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block" style="background-color:#f4acb7; color:grey; border-radius:20px; font-size:20px;">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary" style="background-color:#f4acb7; color:grey; ">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" style="border:3px solid grey;">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/im5.webp" alt="Titan 201">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3 style="font-weight:bold;">Libas</h3>
                                    <p>Price: Rs. 5000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block" style="background-color:#f4acb7; color:grey;border-radius:20px; font-size:20px; ">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary" style="background-color:#f4acb7; color:grey; ">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" style="border:3px solid grey;">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/im6.webp" alt="htm milan">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3 style="font-weight:bold;">Gerua</h3>
                                    <p>Price: Rs. 5000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block" style="background-color:#f4acb7; color:grey;border-radius:20px; font-size:20px; ">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary" style="background-color:#f4acb7; color:grey; ">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" style="border:3px solid grey;">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/im7.webp" alt="Favre Leuba">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3 style="font-weight:bold;">Vishudh</h3>
                                    <p>Price: Rs. 5000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block" style="background-color:#f4acb7; color:grey;border-radius:20px; font-size:20px; ">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary" style="background-color:#f4acb7; color:grey; ">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="text" style="color:grey;text-decoration:#f4acb7 underline;text-align:center;margin:40px;">
                <h1>KID'S section</h1>
            </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6" style="border:3px solid grey;">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/img8.webp" alt="Raymond shirt">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3 style="font-weight:bold;">Style stone</h3>
                                    <p>Price: Rs. 2500.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block" style="background-color:#f4acb7; color:grey;border-radius:20px; font-size:20px; ">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary" style="background-color:#f4acb7; color:grey; ">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" style="border:3px solid grey;">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/img11.webp" alt="Charles shirt">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3 style="font-weight:bold;">Stylo bug</h3>
                                    <p>Price: Rs. 2500.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block" style="background-color:#f4acb7; color:grey;border-radius:20px; font-size:20px; ">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary" style="background-color:#f4acb7; color:grey; ">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" style="border:3px solid grey;">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/img10.webp" alt="HXR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3 style="font-weight:bold;">Sangria</h3>
                                    <p>Price: Rs. 2500.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block" style="background-color:#f4acb7; color:grey;border-radius:20px; font-size:20px; ">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary" style="background-color:#f4acb7; color:grey; ">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" style="border:3px solid grey;">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/img12.jpg" alt="PINK">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3 style="font-weight:bold;">Mini Klub</h3>
                                    <p>Price: Rs. 2500.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block" style="background-color:#f4acb7; color:grey; border-radius:20px; font-size:20px;">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary" style="background-color:#f4acb7; color:grey; ">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
            
            <footer class="footer" style="background-color:#f4acb7;">
               <div class="container">
               <center>
                   <p>Copyright &copy UKART All Rights Reserved.</p>
                  
               </center>
               </div>
           </footer>
        </div>

        <script type="text/javascript" src="index.js"></script>
          
    </body>
</html>
