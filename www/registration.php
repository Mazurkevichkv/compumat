  
  
                

					<!-- Само окно-->
			<div id="window">
                      
                      
                        <div class="corner"></div>
                      <form method="post" id="form_reg" >
                        <div id="block-form-reg">
                       
                            <ul id="form-registration">
                             
                                <li>
                                    <label>Логін</label>
                                    <span class="star">*</span>
                                    <input type="text" name="reg_login" id="reg_login"/>
                                </li>
                                <li>
                                    <label>Пароль</label>
                                    <span class="star">*</span>
                                    <input type="text" name="reg_pass" id="reg_pass"/>
                                </li>
                               
                                <li>
                                    <label>E-mail</label>
                                    <span class="star">*</span>
                                    <input type="text" name="reg_email" id="reg_email"/>
                                </li>
                            </ul>
                             <p class="message" id="message-haveuser">Такий логін вже існує, введіть інший логін!</p>
                             <p class="message" id="message-yes-reg">Ви успішно зареєстровані!</p> 
                             <p class="message" id="message-no-reg">Ви не зареєстровані!</p> 
                             <p class="message" id="wrongdata">Ви ввели некоректні данні!</p> 
                              <p class="message" id="noinfo">Ви не ввели данні!</p> 
                        </div>
                       
                        <p align="right"><input  onclick="reg_button()" type="button"  name="reg_submit" id="form_submit" value="Зареєструватись"/></p>
                      </form>
   
                    </div>	

