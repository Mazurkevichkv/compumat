<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //������� ��������� ������������� ����� � ���������� $login, ���� �� ������, �� ���������� ����������
    if (isset($_POST['pass'])) { $password=$_POST['pass']; if ($password =='') { unset($password);} }
    //������� ��������� ������������� ������ � ���������� $password, ���� �� ������, �� ���������� ����������
if (empty($login) or empty($password)) //���� ������������ �� ���� ����� ��� ������, �� ������ ������ � ������������� ������
    {
    exit ("�� ����� �� ��� ����������, ��������� ����� � ��������� ��� ����!");
    }
    //���� ����� � ������ �������,�� ������������ ��, ����� ���� � ������� �� ��������, ���� �� ��� ���� ����� ������
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
//������� ������ �������
    $login = trim($login);
    $password = trim($password);
	include('db_connect.php');

    if ($_POST["rememberme"] == "yes")
    {

            setcookie('rememberme',$login.'+'.$password,time()+3600*24*31, "/");

    }
    
       
   $result = mysql_query("SELECT * FROM reg_user WHERE (login = '$login' OR email = '$login') AND password = '$password'");
If (mysql_num_rows($result) > 0)
{
    $row = mysql_fetch_array($result);
    session_start();
    $_SESSION['auth'] = "yes_auth"; 
    $_SESSION['auth-pass'] = $row["password"];
    $_SESSION['auth-login'] = $row["login"];
    $_SESSION['auth-email'] = $row["email"];
    echo 'yes_auth';

}else
{
    echo 'no_auth';
}  
} 

?>