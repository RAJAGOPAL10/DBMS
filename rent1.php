<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>RENT DETAILS</title>
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
    margin-top: 18px;
    margin-right: 18px;
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
    background: skyblue;#0066ff
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
	color: white;
	text-decoration: none;
	padding: 5px 20px;
	font-size: 20px;
	
}
li.t a{
	border: 1px solid black;
	color: black;
	border-radius: 20px;
	background-color: #f0f0f0;
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
	margin-left: 20px;
	margin-top: 30px;
	font-size: 30px;
}
.i{
	margin-left: 100px;
	margin-top: 15px;
	font-size: 20px;
}


.side_nav li:hover a{
	border: 1px solid black;
	color: black;
	border-radius: 20px;
	background-color: #f0f0f0;
	margin-left: 20px;
}
table {
   border-collapse: collapse;
   width: 98%;
   color:black;
   font-family: monospace;
   font-size: 18px;
   text-align: left;
   margin-left: 10px;
   margin-top: 20px;
   margin-right: 10px;
     } 
  th {
   background-color: #588c7e;
   color: white;
   font-size: 22px;
   padding-left: 10px;
   padding-top: 8px;
	padding-bottom: 8px;
    }
  tr:nth-child(even) {
  	background-color: #E6E6FA;
  	}
  tr:nth-child(odd) {
  	background-color: #FFF0F5;

}
td{
	padding-left: 10px;
	padding-top: 4px;
	padding-bottom: 4px;
}
	</style>
	<script type="text/javascript">
		function display() {
			alert(' Successfully Signed Out!!!');
			window.location.href='admin_login.html';
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
			<h1 style="color: red;"><?php echo $_SESSION['admin']; ?></h1>
			
		</div>
		<div>
			<ul class="side_nav">
				<p style="padding-left: 20px; font-size: 25px;">Quick links</p>
				<li><a href="admin.php">Profile</a></li>
				<li><a href="acomp1.php">Service Requests</a></li>
				<li class="t"><a href="#">Rent details</a></li>
				<li><a href="apart_man1.php">Apartment Management</a></li>
				<li><a href="tenant_man1.php">Tenant Management</a></li>
				<li><a href="#" onclick="display()">Sign Out</a></li>
				
			</ul>
		</div>
	</nav> 
	<article>
		<p class="e">Transactions</p><br>
  		<div>
  			<table>
 				<tr>
  				<th>Trans_Id</th> 
  				<th>Tenant_Id</th>
  				<th>Amount</th>
  				<th>Trans_Date</th>
  				<th>Bank Name</th>
 				</tr>
 				<?php
					$conn = mysqli_connect("localhost", "root", "", "project");
  					// Check connection
  					if ($conn->connect_error) {
   						die("Connection failed: " . $conn->connect_error);
  					} 
  					
  					$conn1 = new PDO("mysql:host=localhost; dbname=project",'root',"");

         			$sql = "CALL payment()";
         			$result = $conn1->prepare($sql);
         			$result->setFetchMode(PDO::FETCH_ASSOC);
         			$result->execute();

   					while($row = $result->fetch()) {
    				echo "<tr> <td>" .  $row["trans_id"] . "</td><td>" . $row["email"] . "</td><td>" . $row["amt"] . "</td><td>" . $row["t_date"] . "</td><td>" .  $row["bank_name"] . "</td></tr>";
					}
					echo "</table>";
					
					$conn->close();
				?>
			</table>
  		</div>
	</article>
	
</body>
</html>