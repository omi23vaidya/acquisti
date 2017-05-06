<?php
	session_start();
	
	mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_select_db("acquisti") or die(mysql_error());
	$perform=mysql_query("truncate table cart")
	or die(mysql_error('error'));
	
	session_destroy();
	header('Location: acquisti.php');
?>