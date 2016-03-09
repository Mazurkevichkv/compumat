<?php
    if (isset($_POST['reg_login'])) { $login = $_POST['reg_login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['reg_pass'])) { $password=$_POST['reg_pass']; if ($password =='') { unset($password);} }
    if (isset($_POST['reg_email'])) { $email=$_POST['reg_email']; if ($email =='') { unset($email);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
 if (empty($login) or empty($password) or empty($email) ) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    echo 'noinfo'; 
    }
    else{
        //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
 //удал€ем лишние пробелы
    $login = str_replace(" ","",$login);
    $password = str_replace(" ","",$password);
    $email = str_replace(" ","",$email);
 if( !(preg_match("|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i", $email)) or (strlen($login)<5) or (strlen($password)<5) or (strlen($login)>15) or (strlen($password)>15)) 
           { 
              echo 'wrongdata'; 
           } 
           else
           {

     
         
 // подключаемс€ к базе
    include ("../includes/db_connect.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользовател€ с таким же логином
    $result = mysql_query("SELECT id FROM reg_user WHERE login='$login'");
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
    echo 'haveuser';
    }
    else
    {
 // если такого нет, то сохран€ем данные
    $result2 = mysql_query ("INSERT INTO reg_user (login,password,email) VALUES('$login','$password','$email')");
    // ѕровер€ем, есть ли ошибки
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