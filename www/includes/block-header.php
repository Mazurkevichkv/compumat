<div id="block-header">
<?php
	include("registration.php");
?>
<p id="kpi" align="center">��ֲ�������� ���Ͳ���� �Ͳ�������� �������
<br>"�������� ����������� ��������"<br><a href="http://fel.kpi.ua/fel/index.php?lang=uk">��������� ����������</a></p>
<?php

	if ($_SESSION['auth']=='yes_auth')
    {
       echo'<p id="auth-user-info" align="right"><a href="privatniy-kabinet.php">'.$_SESSION['auth-login'].'</a><input type="button" class="top-auth" value="�����" onclick="outuser();"></p>'; 
    }else
    {
        echo '<p id="reg-auth-title"><input id="button-enter" type="button" class="top-auth" value="����" onclick="hideShowDiv();"><button class="reg-title" onclick="show()">���������</button></p> ';
    }
    
?>


<div id="block-top-auth">
<div class="corner"></div>
<form method="post">
<ul id="input-email-pass">
<p class="message" id="message-auth">������������ ���� � (���) ������</p>
<li><center><input id="auth-login" placeholder="���� ��� ����" type="text"  /></center></li>
<li><center><input  id="auth-pass" placeholder="������" type="text"  /><span id="button-pass-show-hide" class="pass-show" onclick="eye();" ></span></center></li>
<ul id="list-auth">
 <li><input type="checkbox" name="rememberme" id="rememberme"/><label for="rememberme"> �����'����� ����</label></li>
 
</ul>
<p align="right" id="button-auth" onclick="auth_button();"><a>����</a></p>
<p align="right" class="auth-loading"><img src="/images/loading.gif" /></a></p>
</ul>

</form>

</div>


<a href="index.php"><img id="img-osvit_port" src="/images/kpi.png"/></a>




</div>