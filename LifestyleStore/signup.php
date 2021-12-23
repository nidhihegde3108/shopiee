<?php
    require 'connection.php';
    session_start();
    if(isset($_SESSION['email'])){
        header('location: products.php');
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
        <style>
        div input f1{
            height:50px;
            border:#f4acb7 solid 2px;
        }



            </style>
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <br><br>
            <div class="container" >
                <div class="row" >
                    <div class="col-xs-4 col-xs-offset-4" style="border:2px solid #f4acb7 ">
                        <h1 style="font-size: 4rem; font-weight: 80px; text-align:center;text-decoration:#f4acb7 underline;"><b>SIGN UP</b></h1>
                        <form method="post" action="user_registration_script.php">
                            <div class="form-group">
                                <input type="text" class="form-control"   style=" height:50px;
            border:#f4acb7 solid 2px;" name="name" placeholder="Name" required="true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"    style=" height:50px;
            border:#f4acb7 solid 2px;" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div> 
                            <div class="form-group">
                                <input type="password" class="form-control" style=" height:50px;
            border:#f4acb7 solid 2px;"  name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                            </div>
                            <div class="form-group"> 
                                <input type="tel" class="form-control"  style=" height:50px;
            border:#f4acb7 solid 2px;" name="contact" placeholder="Contact" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  style=" height:50px;
            border:#f4acb7 solid 2px;" name="city" placeholder="City" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  style=" height:50px;
            border:#f4acb7 solid 2px;" name="address" placeholder="Address" required="true">
                            </div>
                            <div class="form-group" style="text-align:center;" >
                                <input type="submit" style="background-color:#f4acb7; color:grey; font-size:20px; " value="Sign Up">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br>
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
