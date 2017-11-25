<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="Vehicle Rental Solutions" />
        <meta name="keywords" content="Car rental Systtem" />
        <meta name="author" content="Moad Eltabu, Cooper Fecteau">
        
        <!-- BOOTSTRAP CORE CSS STYLE  -->
        <link href="<?php echo URL ?>app/assets/css/bootstrap.css" rel="stylesheet" />
        <link href="<?php echo URL ?>app/assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo URL ?>app/assets/css/icomoon-social.css" rel="stylesheet">
        <link href="<?php echo URL ?>app/assets/css/main.css" rel="stylesheet" />
        <link href="<?php echo URL ?>app/assets/datetime/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
        <link href="<?php echo URL ?>app/assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" />
        
        

		
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

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="<?php echo URL ?>Home"><img src="<?php echo URL ?>assets/img/logo.png" alt="logo"></a>-->
                        <h1 class="main-logo">  <?php echo WEBSITE_NAME; ?> </h1>
                                      </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">

                        <li><a href="<?php echo URL ?>Home">Home</a></li>                        
                        <li><a href="<?php echo URL ?>AboutUs">About Us</a></li> 
                        <li><a href="<?php echo URL ?>ContactUs">Contact Us</a></li>

                               <?php
                                
                        if ( isset($_SESSION['user_id']))
                                {
                                    if($_SESSION['type'] == 1)
                                    {
                                        echo '<li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account
                                        <span class="caret"></span>
                                        </a>
                                        <ul style="margin-top:-20px" class="dropdown-menu">
                                            <li><a href="'.URL.'Admin">Dashboard</a></li>
                                            <li><a href="'.URL.'Login/logout">Logout</a></li>
                                        </ul>
                                     </li>';
                                    }
                                    else
                                    {
                                         echo '<li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account
                                        <span class="caret"></span>
                                        </a>
                                        <ul style="margin-top:-20px" class="dropdown-menu">
                                            <li><a href="'.URL.'Dashboard">Dashboard</a></li>
                                            <li><a href="'.URL.'Login/logout">Logout</a></li>
                                        </ul>
                                     </li>';
                                    }
                                    
                                }
                                else
                                {
                                    echo '<li><a href="'.URL.'Login">Login</a></li>'; 
                                    echo '<li><a href="'.URL.'SignUp">Sign Up</a></li>';   
                                }
                                ?> 

                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		

                        <!-- CORE JQUERY  -->
        <script src="<?php echo URL ?>app/assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS  -->
        <script src="<?php echo URL ?>app/assets/js/bootstrap.js"></script>
        <script src="<?php echo URL ?>app/assets/js/main.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>app/assets/datetime/js/bootstrap-datetimepicker.min.js"></script>
         <script src="<?php echo URL ?>app/assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    </header>
    <!--End Header-->


    
