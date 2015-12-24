<!DOCTYPE HTML>
<html>
    <head>
        <title>Equal opportunity</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
        <link rel="stylesheet" href="css/style.css">
        
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
            </div>
            <div class="search_bar">
                <form class="search_form" name="form" method="get" action="#" >
                    <input class="search_textbox" type="text" name="search" placeholder="Search"/>
                    <input type="submit" class="search_button" value="" />
                </form>
            </div>
    </header>
    <nav>
        <ul>
            
            <li><a href="index.php">HOME</a></li>
            <li>
                <a href="racism.php">RACISIM</a>
                <ul class="racisim_nav">
                    <li><a href="#">SUB RACISM</a></li>
                    <li><a href="#">SUB RACISM</a></li>
                    <li><a href="#">SUB RACISM</a></li>
                </ul>
            </li>
            <li><a href="#">SEXISM</a>
                <ul class="sexism_nav">
                    <li><a href="#">SUB SEXISM</a></li>
                    <li><a href="#">SUB SEXISM</a></li>
                    <li><a href="#">SUB SEXISM</a></li>
                </ul>
            
            </li>
            <li><a href="#">WEALTH</a>
                <ul class="wealth_nav">
                    <li><a href="#">SUB WEALTH</a></li>
                    <li><a href="#">SUB WEALTH</a></li>
                    <li><a href="#">SUB WEALTH</a></li>
                </ul>
                
            </li>
            <li><a href="contactus.php">CONTACT US</a></li>
        </ul>
        <div id="mobile_logo">Equal Opportunity</div>
        <div id="menu"><img alt ="menu" src="img/menu.png"></div>
        <div id="menu_close"><img alt ="menu" src="img/close.png"></div>
    </nav>
        <div id="menu_bar">
            <ul>
                <li class="mobile_search_bar">
                     <div class="mobile_search">
                        <form class="search_form" name="form" method="get" action="#" >
                            <input class="search_textbox" type="text" name="search" placeholder="Search"/>
                            <input type="submit" class="search_button" value="" />
                        </form>
                    </div>
                    </a>
                </li>
                <li><a href="index.php">HOME</a></li>
                <li><a href="racism.php">RACISIM</a></li>
                <li><a href="#">SEXISM</a></li>
                <li><a href="#">WEALTH</a></li>
                <li><a href="#">CONTACT US</a></li>
            </ul>
        </div>