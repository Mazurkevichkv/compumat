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
                 <p>Математичні моделі</p>
            </div>
            <?php include("includes/block-search.php"); ?>
    </div>
    
    <div  class="bgviolet">
 <p class="save-remove" id="save-mat-mod">Лекція додана в закладки!</p>
        <div id="mat_modeli">
          <?php	

             $rs = mysql_query("SELECT * FROM math_models");   
        	while($row = mysql_fetch_array($rs)) 
            {
                
        	   $id=$row['id'];
               $title=$row['title'];
               $date=$row['date'];
           	if ($_SESSION['auth']=='yes_auth')
                {
                   
                  echo
                  '
                  <li>
                 <a href="certain_math_model.php?id='.$id.'">'. $title.'</a><h1 Onclick="savemat_mod('.$id.')"><img  src="/images/add.png"></h1><p>'.$date.'</p>
                  
                  </li>
                  '
                  ;
                } 
            else 
              {
                 echo
              '
              <li>
             <a href="certain_math_model.php?id='.$id.'">'. $title.'</a><p>'.$date.'</p>
              
              </li>
              '
              ;
              }
              }
              
          ?>
        </div>
    </div>
	
    
    <div id="block-right">
      <?php include("includes/block-category.php");?>
    </div>
    
    <?php include("includes/block-footer.php");?>
    
  </div>
</body>