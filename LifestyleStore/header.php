<nav class="navbar navbar-inverse navabar-fixed-top " id="myHeader" style="background-color:#495057;box-shadow: 10px 10px 5px #aaaaaa;height:100px; border:3px solid grey;position:sticky;top:0;z-index:1;">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a href="index.php" class="navbar-brand"  style="color:#f4acb7 ;font-size:30px ;font-weight:normal;margin-top:10px;"><span style="color:whitesmoke ;font-size:60px ;font-weight:bold;">U</span>KART <i class="fa fa-shopping-bag"></i></a>
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                       <li><a href="about.php" style="color:#f4acb7; ;font-size:21px ;margin-top:10px;">About us</a></li>
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <li><a href="cart.php" style="color:#f4acb7;;font-size:21px ;margin-top:10px;"><span class="glyphicon glyphicon-shopping-cart" ></span > Cart</a></li>
                           <li><a href="settings.php" style="color:#f4acb7; ;font-size:21px ;margin-top:10px;"><span class="glyphicon glyphicon-cog"></span > Settings</a></li>
                           <li><a href="logout.php" style="color:#f4acb7; ;font-size:21px ;margin-top:10px;"><span class="glyphicon glyphicon-log-out"></span style="color: #f4acb7; ;font-size:30px ;margin-top:10px;"> Logout</a></li>
                           <?php
                           }else{
                            ?>
                            <li><a href="signup.php" style="color:#f4acb7; ;font-size:20px ;margin-top:10px;"><span class="glyphicon glyphicon-user"></span > Sign Up</a></li>
                           <li><a href="login.php" style="color:#f4acb7; ;font-size:20px ;margin-top:10px;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>