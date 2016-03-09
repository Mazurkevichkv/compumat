<div id="block-category">
 <p id="text-cateory" onclick="menustripOff()">Навігація</p>
 <ul>
  <li><a href="videopodskazki.php">Відеопідсказки</a></li>
 <li><a href="matematichni_modeli.php">Лекції</a></li>
 <li><a href="programa-kursu.php">Програма курсу</a></li>
 <li><a href="literatura-do-kursu.php">Література до курсу</a></li>
 <li><a href="vimogi-do-referatyv.php">Вимоги до рефератів</a></li>
 <li><a href="vimogi-do-programi.php">Вимоги до програми</a></li>
 <?php
	if ($_SESSION['auth']=='yes_auth')
    {
        echo'
 <li><a href="induvidualni-zavdannua.php">Індивідуальні завдання</a></li>
 <li><a href="domashni-zavdannua.php">Домашні завдання</a></li>
 <li><a href="kontrolni-zavdannua.php">Контрольні роботи</a></li>
 <li><a href="privatniy-kabinet.php" >Закладки</a></li>
        ';
    }
    
?>
<li> <a href="korysny-resursi.php">Корисні ресурси</a></li>
<li><a href="pro-vukladacha.php">Про викладача</a></li>
 <li><a href="zvorotniy-zvyazok.php">Зворотній зв'язок</a></li>
 <li><a href="reyting.php">Рейтинг</a></li> 
 </ul>
</div>
<div class="vertical-menu" onclick="menustripOn()">Навігація</div>