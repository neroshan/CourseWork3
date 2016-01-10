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
                        <li><a href="https://www.gov.uk/government/publications/disability-facts-and-figures/disability-facts-and-figures#employment">Disabled employment statistics</a></li>
                        
                        <li><a href="http://www.washington.edu/doit/working-together-people-disabilities-and-computer-technology">Adapting computers for disabilities</a></li>
                    </ul>
                    <h2>Further Reading</h2>
                    
                    <ul>
                        <li><a target="_blank" href="https://plot.ly/">Plotly Graph Maker</a></li>
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
                    <h2>Society changes can help</h2>
                    <p class="wrote">By Ashley Buckingham - Updated: 08 Jan 2016</p>
                    
    <br>                
<p>One increase in equal opportunity which i believe deserves its own section is related to disability employment.<a href="https://www.gov.uk/government/publications/disability-facts-and-figures/disability-facts-and-figures#education">Statistics</a> show that Disabled people are now more likely to be employed than they were in 2002, but disabled people remain significantly less likely to be in employment than non-disabled people, the chart below specifies this contrast.
<p><iframe width="640" height="360" frameborder="0" scrolling="no" src="https://plot.ly/~ashbuck/2.embed?share_key=aXJfgmXoA1OU2u5JoYhp3t"></iframe></p>
</p>
</br>

<br>
<p>while there are many factors that have enabled this i would like to discuss the role of society that plays to elevate this opportunity. Societies idea of a IT employee has changed along with working expectations, with the development of high speed internet and affordable technology more and more people now work from home, this can directly aid the disabled in many ways, most obviously those who have mobility impairments are no longer expected to travel to and from an office in a busy commute to compete work. Other disabilities can also benefit from this social change, those who have sensory impairments can also work from home with specially made hardware and software that aids there ability to work.The video below demonstrates some technology specially made to aid these impairments.
</p>
</br>
<p><iframe width="640" height="360" src="https://www.youtube.com/embed/X92Cd6jicko" frameborder="0" allowfullscreen></iframe>
</p>

</br>
<strong>Society changes can help
</strong>

<p>So as we have established changes in the way society thinks can directly influence how people think and therefore increase the opportunities of everyone, in an ideal society everyone will have equal opportunity however this will no happen until everyone agrees the importance of ensuring that equality is demonstrated through society from television to the classroom and within tech companies from the top to the bottom.</p>
</br>


        <div class="bottomnav">
<input type="button" name="b1" value="previous" onclick="location.href='social_factors_affecting_IT2.php.html'">
</div>
               
                </section>
                
                
                
                
            </main>
            <div style="height:20px;clear:both;"></div>

        <footer>
        </footer>
    </div>


    </body>
</html>