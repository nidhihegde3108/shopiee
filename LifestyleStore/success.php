<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_GET['id'];
        $confirm_query="update users_items set status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
        
    }
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
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br>
            <div class="container" style="text-align:center;">
                <div class="row" >
                    <div class="col-xs-6" style="text-align:center;">
                        <div class="panel panel-primary">
                            <div class="panel-heading" style="background-color:#f4acb7; color:grey"></div>
                            <div class="panel-body">
                                <p style="font-weight:bold;font-size:20px;">Your order is confirmed. Thank you for shopping with us.<a href="products.php"> Click here</a> to get a new product</p>
                                 <p>Get a receipt for your product here<form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_IayR0OhGEnbvCp" async> </script> </p></form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <footer class="footer" style="background-color:#f4acb7;">
               <div class="container">
               <center>
                   <p>Copyright &copy UKART All Rights Reserved.</p>
                  
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
