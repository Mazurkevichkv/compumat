<?php
  include("includes/db_connect.php");
  include("functions/functions.php");
  session_start();
    include("includes/auth_cookie.php");
 
?>
<!DOCTYPE HTML>
<html>
<head>
 
 <?php
	include("includes/head.php")
?>
	<title>Онлайн обучение</title>
</head>
<body>

  <div id="block-body">
  
    <?php include("includes/block-header.php");?>
    <div id="block-header2">
            <div id="block-content-title">
                 <p>Головна</p>
            </div>
           
            <?php include("includes/block-search.php"); ?>
    </div>
    
    <div id="block-content">
    
     <div id="deadline-timer" style="display: inline; font:bold  20px times new roman; color: rgb(255, 0, 0); text-align: center;" >До сесії залишилось 16 днів 8 годин 13 хвилин 8 секунд</div>
       <br><br>  
    <div id="clock">
   
         <p >До наступної лекції залишилось </p>
       
         <script src="http://megatimer.ru/s/8b8690cc9e7061dc05a7ba5cf824c3ea.js"></script>
         <img src="images/clock-title.png" />
    </div>
   <div id="o-nas">
   <p style="text-align: center;"> <span style="color:#000080;"><span style="font-size:20px;">Курс Очислювальної математики</span></span></p> <p> &nbsp;</p> <p style="text-align: center;"> <span style="font-size:18px;"><span style="color:#696969;">Цей ресурс створено для студентів 2-го курсу Факультету Електроніки КПІ, які навчаються</span></span></p> <p style="text-align: center;"> <span style="font-size:18px;"><span style="color:#696969;">на кафедрі</span><span style="color:#000080;"> Електронні прилади та пристрої</span><span style="color:#696969;">.</span></span></p> <p style="text-align: center;"> &nbsp;</p> <p style="text-align: center;"> &nbsp;</p>  <p style="text-align: center;"> &nbsp;</p> <p style="text-align: center;"> &nbsp;</p> <p style="text-align: center;"> <span style="font-size:19px; color:#696969;">За підтримки компаній&nbsp;<a href="http://zyxel.ua/">ZyXEL</a>&nbsp;та&nbsp;<a href="http://qnap.ua/">QNAP</a></span></p>
   </div>
   </div>
	
    
    <div id="block-right">
      <?php include("includes/block-category.php");?>
    </div>
    
    <?php include("includes/block-footer.php");?>
    
  </div>
</body>