<?php
    error_reporting(E_ALL ^ E_DEPRECATED);
    require_once("db_connection.php");
    $sql_content = "SELECT * FROM content WHERE id='8'"; 
    $tb_content = mysql_query($sql_content) or die(mysql_error());
    $select_content = mysql_fetch_array($tb_content);
    $title = $select_content['page_title'];                    
?>
<?php require_once("header.php"); ?>
     <main>
                <section id="right_menu">
                     <h2>RELATED TOPICS</h2>
                    
                    <ul>
				<li><a href="http://www.kickstarter.com/projects/566429325/tropes-vs-women-in-video-games">Tropes vs Women in videogames</a></li>
				<li><a href="http://www.psmag.com/books-and-culture/halo-3-gamers-are-often-sexist-too-61564">Halo 3 Gamers Are Sexist, Too</a></li>
				<li><a href="https://scholar.google.com/citations?view_op=view_citation&hl=en&user=BEpqi4oAAAAJ&citation_for_view=BEpqi4oAAAAJ:d1gkVwhDpl0C">Still A Man's Game: Gender representation in online reviews of video games</a></li>
				<li><a href="http://edition.cnn.com/2012/05/07/tech/web/brogrammers/index.html">The brogrammer culture</a></li>
				<li><a href="http://fortune.com/2014/10/02/women-leave-tech-culture/">Why women leave tech: It's the culture not because 'math is hard'</a></li>
				<li><a href="http://www.theatlantic.com/business/archive/2013/09/the-brogrammer-effect-women-are-a-small-and-shrinking-share-of-computer-workers/279611/">The Brogrammer Effect: Women Are a Small Share and Shrinking of Computer Workers</a></li>
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