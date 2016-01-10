<?php
    error_reporting(E_ALL ^ E_DEPRECATED);
    require_once("db_connection.php");
    $sql_content = "SELECT * FROM content WHERE id='7'"; 
    $tb_content = mysql_query($sql_content) or die(mysql_error());
    $select_content = mysql_fetch_array($tb_content);
    $title = $select_content['page_title'];                    
?>
<?php require_once("header.php"); ?>
     <main>
                <section id="right_menu">
                    <h2>RELATED TOPICS</h2>
                    
                    <ul>
				<li><a href="https://plus.google.com/+Dell/posts/5Zg5FdFEydi">Dell public apologies</a></li>
				<li><a href="http://nces.ed.gov/programs/digest/d12/tables/dt12_349.asp">National Center for Education Statistics (US)</a></li>
				<li><a href="http://fortune.com/2014/10/02/women-leave-tech-culture/">Why women leave tech; It's the culture not because 'math is hard'</a></li>
				<li><a href="http://media.dice.com/report/february-2015-the-position-gap/">Pay gap or Position gap?</a></li>
				<li><a href="http://www.bbc.co.uk/guides/zxjr9j6">Why are there so few women in computing?</a></li>
				<li><a href="http://www.theguardian.com/technology/2014/oct/10/microsoft-ceo-satya-nadella-women-dont-ask-for-a-raise">The Nadella Controversy</a></li>
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