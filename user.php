<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>USER</title>
	<script type="text/javascript">
		function display() {
			alert(' PHONE NUMBERS \n Maintennance Requests - +919740008649 \n Emergency Maintenance After Hours - +919611682248 \n Local Police - 100');
		}

	</script>
	<style type="text/css">
	*{
	margin: 0;
	padding: 0;
}

h2{
	font-size: 40px;
	text-align: left;
	color: white;
	padding-top: 15px;
	padding-left: 75px;
	padding-bottom: 15px;
	
}
header{
	height: 100vh;
	background-size: cover;
	background-position: center;
}

.main_nav{
	float: right;
	list-style: none;
	margin-top: 30px;
	padding-right: 100px;

}

.main_nav li{
	display: inline-block;
}

.main_nav li a{
	color: white;
	text-decoration: none;
	padding: 5px 20px;
	font-size: 15px;
	
}

.main_nav li:hover a{
	border: 2px solid white;
}

.logo img{
	padding-top: 10px;
	padding-left: 10px;
	width:45px;
	height:auto;
	float:left;
}

article {
    float: right;
    width: 76%;
    background-color: #f1f1f1; 
    margin: 18px 15px 0px 15px;
    height: 650px; 
    border-radius: 10px;

}

nav {
    float: left;
    width: 21%;
    height: 660px;
    margin-top: 10px;
    margin-bottom: 10px;
    margin-left: 10px;
    border-radius: 8px;
    background: #0f4275;
}
.avatar{
	width: 100px;
	height:100px;
	border-radius: 50%;
	position: center;
	top: 50px;
	padding: 20px 90px;
	margin-top: 50px;
}


h1{
	font-size: 30px;
	text-align: center;
	color: white;
}


.side_nav{
	float: left;
	list-style: none;
	margin-top: 30px;
	padding-left: 30px;

}


.side_nav li{
	display: block;
	margin-top: 30px;
}

.side_nav li a{
	color: red;
	text-decoration: none;
	padding: 5px 20px;
	font-size: 20px;
	
}

.side_nav li:hover a{
	border: 2px solid red;
	color: white;
	border-radius: 20px;
	margin-left: 20px;
}
li.t a{
	border: 2px solid red;
	color: white;
	border-radius: 20px;
	margin-left: 20px;
}
		h3{
	font-size: 50px;
	margin: 40px 100px 60px 100px;
	padding-top: 100px;
	padding-left: 200px;
	color: green;
}
.e{
	margin-left: 300px;
	font-size: 30px;
}
	</style>
	<script type="text/javascript">
		function display1() {
			alert(' Successfully Signed Out!!!');
			window.location.href='login.html';
			session_destroy();
		}

	</script>
</head>
<body style="background-color: lightgrey;">
	<header style="width: auto; height: 80px; background-color: #202020;">
		
		<div class="row">
			<div class="logo">
				<img src="logo.png" >
			</div>
			
			<ul class="main_nav">
				<li><a href="">HOME</a></li>
				<li><a href="">ABOUT</a></li>
				<li><a href="">CONTACT</a></li>
				<li><a href="">FAQ</a></li>
				
			</ul>
			
		</div>
		<div>
			<h2>ActiveBuilding</h2>
		</div>
	</header>
	<nav>
		<div>
			<img src="user.png" class="avatar">
			<h1 style="color: red;"><?php echo $_SESSION['user']; ?></h1>
			
		</div>
		<div>
			<ul class="side_nav">
				<p style="padding-left: 20px; font-size: 25px;">Quick links</p>
				<li class="t"><a href="#">Profile</a></li>
				<li><a href="#" onclick="display()">Phone Numbers</a></li>
				<li><a href="service.html">Submit Service Request</a></li>
				<li><a href="payment1.php">Rent Payment</a></li>
				<li><a href="urent1.php">View details</a></li>
				<li><a href="#" onclick="display1()">Sign Out</a></li>
				
			</ul>
		</div>
	</nav> 
	<article>
		<div class="q">
		<h3><i> Welcome <?php echo $_SESSION['user']; ?> !!! </i></h3>
		<p class="e"><i>Could You Do Me A Favor?<br>
			Put Your Left Hand Over Your Right Shoulder<br>
			Then Your Right Hand To Your Left Shoulder.<br>
			There ! I Have Just Given You A Morning Hug...<br>
			Have A Good Day !!!<i></p>
		</div>
	</article>
</body>
</html>