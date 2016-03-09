<?php
	include("includes/db_connect.php");
    include("functions/functions.php");
  session_start();
    include("includes/auth_cookie.php");
    $id=$_GET["id"];
	$rs = mysql_query("SELECT * FROM math_models WHERE id='$id'");
	$row = mysql_fetch_array($rs);
    $title=$row['title'];
    $full_text=$row['full_text'];
    
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
            <p><?php echo $title ?></p>
            </div>
             <?php include("includes/block-search.php"); ?>
    </div>
    
    <div id="block-content">
    <?php	
    echo $full_text;
	mysql_close();
    ?>
    <a class="previous" href="matematichni_modeli.php"><img src="images/previous.png"/>Назад</a>
    </div>
	
    
    <div id="block-right">
      <?php include("includes/block-category.php");?>
    </div>
    
    <?php include("includes/block-footer.php");?>
    
  </div>
</body>