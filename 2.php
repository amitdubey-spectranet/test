<?php
session_start(); 
print_r($_POST);
if($_POST['submit1'] != "")
	$_SESSION['sub1'] = $_POST['submit1'];

if($_POST['submit2'] != "")
	$_SESSION['sub2'] = $_POST['submit2'];

echo $_SESSION['sub1']." ".$_SESSION['sub2'];
?>
<html>
<body>
<form name='frm1' method='post' action='2.php'>
<input type='submit' name='submit1' value='sub1'>
</form>
<form name='frm2' method='post' action='2.php'>
<input type='submit' name='submit2' value='sub2'>
</form>


