  
  
                

					<!-- Само окно-->
			<div id="window">
                      
                      
                        <div class="corner"></div>
                      <form method="post" id="form_reg" >
                        <div id="block-form-reg">
                       
                            <ul id="form-registration">
                             
                                <li>
                                    <label>Login</label>
                                    <span class="star">*</span>
                                    <input type="text" name="reg_login" id="reg_login"/>
                                </li>
                                <li>
                                    <label>Password</label>
                                    <span class="star">*</span>
                                    <input type="text" name="reg_pass" id="reg_pass"/>
                                </li>
                               
                                <li>
                                    <label>E-mail</label>
                                    <span class="star">*</span>
                                    <input type="text" name="reg_email" id="reg_email"/>
                                </li>
                            </ul>
                             <p class="message" id="message-haveuser">This login already exists, enter another login!</p>
                             <p class="message" id="message-yes-reg">You have successfully registrating!</p> 
                             <p class="message" id="message-no-reg">You are not registered!</p> 
                             <p class="message" id="wrongdata">You entered incorrect data!</p> 
                              <p class="message" id="noinfo">You have not entered data!</p> 
                        </div>
                       
                        <p align="right"><input  onclick="reg_button()" type="button"  name="reg_submit" id="form_submit" value="Register"/></p>
                      </form>
   
                    </div>	

