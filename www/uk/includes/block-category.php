<div id="block-category">
 <p id="text-cateory" onclick="menustripOff()">Navigation</p>
 <ul>
  <li><a href="videopodskazki.php">Video lectures</a></li>
 <li><a href="matematichni_modeli.php">Lectures</a></li>
 <li><a href="programa-kursu.php">The course program</a></li>
 <li><a href="literatura-do-kursu.php">The course literature</a></li>
 <li><a href="vimogi-do-referatyv.php">Requirements for abstracts</a></li>
 <li><a href="vimogi-do-programi.php">Requirements for program</a></li>
 <?php
	if ($_SESSION['auth']=='yes_auth')
    {
        echo'
 <li><a href="induvidualni-zavdannua.php">Individual tasks</a></li>
 <li><a href="domashni-zavdannua.php">Homework</a></li>
 <li><a href="kontrolni-zavdannua.php">Tests</a></li>
 <li><a href="privatniy-kabinet.php" >Favorites</a></li>
        ';
    }
    
?>
 
 <li><a href="zvorotniy-zvyazok.php">Feedback</a></li>
 <li><a href="reyting.php">Rating</a></li> 
 </ul>
</div>
<div class="vertical-menu" onclick="menustripOn()">Navigation</div>
