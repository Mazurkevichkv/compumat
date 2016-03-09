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
                 <p>Відеопідсказки</p>
            </div>
            <?php include("includes/block-search.php"); ?>
    </div>
    
    <div  class="bgviolet">
    <p class="save-remove" id="save-video">Відео додано в закладки!</p>
       <ul id="video_help" >
         <?php
          	$rs = mysql_query("SELECT * FROM video_help");   
        	while($row = mysql_fetch_array($rs)) 
            {
                
        	   $title=$row['title'];
               $script=$row['script'];
                $date=$row['date'];
                 $id=$row['id'];
           if ($_SESSION['auth']=='yes_auth')
           {
              echo
              '
              <li>
              <h2>'.$title.'</h2><h1>'. $script.'</h1><h4 Onclick="save_video('.$id.')"><img  src="/images/add.png"></h4><h3>'.$date.'</h3>
              
              </li>
              ';
            }
            else
            {
                echo
              '
              <li>
              <h2>'.$title.'</h2><h1>'. $script.'</h1><h3>'.$date.'</h3>
              
              </li>
              ';
            }  
            }   
           ?>
       
        </ul>
    </div>
	
    
    <div id="block-right">
      <?php include("includes/block-category.php");?>
    </div>
    
    <?php include("includes/block-footer.php");?>
    
  </div>
</body>