<?php

    error_reporting(E_ALL ^ E_DEPRECATED);
    require_once("db_connection.php");
    $sql_content = "SELECT * FROM content WHERE id='2'"; 
    $tb_content = mysql_query($sql_content) or die(mysql_error());
    $select_content = mysql_fetch_array($tb_content);
    $title = $select_content['page_title'];                    
?>
<?php require_once("header.php"); ?>
     <main>
                <section id="right_menu">
                    <h2>EXTERNAL LINKS</h2>
                    
                    <ul>
                        <li><a target="_blank" href="http://www.globalissues.org/article/165/racism">Racism</a></li>
                    </ul>
                    
                    <h2>RACISM BY COUNTRIES</h2>
                    
                    <ul>
                        <li>
                            <a target="_blank" href="http://www.independent.co.uk/voices/comment/white-people-may-deny-it-but-racism-is-back-in-britain-10384129.html">Racism in the UK</a>
                        </li>
                        
                        <li>
                            <a target="_blank" href="http://www.ijreview.com/2014/04/133024-10-charts-show-racist-america-really/">Racism in America</a>
                        </li>
                    </ul>
                    
                    <h2>RACISM BY SUB-SECTIONS</h2>
                    <ul>
                     <li>
                            <a target="_blank" href="http://www.safeworkers.co.uk/equalopportunitieswork.html">Equal opportunity at work</a>
                        </li>
                    </ul>
                    
                </section>
                
                 <section id="mobile_page_nav">
                    <h2>Sub heading</h2>
                    
                    <ul>
                        <li><a href="racism_education.php">RACISM IN EDCATION</a></li>
                        <li><a href="racism_at_work.php">RACISM AT WORKPLACE</a></li>
                        <li><a href="racism_prevent.php">TECHNOLOGY PREVENT RACISM</a></li>
                    </ul>
                </section>
                
                <section class="page_section_sexism">
                    <p class="date_published"></p>
                    <h2><?php echo $select_content['page_title']; ?></h2>
                    <p class="wrote">By <?php echo $select_content['author']; ?> - Updated: 22 Dec 2015</p>
                    
                        <?php 
                            echo html_entity_decode($select_content['content']);
                            ?>
                    
                </section>
                
                
                
                
            </main>
            <div style="height:20px;clear:both;"></div>

<?php require_once("footer.php"); ?>