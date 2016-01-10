<!DOCTYPE HTML>
<html>
    <head>
        <title>Social Factors Affecting IT</title>
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
                
                Social Factors Affecting IT
               <img src='img/social_logo.png' alt='socialLogo'>            </div>

    </header>
    <nav>
        <ul>
            
            <li><a href="index.php.html">HOME</a></li>
            <li>
                <a href="racism.php.html">RACISIM</a>
                <ul class="racisim_nav">
                    <li><a href="racism.php.html">RACISM AT WORKPLACE</a></li>
                    <li><a href="racism_education.php.html">RACISM IN EDCATION</a></li>
                    <li><a href="racism_prevent.php.html">TECHNOLOGY PREVENT RACISM</a></li>
                </ul>
            </li>
            <li><a href="sexism_in_IT.php.html">SEXISM</a>
                <ul class="sexism_nav">
                    <li><a href="sexism_in_IT.php.html">GENDER INEQUALITY IN INFORMATION TECHNOLOGY</a></li>
                    <li><a href="sexism_in_IT2.php.html">COMPUTING AND TECHNOLOGY AFFECT PEOPLE</a></li>
                    <li><a href="sexism_in_IT3.php.html">FEMALE CHARACTERS ON VIDEO GAMES COVERS</a></li>
                </ul>
            
            </li>
             <li><a href="wealth_in_education1.php.html">WEALTH IN EDUCATION</a>
                <ul class="wealth_nav">
                    <li><a href="wealth_in_education1.php.html">DIFFERENECES IN ACCESS TO EDUCATION DUE TO WEATLTH ISSUES</a></li>
                    <li><a href="wealth_in_education2.php.html">HOW IT AFFECTS PEOPLE</a></li>
                    <li><a href="wealth_in_education3.php.html">HOW TECHNOLOGY CAN HELP IN RESOLVING THIS ISSUE</a></li>
                </ul>
                
            </li>
             <li><a href="social_factors_affecting_IT1.php.html">SOCIAL FACTORS</a>
                <ul class="social_nav">
                    <li><a href="social_factors_affecting_IT1.php.html">THE EFFECT OF SOCIETY</a></li>
                    <li><a href="social_factors_affecting_IT2.php.html">WHAT SOCIETY TELLS US</a></li>
                    <li><a href="social_factors_affecting_IT3.php.html">SOCIETY CAN INCREASE EQUAL OPERTUNITYS</a></li>
                </ul>
                
            </li>
            
            <li><a href="contactus.php.html">CONTACT US</a></li>
        </ul>
        <div id="mobile_logo">
                           <img src='img/social_logo.png' alt='social logo'>            Equal Opportunity
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
                <li><a href="index.php.html">HOME</a></li>
                <li><a href="racism.php.html">RACISIM</a></li>
                <li><a href="sexism_in_IT.php.html">SEXISM</a></li>
                <li><a href="wealth_in_education2.php.html">WEALTH</a></li>
                <li><a href="social_factors_affecting_IT1.php.html">SOCIAL</a></li>
                <li><a href="contactus.php.html">CONTACT US</a></li>
            </ul>
        </div>
         <main>
         
                <section id="right_menu">
                    <h2>Sources Used</h2>
                    
                    <ul>
                        <li><a href="sexism_in_IT.php.html">Gender imbalance</a></li>
                        <li><a href="wealth_in_education1.php.html">Educational differences</a></li>
                    </ul>
                    <h2>Further Reading</h2>
                    
                    <ul>
                        <li><a target="_blank" href="http://www.goodreads.com/book/show/5470.1984">George Orwells 1984</a></li>
                    </ul>
                    
                    
                </section>
                
                      <section id="mobile_page_nav">
                    <h2>Sub heading</h2>
                    
                    <ul>
                         <li><a href="social_factors_affecting_IT1.php.html">THE EFFECT OF SOCIETY</a></li>
                    <li><a href="social_factors_affecting_IT2.php.html">WHAT SOCIETY TELLS US</a></li>
                    <li><a href="social_factors_affecting_IT3.php.html">SOCIETY CAN INCREASE EQUAL OPERTUNITYS</a></li>
                    </ul>
                </section>
                <section class="page_section_sexism">
                    <p class="date_published"></p>
                    <h2>The Effect Of Society</h2>
                    <p class="wrote">By Ashley Buckingham - Updated: 08 Jan 2016</p>
                    
    <br>                
<p>Within this Website you will have seen sufficient discussions on topics related to <a href="sexism_in_IT.php.html">Gender imbalance</a> and <a href="wealth_in_education1.php.html">Educational differences</a> while i shall not repeat the points made in these articles they do provide evidence to support the following discussion, it is for this reason that i recommend reading those articles first. </p>
</br>
<p>Within this article we will explore the arguments both for and against the reasoning behind inequality in Computing and IT. While the points made bellow do cross with the topics provided by my peers, it is important to note that this section will be describing the actions of current society to promote/degrade the positioning of people within IT and not the specifics of active gender discrimination and economic bias.
</p>
</br>
<h3>THE POWER OF SOCIETY</h3>
<div>
<img src="https://pmcdeadline2.files.wordpress.com/2014/11/1984-big-brother.png?w=446&h=299&crop=1"  alt="George Orwell Great Society" height="42" width="42">
<br><i>“The reflection of the current social paradigm tells us we are largely determined by conditioning and conditions.” </i>
</br><strong>Stephen R. Covey</strong><br>
<div>
</br>
</br></br>
<p>The power of society is evident all around us, we are told what to wear, how to act and what choices we can make. the power of soviet has both created devastating wars and propelled us to greatness, and with the Orwell ‘great society’ we live in today it is clear to see how the ideas of the general public can easily influence your actions. By reading the articles written by my peers on this website it is very evident that inequality does exist within computing,however as previously mentioned this section will address the direct influence society has on computing.
</p>
        <div class="bottomnav">
<input type="button" name="b1" value="next" onclick="location.href='social_factors_affecting_IT2.php.html'">
</div>
               
                </section>
                
                
                
                
            </main>
            <div style="height:20px;clear:both;"></div>

        <footer>

        </footer>
    </div>


    </body>
</html>