<?php

include("includes/db.php");
include("functions/functions.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>Pro4eti.me</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="styles/style.css" type="text/css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    
</head>
<body>
  
  <div id="top"><!-- Top Begin -->
     <div class="container"> <!-- Container begin -->
        <!-- div#top>div.container>div.col-md-3 -->
        <div class="col-md-6 offer"> <!-- col-md-6 begin -->
            
            <a href="#" class="btn btn-success btn-sm">Добре дошли!</a>
            <a href="checkout.php">4 Items in Your Cart | Total Price: 300$</a>
        </div> <!-- col-md-6 finish -->
        
        <div class="col-md-6">
            
            <ul class="menu">
                
                <li>
                    <a href="customer_register.php">Регистрация</a>
                </li>
                <li>
                    <a href="checkout.php">Моят акаунт</a>
                </li>
                <li>
                    <a href="cart.php">Към количката</a>
                </li>
                <li>
                    <a href="checkout.php">Вход</a>
                </li>
            </ul>
        </div>
         
     </div> <!-- Container finish -->
      
  </div> <!-- Top Finish -->
  
  <div id="navbar" class="navbar navbar-default"> <!-- Navbar Start -->
     <div class="container"> <!-- Container Start -->
        <div class="navbar-header"> <!-- Navbar-Header Start -->
            <a href="index.php" class="navbar-brand home"> <!-- Navbar-BrandHome  Start -->
                <img src="images/logo2.png" alt="pro4eti.me-logo" class="hidden-xs">
                <img src="images/logo2.png" alt="pro4eti.me-logo-mobile" class="visible-xs">
            </a> <!-- Navbar-BrandHome Finish -->
            <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle Navigation</span>
                <i class="fa fa-align-justify"></i>
            </button>
            
             <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                <span class="sr-only">Toggle Search</span>
                <i class="fa fa-search"></i>
            </button>
        </div> <!-- Navbar-Header Finish -->
        
        <div class="navbar-collapse collapse" id="navigation"> <!-- navbar-collapse collapse begin -->
            
            <div class="padding-nav"> <!-- padding-nav begin -->
                
                <ul class="nav navbar-nav left"> <!-- nav navbar-nav left begin -->
                    
                    <li class="<?php if($active=='Начало') echo "active"; ?>">
                        <a href="index.php">Начало</a>
                    </li>
                    <li class="<?php if($active=='Магазин') echo "active"; ?>">
                        <a href="shop.php">Магазин</a>
                    </li>
                    <li class="<?php if($active=='Моят акаунт') echo "active"; ?>">
                        <a href="checkout.php">Моят акаунт</a>
                    </li>
                    <li class="<?php if($active=='Моята количка') echo "active"; ?>">
                        <a href="cart.php">Моята количка</a>
                    </li>
                    <li class="<?php if($active=='Контакти') echo "active"; ?>">
                        <a href="contact.php">Контакти</a>
                    </li>
                </ul> <!-- nav navbar-nav left finish -->
            </div><!-- padding-nav finish -->
            <a href="cart.php" class="btn navbar-btn btn-primary right"> <!-- btn navbar-btn btn-primary begin -->
                
                <i class="fa fa-shopping-cart"></i>
                <span>4 Items In Your Cart</span>
    
            </a> <!-- btn navbar-btn btn-primary finish -->
            
            <div class="navbar-collapse collapse right"> <!-- navbar-collapse collapse right begin -->
               <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                   <span class="sr-only">Toggle Search</span>
                <i class="fa fa-search"></i>
               </button> 
            </div> <!-- navbar-collapse collapse right finish -->
            <div class="collapse clearfix" id="search"> <!-- collapse clearfix begin -->
               
               <form method="get" action="results.php" class="navbar-form">
                   <div class="input-group">
                       <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                       <span class="input-group-btn"> <!-- input-group-btn begin -->
                       <button type="submit" name="search" class="btn btn-primary">
                           <i class="fa fa-search"></i>
                       </button>
                       </span> <!-- input-group-btn finish -->
                   </div>
               </form>
                
            </div> <!-- collapse clearfix finish -->
        </div> <!-- navbar-collapse collapse Finish -->
         
     </div> <!-- Container Finish -->
      
  </div> <!-- Navbar Finish -->