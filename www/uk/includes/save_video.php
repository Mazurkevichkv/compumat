<?php
	include("db_connect.php");
  session_start();
    include("auth_cookie.php");
   

$new = $_POST['id'];
	$login=$_SESSION['auth-login'];
    $rs = mysql_query("SELECT * FROM reg_user WHERE login = '$login'");
    $row = mysql_fetch_array($rs);
    $result_video=$row['savedvideo'];
    $mat_video = explode("/", $result_video);
    for ($i=0; $i<count( $mat_video); $i++)
    {
      $saved_id=$mat_video[$i];
      if ($new == $saved_id) 
      {
        $a=1;
        exit;
      }
        };
        if ($a<>1)
        {
        $result_video=$result_video."/".$new;         
        $sql="UPDATE reg_user SET savedvideo = '$result_video'  WHERE login = '$login'";
        $result = mysql_query($sql, $link) ;
        exit;   
        }

?>