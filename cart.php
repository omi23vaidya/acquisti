<?php

if ($_GET['fn'] == "addcart")
     if (!empty($_GET["name"]))
			$pname=($_GET["name"]);
		$cost=($_GET["price"]);
			
            addcart($pname,$cost);
				function addcart($name,$price)
				{
					
					mysql_connect("localhost", "root", "") or die(mysql_error());
					mysql_select_db("acquisti") or die(mysql_error());
					mysql_query("insert into cart values('$name','$price')")
					or die(mysql_error('No Records Found'));
					echo "inserted";
				}
		
			header('Location: catalogue.php');
		
?>