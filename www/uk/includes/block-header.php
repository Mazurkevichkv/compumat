<div id="block-header">
<?php
	include("registration.php");
?>
<p id="kpi" align="center">NATIONAL TECHNICAL UNIVERSITY OF UKRAINE<br>" Kyiv Polytechnic Institute"  <br><a href="http://fel.kpi.ua/fel/index.php?lang=uk">Department of Electronics</a></p>
<?php

	if ($_SESSION['auth']=='yes_auth')
    {
       echo'<p id="auth-user-info" align="right"><a href="privatniy-kabinet.php">'.$_SESSION['auth-login'].'</a><input type="button" class="top-auth" value="Exit" onclick="outuser();"></p>'; 
    }else
    {
        echo '<p id="reg-auth-title"><input id="button-enter" type="button" class="top-auth" value="Entrance" onclick="hideShowDiv();"><button class="reg-title" onclick="show()">Registration</button></p> ';
    }
    
?>


<div id="block-top-auth">
<div class="corner"></div>
<form method="post">
<ul id="input-email-pass">
<p class="message" id="message-auth">Incorrect username and (or) password</p>
<li><center><input id="auth-login" placeholder="Username or email adresses" type="text"  /></center></li>
<li><center><input  id="auth-pass" placeholder="Password" type="text"  /><span id="button-pass-show-hide" class="pass-show" onclick="eye();" ></span></center></li>
<ul id="list-auth">
 <li><input type="checkbox" name="rememberme" id="rememberme"/><label for="rememberme"> Remember me</label></li>
 
</ul>
<p align="right" id="button-auth" onclick="auth_button();"><a>Entrance</a></p>
<p align="right" class="auth-loading"><img src="/images/loading.gif" /></a></p>
</ul>

</form>

</div>


<a href="index.php"><img id="img-osvit_port" src="/images/kpi.png"/></a>




</div>