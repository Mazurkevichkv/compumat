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
	<title>������ ��������</title>
</head>
<body>
  <div id="block-body">
  
    <?php include("includes/block-header.php");?>
    <div id="block-header2">
            <div id="block-content-title">
                 <p>������ �������</p>
            </div>
            <?php include("includes/block-search.php"); ?>
    </div>

    
    <div id="block-content">
    
<div id="userful-resurses">
        <a href="http://www.wolframalpha-ru.com/">Wolframalpha-����������, ����������, ����� ������<img src="/images/kr_wolframalfa.png"></a>
        <a href="http://www.wolfram.com/training/courses/">����� ������ Wolfram, ���������� ������ Mathematica, System Modeler �� ALFA<img src="/images/kr_wolfram.png"></a>
        <a href="http://matlab.exponenta.ru/simulink/book1/index.php">Simulink - ���������� ����������� ��������� ������<img src="/images/kr_matlab1.png"></a>
        <a href="http://www.maplesoft.com/applications/view.aspx?SID=1467&amp;view=html"><br>����� ������������� ����������� Maple<img src="/images/kr_maplesoft.png"></a>
        <a href="http://www.proprofs.com/quiz-school/story.php?title=technicalengineering-english-test">����� � ��������� ���� ��� �������� �� �������� ����������<img src="/images/kr_prorpofs.png"></a>
</div>


</body></html>
          
  
    </div>
	
    
    <div id="block-right">
      <?php include("includes/block-category.php");?>
    </div>
    
    <?php include("includes/block-footer.php");?>
    
  </div>
</body>