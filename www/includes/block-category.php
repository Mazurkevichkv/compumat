<div id="block-category">
 <p id="text-cateory" onclick="menustripOff()">��������</p>
 <ul>
  <li><a href="videopodskazki.php">³�����������</a></li>
 <li><a href="matematichni_modeli.php">������</a></li>
 <li><a href="programa-kursu.php">�������� �����</a></li>
 <li><a href="literatura-do-kursu.php">˳�������� �� �����</a></li>
 <li><a href="vimogi-do-referatyv.php">������ �� ��������</a></li>
 <li><a href="vimogi-do-programi.php">������ �� ��������</a></li>
 <?php
	if ($_SESSION['auth']=='yes_auth')
    {
        echo'
 <li><a href="induvidualni-zavdannua.php">����������� ��������</a></li>
 <li><a href="domashni-zavdannua.php">������ ��������</a></li>
 <li><a href="kontrolni-zavdannua.php">��������� ������</a></li>
 <li><a href="privatniy-kabinet.php" >��������</a></li>
        ';
    }
    
?>
<li> <a href="korysny-resursi.php">������ �������</a></li>
<li><a href="pro-vukladacha.php">��� ���������</a></li>
 <li><a href="zvorotniy-zvyazok.php">�������� ��'����</a></li>
 <li><a href="reyting.php">�������</a></li> 
 </ul>
</div>
<div class="vertical-menu" onclick="menustripOn()">��������</div>