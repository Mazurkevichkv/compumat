<?php
	include("db_connect.php");
    session_start();
    include("auth_cookie.php");
$new = $_POST['id'];
	$login=$_SESSION['auth-login'];
    $rs = mysql_query("SELECT * FROM reg_user WHERE login = '$login'");
    $row = mysql_fetch_array($rs);
    $result_video=$row['savedvideo'];
    $video_id = explode("/", $result_video);
    for ($i=1; $i<count( $video_id); $i++)
    {
      if ($new == $video_id[$i]) 
      {
        $video_id[$i]="";
      }
     }   
     $result_video="";             
     for ($i=1; $i<count( $video_id); $i++)
    {
        if  ($video_id[$i]!="")
        {
            $result_video=$result_video."/".$video_id[$i];  
        }
    }        
        $sql="UPDATE reg_user SET savedvideo = '$result_video'  WHERE login = '$login'";
        $result = mysql_query($sql, $link) ;  
      
?>
