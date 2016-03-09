<?php
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
            <p>Зворотній зв'язок</p>
            </div>
             <?php include("includes/block-search.php"); ?>
    </div>
    
    <div id="block-content">    
      <iframe src="https://docs.google.com/forms/d/1qO1PGIXNin7_rdPVp-Zdo1tnbxsps7Rs14oE3JBcxRI/viewform?embedded=true" marginheight="0" marginwidth="0" frameborder="0" height="500" width="760">Loading...</iframe>
      <p>Викладач - <a href="pro-vukladacha.php"> Дрозд Ігор Михайлович</a>, Директор представництва ZyXEL в Україні</p>
      <p>e-mail: drozd@modem.com.ua</p>
    </div>
    
    <div id="block-right">
      <?php include("includes/block-category.php");?>
    </div>
    
    <?php include("includes/block-footer.php");?>
    
  </div>
</body>