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
            <p>�������</p>
            </div>
             <?php include("includes/block-search.php"); ?>
    </div>
    
    <div id="block-content">
        <h4>��� �������� �������, ���� ���� ��������, ����� ������ � ������� <a class="googleDoc" href="https://docs.google.com/spreadsheets/d/1B0oUKYENPMczGde7ovTxOyC48b2ekWJhPlBFzxYm6cc/edit?usp=sharing">GoogleDoc</a></h4>
       
        <h4>����������� ��������� ��� ������� �� ������ ���, ���������� ������� ����� <br>( �������� ������� ������, �� �� ��� ��������)
       </h4>
      
        <?php include("includes/rate.php"); ?>
    </div>
    
    <div id="block-right">
      <?php include("includes/block-category.php");?>
    </div>
    
    <?php include("includes/block-footer.php");?>
    
  </div>
</body>