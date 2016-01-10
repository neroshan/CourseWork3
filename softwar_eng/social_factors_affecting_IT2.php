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
                    
                    <li><a href="https://www.tryinteract.com">DIY quiz</a></li>
                        <li><a href="http://www.theguardian.com/fashion/2013/sep/02/rise-geeks-outsiders-superhero-movies-dork">Rise of the Geeks</a></li>
                        <li><a href="http://the-big-bang-theory.com">The big bang theory</a></li>
                        <li><a href="sexism_in_IT.php.html">Gender imbalance</a></li>
                        <li><a href="http://www.pnas.org/content/112/17/5360">Women 2:1 in favour</a></li>
                    </ul>
                    <h2>Further Reading</h2>
                    
                    <ul>
                        <li><a target="_blank" href="http://news.sciencemag.org/education/2015/04/women-best-men-stem-faculty-hiring-study">women in STEM</a></li>
                    <li><a target="_blank" href="http://www.cs.toronto.edu/~sme/papers/2014/Patitsas-ITiCSE2014.pdf">Social factors Affecting Female Participation in Computing</a></li>
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
                    <h2>What Society Tells Us</h2>
                    <p class="wrote">By Ashley Buckingham - Updated: 08 Jan 2016</p>
                    
    <br>                
<p>A quick game click the picture below which you think best describes a geek?
</br>
<iframe width="640" height="600" src="https://quiz.tryinteract.com/#/na-company/1" class="interact-embed" width="800" height="600" frameborder="0"></iframe> <p class="interact-p"></p>
<br>
<p>If the above experiment worked you will have picked the obvious geek photo, if you didn't and the results do not agree with this point then i can only put it down to the fact that this webpage will most likely be viewed by self confessed geeks like myself.The experiment above is used to quickly demonstrate the affect that society has on our own views. While the above experiment is tongue in cheek it is important to understand that the same is still happening. Society tells us that we must conform to the typical computer geek to be interested in computing, this can be increasingly damaging to those who are currently in educational development where they are picking there future options.<strong>if you do not conform to the society geek you cant pick computing </strong>
</p>
</br>
<p>So we have established what society deems as a geek however what is interesting is societies shift in the way they view these ‘geeks’ an article in the guardian titled <a href="http://www.theguardian.com/fashion/2013/sep/02/rise-geeks-outsiders-superhero-movies-dork">"Rise of the Geeks"</a> explains how the unpopular outcast with the help of many factors such as television and media became the cool and powerful guy that everyone loves.
</p>
<br>The Big Bang Theory<br><i>Note:language some may find offensive</i></br>
<p>
<iframe width="640" height="360" src="https://www.youtube.com/embed/QORourhNyY8" frameborder="0" allowfullscreen></iframe>
		

							</p>

<p><strong>I thought this was about how society doesn't create equal opportunities?</strong> well….it is. Firstly at a young age you can be put off going to a computing class because you don't fit the societies geek but secondly even when geeks became cool we seemed to have left women behind.Still even in the 21st Century societies view is a geek male is cool but a geek girl well they are still left with the ancient views.This therefore reducing the chances f equal opportunity for women picking computer science, an argument that supports <a href="sexism_in_IT.php.html">Alexis Miakouikila article</a>.
</p>
</br>
<strong>so society hates women?</strong>

<p>well no..the feminist movement has grown and grown and societies view has changed with regards to women's place in IT and many incentives have been made to ensure this is increased,however it could be argued that societies new ‘tactics’ to equal opportunities between sexes actually reduces equality.To understand the following paragraph it is strongly recommended to read Alexis article in depth. Societies rush to get women into the field of computing has resulted in quotas to hire women, incentives for women during education and specialised programs by big technology corporations to get women to experience the workplace. While these seem like great ideas we must consider the affect that this society rule has on the opposite gender leaving university the men.
</p>
</br>
<p>
Men currently have no government educational incentives or men only experience days and due to the parsing of quotas study have found that <a href="http://www.pnas.org/content/112/17/5360">women are two-to-one more likely to secure employment from graduation than their male counterparts.<a>
</p>
               <div class="bottomnav">
<input type="button" name="b1" value="previous" onclick="location.href='social_factors_affecting_IT1.php.html'">
<input type="button" name="b1" value="next" onclick="location.href='social_factors_affecting_IT3.php.html'">
</div>
                </section>
                
                
                
                
            </main>
            <div style="height:20px;clear:both;"></div>

        <footer>
        </footer>
    </div>


    </body>
</html>