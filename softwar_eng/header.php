<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
        <link rel="stylesheet" href="css/style.css">
        
        <script type="text/javascript">
         document.createElement('header');
         document.createElement('nav');
         document.createElement('menu');
         document.createElement('section');
         document.createElement('article');
         document.createElement('aside');
         document.createElement('footer');
        </script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        
        <script>
               $(document).ready(function(){
                   $("#menu_close").hide();
                   $(window).bind('scroll', function() {
                        scroll = $(window).scrollTop();
                        
                          if (scroll >= 70) {
                             $('nav').addClass('fixed');
                             //$('#menu_bar').addClass('fixed_menu_bar');
                             $('#right_menu').addClass('page_section_sexism_fixed');
                         }
                         else {
                             $('nav').removeClass('fixed');
                             //$('#menu_bar').removeClass('fixed_menu_bar');
                             $('#right_menu').removeClass('page_section_sexism_fixed');
                         }
                       
                       if (scroll >= 20) {
                             //$('#menu_bar').addClass('fixed_menu_bar');
                         }
                         else {
                            // $('#menu_bar').removeClass('fixed_menu_bar');
                         }
                    });
                   
                   
                    $( "#menu" ).click(function() {
                        $( "#menu_bar").slideToggle();
                        $("#menu_close").show("slow");
                        $("#menu").hide("slow");
                    });
            
                    $( "#menu_close" ).click(function() {
                        $( "#menu_bar").hide();
                        $("#menu_close").hide();
                        $("#menu").show();
                    });
            
                    $( "#main" ).click(function() {
                        $( "#menu_bar").hide();
                    });
                });
        </script>
        
    </head>
    <body>
    
        
    <div id="container">
        <header>
            <div id="logo">
                
                Equal Opportunities
               <?php
                    $domain = $_SERVER['SCRIPT_NAME'];
                    $link_array = explode('/',$domain);
                    $page = end($link_array);
                    if($page=="racism.php" ||$page=="racism_education.php" || $page== "racism_prevent.php"){
                      echo "<img src='img/racism_logo.png' alt='logo'>";  
                    }
                    if($page=="wealth_in_education1.php" ||$page=="wealth_in_education2.php" || $page== "wealth_in_education3.php"){
                      echo "<img src='img/wealth_logo.png' alt='logo2'>";  
                    }
                    if($page=="sexism_in_IT.php" ||$page=="sexism_in_IT2.php" || $page== "sexism_in_IT3.php"){
                      echo "<img src='img/sexsim_logo.png' alt='logo3'>";  
                    }
                if($page=="social_factors_affecting_IT1.php" ||$page=="social_factors_affecting_IT2.php" || $page== "social_factors_affecting_IT3.php"){
                      echo "<img src='img/society.png' alt='logo4'>";  
                    }      
                ?>
            </div>
            <!--
            <div class="search_bar">
                <form class="search_form" name="form" method="get" action="#" >
                    <input class="search_textbox" type="text" name="search" placeholder="Search"/>
                    <input type="submit" class="search_button" value="" />
                </form>
            </div>-->
    </header>
    <nav>
        <ul>
            
            <li><a href="index.php">HOME</a></li>
            <li>
                <a href="racism.php">RACISM</a>
                <ul class="racisim_nav">
                    <li><a href="racism.php">RACISM AT WORKPLACE</a></li>
                    <li><a href="racism_education.php">RACISM IN EDCATION</a></li>
                    <li><a href="racism_prevent.php">TECHNOLOGY PREVENT RACISM</a></li>
                </ul>
            </li>
            <li><a href="sexism_in_IT.php">SEXISM</a>
                <ul class="sexism_nav">
                    <li><a href="sexism_in_IT.php">GENDER INEQUALITY IN INFORMATION TECHNOLOGY</a></li>
                    <li><a href="sexism_in_IT2.php">COMPUTING AND TECHNOLOGY AFFECT PEOPLE</a></li>
                    <li><a href="sexism_in_IT3.php">FEMALE CHARACTERS ON VIDEO GAMES COVERS</a></li>
                </ul>
            
            </li>
             <li><a href="wealth_in_education1.php">WEALTH IN EDUCATION</a>
                <ul class="wealth_nav">
                    <li><a href="wealth_in_education1.php">DIFFERENCES IN ACCESS TO EDUCATION DUE TO WEATLTH ISSUES</a></li>
                    <li><a href="wealth_in_education2.php">HOW IT AFFECTS PEOPLE</a></li>
                    <li><a href="wealth_in_education3.php">HOW TECHNOLOGY CAN HELP IN RESOLVING THIS ISSUE</a></li>
                </ul>
                
            </li>
			<li><a href="social_factors_affecting_IT1.php">EFFECT OF SOCIETY</a>
                <ul class="society_nav">
                    <li><a href="social_factors_affecting_IT1.php">EFFECT OF SOCIETY</a></li>
                    <li><a href="social_factors_affecting_IT2.php">WHAT SOCIETY TELLS US</a></li>
                    <li><a href="social_factors_affecting_IT3.php">HOW SOCIETY CAN CHANGE</a></li>
                </ul>
                
            </li>
            <li><a href="contactus.php">CONTACT US</a></li>
        </ul>
        <div id="mobile_logo">
                           <?php
                    $domain = $_SERVER['SCRIPT_NAME'];
                    $link_array = explode('/',$domain);
                    $page = end($link_array);
                    if($page=="racism.php" ||$page=="racism_education.php" || $page== "racism_prevent.php"){
                      echo "<img src='img/racism_logo.png' alt='logo'>";  
                    }
                    if($page=="wealth_in_education1.php" ||$page=="wealth_in_education2.php" || $page== "wealth_in_education3.php"){
                      echo "<img src='img/wealth_logo.png' alt='logo2'>";  
                    }
                    if($page=="sexism_in_IT.php" ||$page=="sexism_in_IT2.php" || $page== "sexism_in_IT3.php"){
                      echo "<img src='img/sexsim_logo.png' alt='logo3'>";  
                    }
					if($page=="social_factors_affecting_IT1.php" ||$page=="social_factors_affecting_IT2.php" || $page== "social_factors_affecting_IT3.php"){
                      echo "<img src='img/society.png' alt='logo4'>";  
                    }    
                ?>
            Equal Opportunity
        </div>
        <div id="menu"><img alt ="menu" src="img/menu.png"></div>
        <div id="menu_close"><img alt ="menu" src="img/close.png"></div>
    </nav>
        <div id="menu_bar">
            <ul>
                <!--<li class="mobile_search_bar">
                     <div class="mobile_search">
                        <form class="search_form" name="form" method="get" action="#" >
                            <input class="search_textbox" type="text" name="search" placeholder="Search"/>
                            <input type="submit" class="search_button" value="" />
                        </form>
                    </div>
                    
                </li>-->
                <li><a href="index.php">HOME</a></li>
                <li><a href="racism.php">RACISM</a></li>
                <li><a href="sexism_in_IT.php">SEXISM</a></li>
                <li><a href="wealth_in_education2.php">WEALTH</a></li>
                <li><a href="social_factors_affecting_IT1.php">EFFECT OF SOCIETY</a>
                <li><a href="contactus.php">CONTACT US</a></li>
            </ul>
        </div>
    