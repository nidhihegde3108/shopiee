<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            
  .slidershow{
    width:99vw;
    height:400px;
    overflow-x: hidden;
    
  }
  .middle{
    position: relative;
    top:12.5rem;
    left:50%;
    transform:translate(-50%,-50%);
    
  }
  .navigation{
    position: absolute;
    bottom:20px;
    left:50%;
    transform:translateX(-50%);
    display: flex;
  }
  .bar{
    width:50px;
    height:10px;
    border: 2px solid #fff;
    margin: 6px;
    cursor: pointer;
    transition: 0.4s;
  }

  .bar:hover{
    background:#f4acb7;
  }

  input[name="r"]{
    position: absolute;
    visibility: hidden;
  }

  .slides{
    width: 500%;
    height: 100%;
    display: flex;
  }
  .slide{
    width: 20%;
    transition: 0.6s;
  }
  .slide img{
    width: 100%;
    height: 100%;
  }
  #r1:checked ~ .s1{
    margin-left: 0;
  }
  #r2:checked ~ .s1{
    margin-left: -20%;
  }
  #r3:checked ~ .s1{
    margin-left: -40%;
  }
  #r4:checked ~ .s1{
    margin-left: -60%;
  }

  .footer-links {
    list-style-type: none;
    
  }
  .footer-links li {
    display: inline;
    text-align: center;
  }
  footer{
    position: relative;
    bottom: 0;
    left: 0;
    right: 0;
    background: #8d8d8d;
    height: auto;
    margin-top: 2rem;
    width: 100vw;
    padding-top: 40px;
    color: #f4acb7;
    overflow-x: hidden;
}
.footer-content{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
 
}

.footer-content h3{
  font-size: 2.1rem;
  font-weight: 500;
  text-transform: capitalize;
  line-height: 1rem;
  text-decoration: #495057 underline;
}
.footer-content p{
  max-width: 500px;
  margin: 10px auto;
  line-height: 28px;
  font-size: 14px;
  color: #f4acb7;
}
.footer-content p i{
  font-size: 24px;
}
div .flex{
  display: flex;
  justify-content:space-evenly;
  align-items: center;
  
  margin-top: 0 4rem;
  }

  div .info3{
    margin-bottom:6rem ;
    width: 19rem;
    margin-left: 4rem;
  }
  div .info2{
    margin-bottom:2rem ;
    width: 19rem;
    margin-left: 4rem;
  }

  .blocks{
    height: 96vh;
    display: flex;
    overflow: auto;
    border: 1px solid #bcb8b1;
    padding-top: 91px;
    background-color: #f4acb7;
    margin-top: -13rem;

    
  }
  
  .blocks::-webkit-scrollbar {
    display: none; /* for Chrome, Safari, and Opera */
  }
  div .scroll{
    position: relative;
      left: 29rem;
      top: 5rem;
      font-size: 4rem;
    color: #2c3e50;
    
  }
  .blocks .item{
    margin-top: 50%;
    min-width: 310px;
    height: 110px;
    line-height: 100px;
    text-align: center;
    margin: 40px;
    
  
  }
  .latest h1{
    font-size: 4rem;
    color: #495057;
    position: relative;
    text-align:center;
    font-weight: bold;
    top: -4rem;
    text-decoration: #495057 underline;
  }
   
  div .firstpart{
    border:3px double #fdf1ec;
    /* background-image: url("WallpaperDog-10816445.jpg"); */
    box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 1);
  }
  div .tag{
    margin-top:-2.5rem;
    background-color: #aaaaaa;
    height: 110px;
  }
  div .tag h3{
    padding-top: 20px;
    height: 40px;
    font-size:20px;
    font-weight:bold;
  }
  div .tag span{
    text-decoration: line-through;
    font-size:22px;
  }
        </style>
    </head>
    <body style="overflow-x:hidden">
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <!-- <div id="bannerContent">
                       <h1>We sell lifestyle.</h1>
                       <p>Flat 40% OFF on all premium brands.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div> -->
                   <div class="content">
      <div class="slidershow middle">
        <div class="slides">
          <input type="radio" name="r" id="r1" checked>
          <input type="radio" name="r" id="r2">
          <input type="radio" name="r" id="r3">
          <input type="radio" name="r" id="r4">
          <div class="slide s1">
            <img src="img/img22.webp" alt="">
          </div>
          <div class="slide">
            <img src="img/img24.webp" alt="">
          </div>
          <div class="slide">
            <img src="img/img19.jpeg" alt="">
          </div>
          <div class="slide">
            <img src="img/img23.webp" alt="">
          </div>
        </div>
        <div class="navigation">
          <label for="r1" class="bar" ></label>
          <label for="r2" class="bar" ></label>
          <label for="r3" class="bar" ></label>
          <label for="r4" class="bar" ></label>
        </div>
      </div>
     </div>
     <div class="info">
       <h1 style="text-align;color:grey;font-size:60px;font-weight:normal;
       text-decoration: #f4acb7 underline;">Explore the trends</h1>
     </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail" style="border:10px solid #f4acb7;">
                           <a href="products.php">
                                <img src="img/img1.jpeg" alt="Camera" style="height:300px;width:300px;">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Men's wears</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail" style="border:10px solid #f4acb7;">
                           <a href="products.php">
                               <img src="img/img2.jpeg" alt="Watch" style="height:300px;width:300px;">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Women's wears</p>
                                    <p>Original products from the best brands.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail" style="border:10px solid #f4acb7;">
                           <a href="products.php">
                               <img src="img/img3.jpeg" alt="Shirt" style="height:320px;width:300px;">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Kid's wears</p>
                                   <p>Our exquisite collection .</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
            <div class="latest"><h1>Latest Products</h1></div>
            <div class="blocks">
          
    <div class="item zoom">
      <div class="firstpart">
        <img src="img/img16.jpeg" height="300" width="300">
      </div>
      <div class="tag">
        <h3> MOTIFS KURTA</h3>
        <h3><span>RS 8999</span> RS 5999</h3>
        
        </div>
    </div>
    <div class="item zoom">
      <div class="firstpart">
        <img src="img/img11.jpeg" height="300" width="300">
      </div>
      <div class="tag">
        <h3>REGAL MUSTARD</h3>
        <h3><span>RS 4999</span> RS 2999</h3>
      </div>
    </div>
    <div class="item zoom">
      <div class="firstpart">
      <img src="img/img12.jpeg" height="300" width="300">
    </div>
    <div class="tag">
      <h3> PRINT PARADISE</h3>
        <h3><span>RS 3999</span> RS 2599</h3>
    </div>
  </div>
    <div class="item zoom">
      <div class="firstpart">
        <img src="img/img15.jpeg" height="300" width="300">
      </div>
      <div class="tag">
        <h3> ETHNIC CASUALS</h3>
        <h3><span>RS 3999</span> RS 1999</h3>
      </div>
    </div>
    <div class="item zoom">
      <div class="firstpart">
        <img src="img/img14.jpeg" height="300" width="300">
      </div>
      <div class="tag">
        <h3>GEORGETTE DRESS</h3>
        <h3><span>RS 3999</span> RS 1999</h3>
      </div>
    </div>
    <div class="item zoom">
      <div class="firstpart">
        <img src="img/img13.jpeg" height="300" width="300">
      </div>
      <div class="tag">
        <h3> WOVEN SAREES</h3>
        <h3><span>RS 3999</span> RS 1999</h3>
      </div>
    </div>
    <div class="item zoom">
      <div class="firstpart">
        <img src="img/img10.jpeg" height="300" width="300">
      </div>
      <div class="tag">
        <h3> FORMAL BLAZER</h3>
        <h3><span>RS 3999</span> RS 1999</h3>
      </div>
    </div>
  </div>
            <div class="foot">
    <footer>
      <div class="footer-content">
        <!--add all information -->
        <div class="flex">
        <div class="info1">
        <h3>Ukart Policy</h3>
        <p>Disclaimer: Element Limited is only an intermediary offering its platform to facilitate the transactions between Seller and Customer/Buyer/User and is not and cannot be a party to or control in any manner any transactions between the Seller and the Customer/Buyer/User. All the offers and discounts on this Website have been extended by various Builder(s)/Developer(s) who have advertised their products. Element is only communicating the offers and not selling or rendering any of those products or services. It neither warrants nor is it making any representations with respect to offer(s) made on the site. </p>
      </div>

      <div class="info2">
        <h3>Contact Us</h3>
        <p><i class="fa fa-envelope"></i> :nidhihegde3108@gmail.com<br> &emsp; &nbsp; &nbsp;krupakattu@gmail.com</p>
        <p><i class="fa fa-youtube"></i> Contact us on Youtube</p>
        <p><i class="fa fa-facebook"></i> Contact us on Facebook</p>
        <p><i class="fa fa-gift"></i> Get your rewards </p>
        <p><i class="fa fa-dollar"></i> Get the Ukart gift coins </p>
      </div>

      <div class="info3">
        <h3>Address</h3>
        <p>Ukart Internet Private Limited,

          Buildings Alyssa, Begonia &
          
          Clove Embassy Tech Village,
          
          Outer Ring Road, Devarabeesanahalli Village,
          
          Bengaluru, 560103,
          
          Karnataka, India </p>
      </div>
      </div>
    </footer>
  </div>
        </div>
    </body>
</html>