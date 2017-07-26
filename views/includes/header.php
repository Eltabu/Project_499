<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="Vehicle Rental Solutions" />
        <meta name="keywords" content="Car rental Systtem" />
        <meta name="author" content="Moad Eltabu, Cooper">
        
        <!-- BOOTSTRAP CORE CSS STYLE  -->
        <link href="/moad/project/assets/css/bootstrap.css" rel="stylesheet" />
        <link href="/moad/project/assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="/moad/project/assets/css/main.css" rel="stylesheet" />
        
        <!-- Custome CSS Theme  -->
        <link href="/moad/project/assets/css/theme1.css" rel="stylesheet" />
        


		
        <!-- Page Title   -->
        <!--<title>Vehicle Rental Solutions </title> --> 
        <title>VRS | <?php echo $data['viewName']; ?> </title>  
        <style>
            /*
            ul.top-nav-list > li > a:hover {
            color: #c52d2f !important;
            }
        */
        </style>

    </head>
    <body> 


    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +1 (519) 992-0294</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                        <div class="top-nav" >
                            <ul class="top-nav-list">
                                <li><a href="/moad/project/dashboard">
                                <?php
                                if (isset($_SESSION['username']))
                                {
                                    echo 'Welcome, ' . $_SESSION['username'];
                                }
                                ?>
                                 </a></li>
                                <?php 
                                if (isset($_SESSION['username']))
                                {
                                    echo '<li><a href="/moad/project/login/logout">Logout</a></li>';
                                }
                                else
                                {
                                    echo '<li><a href="/moad/project/login">Login</a></li>';  
                                }
                                ?> 
                                                              
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/moad/project/home"><img src="/moad/project/assets/img/logo.png" alt="logo"><h6>Vehicle Rental Solutions</h6></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/moad/project/home">Home</a></li>
                        <li><a href="/moad/project/aboutUs">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-item.html">Blog Single</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="shortcodes.html">Shortcodes</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a></li> 
                        <li><a href="contact-us.html">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header>
    <!--End Header-->


    
