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
                 <p>Main</p>
            </div>
           
            <?php include("includes/block-search.php"); ?>
    </div>
    
    <div id="block-content">
    
     <div id="deadline-timer" style="display: inline; font:bold  20px times new roman; color: rgb(255, 0, 0); text-align: center;">Before the session remaining 16 days 8 hours 13 minutes 8 seconds</div>
         
    <div id="clock">
   
         <p> Left to lecture :</p>
         <script src="http://megatimer.ru/s/8b8690cc9e7061dc05a7ba5cf824c3ea.js"></script>
         <img src="images/clock-title.png" />
    </div>
   <div id="o-nas">
   <p style="text-align: center;"> <span style="color:#000080;"><span style="font-size:20px;">Course of Computational Mathematics</span></span></p> <p> &nbsp;</p> <p style="text-align: center;"> <span style="font-size:18px;"><span style="color:#696969;">This resource is developed for students of the Faculty of Electronics KPI studing</span></span></p> <p style="text-align: center;"> <span style="font-size:18px;"><span style="color:#696969;">at the Department</span><span style="color:#000080;"> Electronic devices and equipment</span><span style="color:#696969;">.</span></span></p> <p style="text-align: center;"> &nbsp;</p> <p style="text-align: center;"> &nbsp;</p>  <p style="text-align: center;"> &nbsp;</p> <p style="text-align: center;"> &nbsp;</p> <p style="text-align: center;"> <span style="font-size:18px; color:#696969;">With the support of companies&nbsp;<a href="http://zyxel.ua/">ZyXEL</a>&nbsp;and&nbsp;<a href="http://qnap.ua/">QNAP</a></span></p>
   </div>
   </div>
	
    
    <div id="block-right">
      <?php include("includes/block-category.php");?>
    </div>
    
    <?php include("includes/block-footer.php");?>
    
  </div>
</body>