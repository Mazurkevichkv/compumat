<?php
	include("db_connect.php");
  session_start();
    include("auth_cookie.php");

$new = $_POST['id'];
	$login=$_SESSION['auth-login'];
    $rs = mysql_query("SELECT * FROM reg_user WHERE login = '$login'");
    $row = mysql_fetch_array($rs);
    $result_mat_mod=$row['savedmatmod'];
    $mat_mod_id = explode("/", $result_mat_mod);
    for ($i=0; $i<count( $mat_mod_id); $i++)
    {
      $saved_id=$mat_mod_id[$i];
      if ($new == $saved_id) 
      {
        $a=1;
        exit;
      }
        };
        if ($a<>1)
        {
        $result_mat_mod=$result_mat_mod."/".$new; 
               
        $sql="UPDATE reg_user SET savedmatmod = '$result_mat_mod'  WHERE login = '$login'";
        $result = mysql_query($sql, $link) ;
        exit;   
        }
?>

