<?php
    error_reporting(E_ALL ^ E_DEPRECATED);
    require_once("db_connection.php");
    $sql_content = "SELECT * FROM content WHERE id='12'"; 
    $tb_content = mysql_query($sql_content) or die(mysql_error());
    $select_content = mysql_fetch_array($tb_content);
    $title = $select_content['page_title'];                    
?>
<?php require_once("header.php"); ?>
     <main>
                <section id="right_menu">
                    <h2>RELATED TOPICS</h2>
                    <ul>
                        <li><a href="https://www.gov.uk/government/publications/disability-facts-and-figures/disability-facts-and-figures#employment">Disabled employment statistics</a></li>
                        <li><a target="_blank" href="https://plot.ly/">Plotly Graph Maker</a></li>
                        <li><a href="http://www.washington.edu/doit/working-together-people-disabilities-and-computer-technology">Adapting computers for disabilities</a></li>
                    </ul>
                </section>
            
               
                   
                <section id="mobile_page_nav">
                    <h2>Sub heading</h2>
                    
                <ul>
                    <li><a href="social_factors_affecting_IT1.php">THE EFFECT OF SOCIETY</a></li>
                    <li><a href="social_factors_affecting_IT2">WHAT SOCIETY TELLS US</a></li>
                    <li><a href="social_factors_affecting_IT3.php">SOCIETY CAN INCREASE EQUAL OPPORTUNITIES</a></li>
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