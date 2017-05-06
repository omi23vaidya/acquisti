<?php
	session_start();
?>

<!DOCTYPE>
<html>
	<head>
		<title> Acquisti </title>
		<link rel="stylesheet" type="text/css" href="new.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script> 
			$(document).ready(function(){
			$("#new_log1").click(function(){
			$("#panel").slideToggle("slow");
			});
			});
		</script>
	</head>
	<body onload = "startTimer()">
	
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
				<center><b><h1 style="font-size:120%"><a href="#">Home</a></h1></b></center>
			</div>
			<div class="catalogue">
				<center><b><h1 style="font-size:120%"><a href="catalogue.php">Catalogue</a></h1></b></center>
				    <!--<ul class="dropdown-menu">
						<li><a href=""><h3><center>Earrings</center></h3></a></li>
						<li><a href=""><h3><center>Pendant</center></a></li>
						<li><a href=""><h3><center>Rings</center></a></li>
					</ul>-->
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
		<div class="filter">
			<div class="filter1">
				<center><h3><br>Filter</center></h3>
			</div>
			<center><br><br>Sort By Price<br><br></center>
			<form action="">
				<input type="radio" name="price" value="first" class="radio">< Rs.5000<br>
				<input type="radio" name="price" value="second">< Rs.10000<br>
				<input type="radio" name="price" value="third">> Rs.10000<br>
				<br><input class="filter" type="submit" value="Filter!">
			</form>
		</div>
		<div class="deal">
			<script type = "text/javascript">
				function displayNextImage() 
				{
					x = (x === images.length - 1) ? 0 : x + 1;
					document.getElementById("img").src = images[x];
				}
		
				function displayPreviousImage() 
				{
					x = (x <= 0) ? images.length - 1 : x - 1;
					document.getElementById("img").src = images[x];
				}

				function startTimer() 
				{
					setInterval(displayNextImage, 4000);
				}

				var images = [], x = -1;
				images[0] = "img/offer1.png";
				images[1] = "img/offer2.png";
			</script>
			<img id="img" src="img/offer1.png">
		</div>
		
		<div class="new_log">
			<div id="new_log1">
			<center><h3><br>Log In</center></h3>
			</div>
			<div id="panel">
				<form class"signIn" method="post" action="">
					<br><b><center>Username:<br>
					<input type="text" name="uname"><br><br>
					<b>Password<br>
					<input type="password" name="upass">
					<br><br><br></center>
					<input type="submit" value="Submit" class="filter" name="submit1"></input>
				</form>
					
			</div>
		</div>
		<div id="error">
			<?php
			if(isset($_POST['submit1']))
			{
				$uname=$_POST['uname'];
				$_SESSION['uname']=$uname;
				$upass=$_POST['upass'];
				$_SESSION['upass']=$upass;
				if ($uname=="" || $upass=="")
				{
					echo"Enter username and password";
				}
				else
				{
					mysql_connect("localhost", "root", "") or die(mysql_error());
					mysql_select_db("acquisti")or die("cannot select DB");
					
					$suname = mysql_real_escape_string($uname);
					$supass = mysql_real_escape_string($upass);
					
					$data=mysql_query("SELECT * FROM login WHERE uname='$suname' AND upass='$supass'");
					if( mysql_num_rows($data) <= 0 )
						echo 'Invalid Username or password';
					else
						echo $_SESSION['uname'];
				}
			}
			else
			{
				$_SESSION['uname']='guest';
				echo $_SESSION['uname'];
			}
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