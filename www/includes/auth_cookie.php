<?php	

 if ($_SESSION['auth'] != 'yes_auth' && $_COOKIE["rememberme"])
  {

  $str = $_COOKIE["rememberme"];
  
  // ��� ����� ������
  $all_len = strlen($str);
  // ����� ������
  $login_len = strpos($str,'+'); 
  // �������� ������ �� ����� � �������� �����
  $login = clear_string(substr($str,0,$login_len));
  
  // �������� ������ 
  $pass = clear_string(substr($str,$login_len+1,$all_len));

  
     $result = mysql_query("SELECT * FROM reg_user WHERE (login = '$login' or email = '$login') AND password = '$pass'");
if (mysql_num_rows($result) > 0)
{
    $row = mysql_fetch_array($result);
    session_start();
    $_SESSION['auth'] = 'yes_auth'; 
    $_SESSION['auth-pass'] = $row["password"];
    $_SESSION['auth-login'] = $row["login"];
    $_SESSION['auth-email'] = $row["email"];
}
  
  
  
  }
?>