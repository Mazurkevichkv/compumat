<?php
    if (isset($_POST['reg_login'])) { $login = $_POST['reg_login']; if ($login == '') { unset($login);} } //������� ��������� ������������� ����� � ���������� $login, ���� �� ������, �� ���������� ����������
    if (isset($_POST['reg_pass'])) { $password=$_POST['reg_pass']; if ($password =='') { unset($password);} }
    if (isset($_POST['reg_email'])) { $email=$_POST['reg_email']; if ($email =='') { unset($email);} }
    //������� ��������� ������������� ������ � ���������� $password, ���� �� ������, �� ���������� ����������
 if (empty($login) or empty($password) or empty($email) ) //���� ������������ �� ���� ����� ��� ������, �� ������ ������ � ������������� ������
    {
    echo 'noinfo'; 
    }
    else{
        //���� ����� � ������ �������, �� ������������ ��, ����� ���� � ������� �� ��������, ���� �� ��� ���� ����� ������
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
 //������� ������ �������
    $login = str_replace(" ","",$login);
    $password = str_replace(" ","",$password);
    $email = str_replace(" ","",$email);
 if( !(preg_match("|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i", $email)) or (strlen($login)<5) or (strlen($password)<5) or (strlen($login)>15) or (strlen($password)>15)) 
           { 
              echo 'wrongdata'; 
           } 
           else
           {

     
         
 // ������������ � ����
    include ("../includes/db_connect.php");// ���� bd.php ������ ���� � ��� �� �����, ��� � ��� ���������, ���� ��� �� ���, �� ������ �������� ���� 
 // �������� �� ������������� ������������ � ����� �� �������
    $result = mysql_query("SELECT id FROM reg_user WHERE login='$login'");
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
    echo 'haveuser';
    }
    else
    {
 // ���� ������ ���, �� ��������� ������
    $result2 = mysql_query ("INSERT INTO reg_user (login,password,email) VALUES('$login','$password','$email')");
    // ���������, ���� �� ������
    if ($result2=='TRUE')
    {
        
    echo 'yes_reg';
  

    }
 else {
    echo 'no_reg';
    }
    }
    }
    }
    ?>