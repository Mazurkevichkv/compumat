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
            <p>Рейтинг</p>
            </div>
             <?php include("includes/block-search.php"); ?>
    </div>
    
    <div id="block-content">
        <h4>Ваш поточний рейтинг, який веде викладач, можна знайти в таблиці <a class="googleDoc" href="https://docs.google.com/spreadsheets/d/1B0oUKYENPMczGde7ovTxOyC48b2ekWJhPlBFzxYm6cc/edit?usp=sharing">GoogleDoc</a></h4>
       
        <h4>Розрахувати приблизно ваш рейтинг Ви можете самі, заповнивши таблицю нижче <br>( акуратно відмітьте пункти, які Ви вже виконали)
       </h4>
      
        <?php include("includes/rate.php"); ?>
    </div>
    
    <div id="block-right">
      <?php include("includes/block-category.php");?>
    </div>
    
    <?php include("includes/block-footer.php");?>
    
  </div>
</body>