<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['pass'])) { $password=$_POST['pass']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены,то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
//удаляем лишние пробелы
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