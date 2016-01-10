<?php
    error_reporting(E_ALL ^ E_DEPRECATED);
    require_once("db_connection.php");
    $sql_content = "SELECT * FROM content WHERE id='9'"; 
    $tb_content = mysql_query($sql_content) or die(mysql_error());
    $select_content = mysql_fetch_array($tb_content);
    $title = $select_content['page_title'];                    
?>
<?php require_once("header.php"); ?>
     <main>
                <section id="right_menu">
                     <h2>RELATED TOPICS</h2>
                    
                    <ul>
				<li><a href="http://adainitiative.org/">The Ada Initiative</a></li>
				<li><a href="http://www.sciencedirect.com/science/article/pii/S1877042815024933">Gender Difference survey</a></li>
				<li><a href="http://www.linuxchix.org/">The LinuxChix organisation</a></li>
				<li><a href="https://vhil.stanford.edu/pubs/2009/fox-sr-virgins-vamps.pdf">The Effect to Exposure to Female Characters' Sexualised Appearance</a></li>
<li><a href="https://www.researchgate.net/publication/226396946_Sex_Lies_and_Video_Games_The_Portrayal_of_Male_and_Female_Characters_on_Video_Game_Covers">Portrayal of Male and Female characters on VIdeo Games Covers</a></li>
<li><a href="http://www.aauw.org/resource/why-so-few-women-in-science-technology-engineering-and-mathematics-executive-summary/">Why so few? Women in Computing</a></li>
<li><a href="http://dl.acm.org/citation.cfm?id=543829">Recruting and retaining women in undergraduate computing majors</a></li>
                    </ul>
                    
                </section>
            
               
                   
                <section id="mobile_page_nav">
                    <h2>Sub heading</h2>
                    
                 <ul>
                    <li><a href="sexism_in_IT.php">GENDER INEQUALITY IN INFORMATION TECHNOLOGY</a></li>
                    <li><a href="sexism_in_IT2.php">COMPUTING AND TECHNOLOGY AFFECT PEOPLE</a></li>
                    <li><a href="sexism_in_IT3.php">FEMALE CHARACTERS ON VIDEO GAMES COVERS</a></li>
                </ul>
                </section>
         
                <section class="page_section_sexism">
                    <p class="date_published"></p>
                    <h2><?php echo $select_content['page_title']; ?></h2>
                    <p class="wrote">By <?php echo $select_content['author']; ?> - Updated: 02 Jan 2016</p>
                    
                        <?php 
                            echo $select_content['content'];
                            ?>
                </section>
                
                
                
                
            </main>
            <div style="height:20px;clear:both;"></div>

<?php require_once("footer.php"); ?>