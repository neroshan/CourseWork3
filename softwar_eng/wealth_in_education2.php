<?php
    error_reporting(E_ALL ^ E_DEPRECATED);
    require_once("db_connection.php");
    $sql_content = "SELECT * FROM content WHERE id='3'"; 
    $tb_content = mysql_query($sql_content) or die(mysql_error());
    $select_content = mysql_fetch_array($tb_content);
    $title = $select_content['page_title'];                    
?>
<?php require_once("header.php"); ?>
     <main>
                <section id="right_menu">
                   <h2>RELATED LINKS AND SOURCES</h2>
                    
                    <ul>
                        <li><a href="http://www.ask.com/education/effects-poor-education-413518d3fcf58b2a">What are the effects of poor education?</a></li>
                        <li><a href="http://www.ask.com/education/effects-caused-lack-education-cb515484f972c7de">What are some effects caused by a lack of education?</a></li>
                    </ul>
                    
                </section>
                
                
                <section id="mobile_page_nav">
                    <h2>Sub heading</h2>
                    
                    <ul>
                         <li><a href="wealth_in_education1.php">DIFFERENECES IN ACCESS TO EDUCATION DUE TO WEATLTH ISSUES</a></li>
                        <li><a href="wealth_in_education2.php">HOW IT AFFECTS PEOPLE</a></li>
                        <li><a href="wealth_in_education3.php">HOW TECHNOLOGY CAN HELP IN RESOLVING THIS ISSUE</a></li>
                    </ul>
                </section>
                <section class="page_section_sexism">
                    <p class="date_published"></p>
                    <h2><?php echo $select_content['page_title']; ?></h2>
                    <p class="wrote">By <?php echo $select_content['author']; ?> - Updated: 02 Jan 2016</p>
                    
                        <?php 
                            echo html_entity_decode($select_content['content']);
                            ?>
                    
                </section>
                
                
                
                
            </main>
            <div style="height:20px;clear:both;"></div>

<?php require_once("footer.php"); ?>