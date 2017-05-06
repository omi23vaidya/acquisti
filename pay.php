<?php
	session_start();
?>

<!DOCTYPE>
<html>
<head>
	<title> Payment </title>
	<link rel="stylesheet" type="text/css" href="pay.css" >
	<link rel="stylesheet" type="text/css" href="new.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script> 
		$(document).ready(function(){
		$(".pay_opta").click(function(){
		$(".cod").slideToggle("slow");
		});
		});
	</script>
	<script> 
		$(document).ready(function(){
		$(".pay_optb").click(function(){
		$(".net_bank").slideToggle("slow");
		});
		});
	</script>
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
			    <ul class="dropdown-menu">
					<li><a href=""><h3><center>Earrings</center></h3></a></li>
					<li><a href=""><h3><center>Pendant</center></a></li>
					<li><a href=""><h3><center>Rings</center></a></li>
				</ul>
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

	<div class="pay_1">
		<div class="name_pay">
			<center><h3><br>Payment Options</center></h3>
		</div>
		<div>
			<div class="pay_opta"><a href="#">&nbsp&nbsp&nbspCash on Delivery</a></div>
			<div class="pay_optb"><a href="#">&nbsp&nbsp&nbspNet Banking</a></div>		
		</div>
	</div>
	
	<!--Payment-->
	<div class="pay_des">
		<!--COD-->
		<div class="cod">
			Please make sure the delivery address is right.
			<br><br>
			<input type="submit" value="Proceed" class="cod_but">
		</div>
		<!--Net banking-->
		<div class="net_bank">
			Select your Net Banking service Provider
			<ul style="list-style-type:circle">
				<li><a href="https://netbanking.hdfcbank.com/netbanking/">HDFC Bank</a></li>
				<br><li><a href="http://www.icicibank.com/Personal-Banking/insta-banking/internet-banking/index.page">ICICI Bank</a></li>
			</ul>  
		</div>
	</div>
	
	<!--Address-->
	<div class="new_log">
		<div id="new_log1">
			<h3><br><center>Delivery Address</h3></center>
		</div>
		<form>
			<table class="tab_pay">
				<tr>
					<td>Flat:</td>
					<td><input type="text" class="flat"></td>
				</tr>
				<tr>
					<td>Building:</td>
					<td><input type="text" class="buil"></td>
				</tr>
				<tr>
					<td>Lane:</td>
					<td><input type="text" class="lane"></td>
				</tr>
				<tr>
					<td>City:</td>
					<td><input type="text" class="city"></td>
				</tr>
				<tr>
					<td>Pin:</td>
					<td><input type="text" class="pin"></td>
				</tr>
			</table>	
			<br><input type="submit" value="Save" class="add_but">
		</form>
		<div id="total"><center>
		<h3>Total: Rs.
			<?php
				echo $_SESSION['message'];
			?>
		</center></div></h3>
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
			<center><b><h1 style="font-size:120%"><a href="pay.php">Payment Methods</a></h1></b></center>
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