<?php
    require 'connection.php';
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>ukart Store</title>
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
            <br><br><br>
           <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <div class="panel" style="border:2px solid #f4acb7 ">
                            <div class="panel-heading" style="background-color:white;">
                                <h3 style="font-size: 5rem; color:grey;font-weight:bold; text-align:center;text-decoration:#f4acb7 underline;">LOGIN</h3>
                            </div>
                            <div class="panel-body" style="font-size: 2rem;">
                                <p>Login to make a purchase.</p>
                                <form method="post" action="login_submit.php">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  style=" height:50px;
            border:#f4acb7 solid 2px;" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" style=" height:50px;
            border:#f4acb7 solid 2px;"  name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}">
                                    </div>
                                    <div class="form-group" style="text-align:center;">
                                        <input type="submit" value="Login" style="background-color:#f4acb7; color:grey; font-size:20px; ">
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer">Don't have an account yet? <a href="signup.php" style="color:#f4acb7 ">Register</a></div>
                        </div>
                    </div>
                </div>
           </div>
           <br><br><br><br><br>
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
