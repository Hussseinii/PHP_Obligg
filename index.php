<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
  <!-- This button is used to collapse the menu in case its in mobile form-->
               <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="mainNavBar">
                     <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>VM PÅ SKI</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Logo-->
            <div class="navbar-header">
                <a href="#" class="navbar-brand">GRUPPE OBLIG</a>
            </div>
            
            <!-- Menu Items-->
            <div class="collapse navbar-collapse " id="mainNavBar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">VM SKI</a></li>
                    <li><a href="#">Groupblig</a></li>
                    
                           <!--Drop Down List -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">SYI PROGRAMME<span class="caret"></span></a>
                        <!-- This will contain the list of the names that will be in the dropdown list-->
                        <ul class="dropdown-menu">
                            <li><a href="#">Turrenn</a></li>
                            <li><a href="#">Langrenn</a></li>
                            <li><a href="#">Maratonløp</a></li>
                            <li><a href="#">Triathlon</a></li>
                        </ul>
                    </li>
                </ul>
               
            </div>
            <div class="collalpse navbar-collapse" id="mainNavBarRight">
                <ul class="nav navbar-nav navbar-right" >
                    <li><a href="Register.php">Register</a></li>
                    <li><a href="loginSide.php">Login</a></li>
                    
                </ul>
                
            </div>
        </div>
     </nav>
       
        <?php
        // put your code here
        ?>
        <script src="jquery/jquery-3.2.0.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
