<?php
	session_start();
?>

<!DOCTYPE>
<html>
	<head>
		<title> Acquisti </title>
		<link rel="stylesheet" type="text/css" href="new.css">
		<link rel="stylesheet" type="text/css" href="result.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		
	</head>
	
	<body>
		<div class="title">
			<img src="img/title.png" height="15%">
		</div>
		<div class="title1">
			<img src="img/title1.png" height="15%">
		</div>
		<form class="searchbox_demo" action="https://www.google.com/cse">
			<input name="q" type="text" size="20" class="tb1"/>
			<input type="submit" name="sa" value="Search" class="sa"/>
		</form>
		<script type="text/javascript" src="https%3A%2F%2Fcse.google.com%2Fcse/tools/onthefly?form=searchbox_demo&lang="></script>
		<div class="homed">
			<div class="home">
				<center><b><h1 style="font-size:120%"><a href="acquisti.php">Home</a></h1></b></center>
			</div>
			<div class="catalogue">
				<center><b><h1 style="font-size:120%"><a href="catalogue.php">Catalogue</a></h1></b></center>
			</div>
			<div class="about">
				<center><b><h1 style="font-size:120%"><a href="">About Us</a></h1></b></center>
			</div>
			<div class="contact">
				<center><b><h1 style="font-size:120%"><a href="">Contact Us</a></h1></b></center>
			</div>
			<div id="sign">
				<center><b><h1 style="font-size:120%"><a href="sign_up.html">New Sign Up</a></h1></b></center>
			</div>
		<br>
		</div>

		<!--Categories-->
		<div class="filter">
			<div class="filter1">
				<center><h3><br>Categories</center></h3>
			</div>
			<form action="" method="post">
				<br>
				<label><input type="radio" name="category" value="rings" class="radio" checked>Rings</label><br><br>
				<label><input type="radio" name="category" value="earrings">Earrings</label><br><br>
				<label><input type="radio" name="category" value="pendant">Pendant</label><br><br></center>
				<br><input class="filter" type="submit" value="Search" name="submit">
			</form>
			<?php
				if (isset($_POST['submit'])) 
				{
					if(isset($_POST['category']))
					{
						$type = $_POST['category'];
					}
				}
				else
				{
					$type="rings";
				}
			?>
		</div>
		
		<!--Display items-->
		<div class="deal">
			<?php
			
			
				mysql_connect("localhost", "root", "") or die(mysql_error());
				mysql_select_db("acquisti") or die(mysql_error());
				$data = mysql_query("SELECT * FROM products WHERE type='$type' ORDER BY id desc")
				or die(mysql_error('No Records Found'));
				while($info = mysql_fetch_array( $data ))
				{
					$name = $info['name'];
					$imageFile = $info['picture'];
					$price = $info['price'];
			?>	
			<div class="result">
				<img src="<?php echo $imageFile; ?>" class="imgres">
				<a href='cart.php?fn=addcart&name=<?php echo $name; ?>&price=<?php echo $price; ?>' ><input type="submit" value="add" class="add" name="add"></a>
				<h3><center><?php echo $name; ?></h3></center>
				<h4><center><?php echo "Rs. ".$price; ?></h4></center>
			</div>
			<?php
				}
			?>
		</div>
	
		<div class="new_log">
			<div id="new_log1">
			<center><h3><br>Cart</center></h3>
			</div>
			<div id="panel1">
			<?php
				mysql_connect("localhost", "root", "") or die(mysql_error());
				mysql_select_db("acquisti") or die(mysql_error());
				$data = mysql_query("SELECT * FROM cart")
				or die(mysql_error('No Records Found'));
				?>
			<table cellpadding="5">	
				<?php while($info = mysql_fetch_array( $data ))
				{
					$name = $info['name'];
					$price= $info['price'];
			?>	
			
				<tr>
					<td><?php echo $name;?></td>
					<td><?php echo $price;?></td>
				</tr>
			
			
			<?php
			}
			?>
			</table>
			<br>
			<br>
				<?php
					mysql_connect("localhost", "root", "") or die(mysql_error());
					mysql_select_db("acquisti") or die(mysql_error());
					$data1 = mysql_query("SELECT sum(price) as total from cart")
					or die(mysql_error('No Records Found'));
					while($info = mysql_fetch_array( $data1 ))
				{?>
					<center><b><h3>Total: &nbsp&nbsp&nbsp&nbsp</b>Rs. 
					
					<?php echo $info['total'];
					$message=$info['total'];
					$_SESSION['message'] = $message;
				}
					?><br></center></h3>
				
				<center><a href="pay.php"><input type="submit" value="checkout" class="add"></input></a></center>
				<br>
			</div>
		</div>
		<div id="error">
			<?php
				echo $_SESSION['uname'];
			?>
			&nbsp&nbsp&nbsp&nbsp;
			<a href="logout.php"><img src="img/stop.png" width="8%" height="50%;" title="Logout"></a>
		</div>
		<div class="footer">
			<div class="contact1">
				<center><b><h1 style="font-size:120%"><a href="">Contact Us</a></h1></b></center>
			</div>
			<div class="terms">
				<center><b><h1 style="font-size:120%"><a href="">Terms and Conditions</a></h1></b></center>
			</div>
			<div class="pay">
				<center><b><h1 style="font-size:120%"><a href='pay.php'>Payment Methods</a></h1></b></center>
			</div>
			<a href="https://twitter.com" class="twitter" target="blank">
				<img alt="Twitter" src="img/twitter.jpg" width="36" height="36" />
			</a>
			<a href="https://www.facebook.com" class="fb" target="blank">
				<img alt="Facebook" src="img/fb.png" width="35" height="35" />
			</a>
		</div>
	</body>
</html>