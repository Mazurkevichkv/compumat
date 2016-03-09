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
                 <p>Збережене</p>
            </div>
            <?php include("includes/block-search.php"); ?>
    </div>
    
<div id="block-content">
<p class="save-remove" id="remove-video">Відео видалено з закладок!</p>
<p class="save-remove" id="remove-mat-mod">Лекція видалена з закладок!</p>
<?php
	$login=$_SESSION['auth-login'];
    $rs = mysql_query("SELECT * FROM reg_user WHERE login = '$login'");
    $row = mysql_fetch_array($rs);
    $result_mat_mod=$row['savedmatmod'];
    $result_video=$row['savedvideo'];
    ?>

    <div id="mat_modeli">
    <?php 
    $mat_mod_id = explode("/", $result_mat_mod);
    for ($i=0; $i<count( $mat_mod_id); $i++)
    {
      $saved_id=$mat_mod_id[$i];
      $rs = mysql_query("SELECT * FROM math_models WHERE id = '$saved_id'");   
      $row = mysql_fetch_array($rs);
        	   $id=$row['id'];
               $title=$row['title'];
               $date=$row['date'];
               if ($row['title']<>"")
            {
              echo
              '
              <li>
              <a href="certain_math_model.php?id='.$id.'">'. $title.'</a><h1 Onclick="removemat_mod('.$id.')"><img  src="/images/remove.png"></h1><p>'.$date.'</p>
              
              </li>
              ';
        }
        }
        
    ?>
    </div>

    <ul id="video_help">
    <?php 
    $video_id = explode("/", $result_video);
    for ($i=0; $i<count( $video_id); $i++)
    {
        
        
      $saved_id=$video_id[$i];
      $rs = mysql_query("SELECT * FROM video_help WHERE id = '$saved_id'");   
      
      $row = mysql_fetch_array($rs);
  	       $title=$row['title'];
           $script=$row['script'];
    	   $date=$row['date'];
            $id=$row['id'];
            if ($row['title']<>"")
            {
          echo
          '
          <li>
        <h2>'.$title.'</h2><h1>'. $script.'</h1><h4 Onclick="remove_video('.$id.')"><img  src="/images/remove.png"></h4><h3>'.$date.'</h3>
                
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