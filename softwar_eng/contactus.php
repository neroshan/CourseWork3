
<?php $title="Contact us"; require_once("header.php"); ?>
     <main> 
         
                <section id="right_menu">
                
                </section>
                
         
         
                <?php
                    if ($_POST["email"]<>'') { 
                        $ToEmail = 'niroshankulasingam@gmail.com'; 
                        $EmailSubject = $_POST["query_title"]; 
                        $mailheader = "From: ".$_POST["email"]."\r\n"; 
                        $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
                        $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
                        $MESSAGE_BODY = "Name: ".$_POST["name"]."<br>"; 
                        $MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>"; 
                        $MESSAGE_BODY .= "Telephone: ".$_POST["telephone"]."<br>"; 
                        $MESSAGE_BODY .= "Comment: ".$_POST["query"]."<br>"; 
                        mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
                        }
                ?>
         
                <section class="contact_us">
                    <h2>Contact Us</h2>
                    
                    <div class="contact_us_profile">
                        <img src="img/kesh.jpg" alt="profile">
                        <p>Name: Lokesh Tilwani<br/>
                        Email: <a href="mailto:lokesh.tilwani@my.westminster.ac.uk" target="_top">
                                lokesh.tilwani@my.westminster.ac.uk
                               </a>
                        </p>
                    </div>
                    
                    <div class="contact_us_profile">
                        <img src="img/niroshan.jpg" alt="profile1">
                        <p>Name: Niroshan Kulasingam<br>
                            Email:  <a href="mailto:w1564380@my.westminster.ac.uk" target="_top">
                                        w1564380@my.westminster.ac.uk
                                    </a>
                            
                        </p>
                    </div>
                    
                    <div class="contact_us_profile">
                        <img src="img/alex.jpg" alt="profile1">
                        <p>Name: Alexis Miakouikila<br>
                            Email: <a href="mailto:w1414722@my.westminster.ac.uk" target="_top">
                                        w1414722@my.westminster.ac.uk
                                   </a>
                            </p>
                    </div>
                    
                    <h2>Query form</h2>
                     <?php if(!isset($_POST["submit"])) {?>
                    <form action="contactus.php" method="POST" onsubmit="return validationContactUs()">
                        <fieldset>
                            <legend>Your Query</legend>
                       <table>
                           <tr>
                                <td><label for="query_name">Name (Required) </label></td>
                                <td>
                                   <input type="text" id="query_name" name="name" required placeholder="Enter you name" autofocus/>
                                </td>
                                <td id="error_query_name"></td>
                           </tr>

                           <tr>
                                <td><label for="query_email">E-mail (Required) </label> </td>
                                <td>
                                    <input type="email" id="query_email" name="email" required placeholder="Your email"/> </td>
                                <td id="error_query_email"></td>
                           </tr>
                           
                           <tr>
                                <td><label for="query_telephone">Telephone Number</label> </td>
                                <td>
                                    <input type="tel" id="query_telephone" name="telephone" placeholder="Your telephone number"/> </td>
                                <td id="error_query_emaill"></td>
                           </tr>

                           <tr>
                                <td><label for="query_title">Your query title (Required)</label></td>
                                <td>
                                    <input type="text" id="query_title" name="query_title" required placeholder="Your query title"/></td>
                                <td id="error_query_title"></td>
                           </tr>

                           <tr>
                                <td>Your query (Required)</td>
                               <td>
                                    <textarea rows="10" cols="40" name="query" required id="query"></textarea>
                               </td>
                               <td id="error_query"></td>
                           </tr>

                           <tr>
                               <td>
                               </td>
                                <td>
                                    <input type="submit" name="submit" value="Send your query"/>
                               </td>
                               <td></td>
                           </tr>
                       </table>
                        </fieldset>
                    </form>
                    <?php } else {
                            echo "<p>Thank you for your query, we will get back to you</p>";
                        }?>
                    
                </section>
                
                
                
                
            </main>
            <div style="height:20px;clear:both;"></div>

<?php require_once("footer.php"); ?>