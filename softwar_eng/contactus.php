<?php require_once("header.php"); ?>
     <main>
                <section id="right_menu">
                    <h2>RELATED TOPCS</h2>
                    
                    <ul>
                        <li>Related topic</li>
                        <li>Related topic</li>
                        <li>Related topic</li>
                        <li>Related topic</li>
                        <li>Related topic</li>
                        <li>Related topic</li>
                        <li>Related topic</li>
                        <li>Related topic</li>
                        <li>Related topic</li>
                        <li>Related topic</li>
                    </ul>
                    
                </section>
                
                <section class="contact_us">
                    <h2>Contact Us</h2>
                    
                    <form action="" method="POST" onsubmit="return validationContactUs()">
                        <fieldset>
                            <legend>Your Query</legend>
                       <table>
                           <tr>
                                <td><label for="Name">Name (Required) </label></td>
                                <td>
                                   <input type="text" id="query_name" name="name" required placeholder="Enter you name" autofocus/>
                                </td>
                                <td id="error_query_name"></td>
                           </tr>

                           <tr>
                                <td><label for="email">E-mail (Required) </label> </td>
                                <td>
                                    <input type="email" id="query_email" name="email" required placeholder="Your email"/> </td>
                                <td id="error_query_email"></td>
                           </tr>
                           
                           <tr>
                                <td><label for="Telephone Number">Telephone Number</label> </td>
                                <td>
                                    <input type="tel" id="query_telephone" name="telephone" placeholder="Your telephone number"/> </td>
                                <td id="error_query_email"></td>
                           </tr>

                           <tr>
                                <td><label for="query">Your query title (Required)</label></td>
                                <td>
                                    <input type="text" id="query_title" name="query_title" required placeholder="Your query title"/></td>
                                <td id="error_query_title"></td>
                           </tr>

                           <tr>
                                <td>Your query (Required)</td>
                               <td>
                                    <textarea rows="10" cols="25" name="query" required id="query"></textarea>
                               </td>
                               <td id="error_query"></td>
                           </tr>

                           <tr>
                               
                               <td>
                               </td>

                                <td><input type="submit" name="submit" value="Send your query"/> </td>
                           </tr>
                       </table>
                        </fieldset>
                    </form>
                    
                    
                </section>
                
                
                
                
            </main>
            <div style="height:20px;clear:both;"></div>

<?php require_once("footer.php"); ?>