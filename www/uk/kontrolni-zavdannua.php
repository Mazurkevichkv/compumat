<?php
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
            <p>Контрольні роботи</p>
            </div>
             <?php include("includes/block-search.php"); ?>
    </div>
    
    <div id="block-content">
    <p style="text-align: center;"> <span style="font-size:16px;"><span style="font-family:times new roman,times,serif;"><span style="font-size:18px;"><strong>3-й семестр</strong></span></span></span></p> <p style="text-align: center;"> <strong><span style="font-size:16px;"><span style="font-family:times new roman,times,serif;">Контрольна робота 1. Теорія наближень. Обробка експериментальних даних. ( оцінка - до 5 балів). Індивідуальні завдання будуть надані викладачем. ( Ліміт часу - 1,5 години)</span></span></strong></p> <p> <span style="font-size:16px;"><span style="font-family:times new roman,times,serif;">&nbsp; Завдання 1. Побудувати поліном Лагранжа для заданої таблиці.&nbsp; ( оцінка до 1 балу)</span></span></p> <p> <span style="font-size:16px;"><span style="font-family:times new roman,times,serif;">&nbsp; Завдання 2. Побудувати поліном Ньютона для заданої таблиці. ( до 2-х балів)</span></span></p> <div> <span style="font-size:16px;"><span style="font-family:times new roman,times,serif;">&nbsp; Завдання 3. Побудувати апроксимацію за методом МНК, Знайти сумму квадратів відхилень у вузлах. Форму рівняння регресії вибрати самостійно, виходячи з вигляду табличної функції ( до 2-х балів)</span></span></div> <p> &nbsp;</p> <p style="text-align: center;"> <strong><span style="font-size:16px;"><span style="font-family:times new roman,times,serif;">Контрольна робота 2.&nbsp;Інтегрування, нелінійні рівняння та системи.&nbsp;( Ліміт часу - 1,5 години)</span></span></strong></p> <p> <span style="font-size:16px;"><span style="font-family:times new roman,times,serif;">&nbsp; Завдання 1. Знайти значення інтегралу вказаним методом . ( 1 бал)</span></span></p> <p> <span style="font-size:16px;"><span style="font-family:times new roman,times,serif;">&nbsp; Завдання 2. Знайти корені нелінійного рівняння вказаним методом. ( 2 бали)</span></span></p> <p> <span style="font-size:16px;"><span style="font-family:times new roman,times,serif;">&nbsp; Завдання 3. Знайти розв&#39;язок системи нелінійних рівнянь методом Ньютона ( 2 бали)</span></span></p> <p> &nbsp;</p> <p style="text-align: center;"> <strong><span style="font-size:16px;"><span style="font-family:times new roman,times,serif;">Контрольна робота 3. Лінійна алгебра. Системи лінійних рівнянь.&nbsp;( Ліміт часу - 1,5 години)</span></span></strong></p> <p> <span style="font-size:16px;"><span style="font-family:times new roman,times,serif;">&nbsp; Завдання 1. Розв&#39;язати систему лінійних рівнянь методом Гауса.</span></span></p> <p> <span style="font-size:16px;"><span style="font-family:times new roman,times,serif;">&nbsp; Завдання 2. Розв&#39;язати систему лінійних рівнянь методом LU - декомпозиції.</span></span></p> <div> <span style="font-size:16px;"><span style="font-family:times new roman,times,serif;">&nbsp; Завдання 3. Розв&#39;язати систему лінійних рівнянь методом Зейделя, попередньо нормалізувавши систему ( дві ітерації).</span></span></div> <div> &nbsp;</div>

    </div>
    
    <div id="block-right">
      <?php include("includes/block-category.php");?>
    </div>
    
    <?php include("includes/block-footer.php");?>
    
  </div>
</body>
