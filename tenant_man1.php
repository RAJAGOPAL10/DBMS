<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>TENANT MANAGEMENT</title>
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

.side_nav li:hover a{
	border: 1px solid black;
	color: black;
	border-radius: 20px;
	background-color: #f0f0f0;
	margin-left: 20px;
}
.ap{
	float: left;
	list-style: none;
	margin-top: 50px;
	margin-left: 50px;
	padding-left: 40px;

}
.app{
	float: left;
	list-style: none;
	margin-top: 30px;
	padding-left: 30px;

}
.action{
	float: left;
	list-style: none;
	margin-top: 10px;
	padding-left: 30px;
}
.p{
	font-size: 35px;
	text-align: left;
	color: red;
}
.p1{
	font-size: 30px;
	text-align: left;
	color: black;
}
.t1{
	font-size: 25px;
	margin-top: 15px;
	margin-left: 15px;
}


.ap input[type="submit"]
{
	border: none;
	outline: none;
	height: 40px;
	background: #fb2525;
	color: white;
	font-size: 18px;
	border-radius: 20px;
}

.ap input[type="submit"]:hover
{
	cursor: pointer;
	background: #ffc107;
	color: black;
}
table {
   border-collapse: collapse;
   width: 100%;
   color:black;
   font-family: monospace;
   font-size: 18px;
   text-align: left;
   margin-left: 0px;
   margin-top: 20px;
   margin-right: 0px;
     } 
  th {
   background-color: #588c7e;
   color: white;
   font-size: 20px;
   padding-left: 10px;
   padding-top: 8px;
	padding-bottom: 8px;
    }
  tr:nth-child(even) {
  	background-color: lightgrey;
  	}
  tr:nth-child(odd) {
  	background-color: #E6E6FA;#E6E6FA
}
td{
	padding-left: 10px;
	padding-right: 10px;
	padding-top: 4px;
	padding-bottom: 4px;
}
.e{
	margin-left: 0px;
	margin-top: 30px;
	font-size: 30px;
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
				<li><a href="rent1.php">Rent details</a></li>
				<li><a href="apart_man1.php">Apartment Management</a></li>
				<li class="t"><a href="#">Tenant Management</a></li>
				<li><a href="#" onclick="display()">Sign Out</a></li>
				
			</ul>
		</div>
	</nav> 
	<article>
		<form action="tenant_man.php" method="POST">
		<div>
		<div class="ap">
			<p class="p">Action to be performed</p>
			<select class="action" onchange="java_script_:show(this.options[this.selectedIndex].value)" name="">
				<option value="">Select an option</option>
				<option value="view">View tenants</option>
				<option value="Add">Add tenant</option>
				<option value="Remove">Remove tenant</option>
			</select>
		<br>
		<div id="hiddenDiv1" style="display:none;" class="app">
			<p style=" margin-top: 15px;" class="p1">Enter details of new tenant</p>
			<p class="t1"> Name</p>
				<input type="text" name="name" placeholder="Enter name" style="margin-top: 15px; margin-left: 20px; padding: 5px 5px 5px 5px;">
					

  			<p class="t1">Email ID</p>
				<input type="Email" name="email" placeholder="Enter email" style=" margin-top: 15px;margin-left: 20px;text-align: left; padding: 5px 5px 5px 5px;">
			
			<p class="t1">Apartment ID</p>
				<input type="text" name="a_id" placeholder="XXXX" style="margin-top: 15px; margin-left: 20px; padding: 5px 5px 5px 5px;">

			<p class="t1">Rent Amount</p>
				<input type="text" name="rent" placeholder="Enter rent" style=" margin-top: 15px;margin-left: 20px;text-align: left; padding: 5px 5px 5px 5px;">
				
			<p></p>
			<input type="submit" name="" value="Submit" style=" margin-left: 20px; padding-left: 40px; padding-right: 40px; margin-top: 20px;">

		</div>
			<div id="hiddenDiv2" style="display:none;" class="app">
			<p style=" margin-top: 15px;" class="p1">Enter details of Tenant to remove</p>
			<p class="t1"> Name</p>
				<input type="text" name="name1" placeholder="Enter ID" style="margin-top: 15px; margin-left: 20px; padding: 5px 5px 5px 5px;">
					

  			<p class="t1">Email ID</p>
				<input type="Email" name="email1" placeholder="Enter address" style=" margin-top: 15px;margin-left: 20px;text-align: left; padding: 5px 5px 5px 5px;">
			
			

			<p class="t1">Apartment ID</p>
				<input type="text" name="a_id1" placeholder="Enter amount" style="margin-top: 15px; margin-left: 20px; padding: 5px 5px 5px 5px;">
				<p></p>
			<input type="submit" name="" value="Submit" style=" margin-left: 20px; padding-left: 40px; padding-right: 40px; margin-top: 20px;">

		</div>

		<div id="hiddenDiv3" style="display:none; margin-right: 0px; padding-right: 0px;">
		<p class="e">Tenants </p><br>
  		<div>
  			<table>
 				<tr>
  				<th>Name</th>
  				<th>Tenant_Id</th> 
  				<th>Password</th>
  				<th>Apartment ID</th>
  				<th>Phone</th>
  				<th>Rent</th>
 				</tr>
 				<?php
					$conn = mysqli_connect("localhost", "root", "", "project");
  					// Check connection
  					if ($conn->connect_error) {
   						die("Connection failed: " . $conn->connect_error);
  					} 
  					$sql = "SELECT * FROM tenant  ";
  					$result = $conn->query($sql);
  					if ($result->num_rows > 0) {
   					// output data of each row
   					while($row = $result->fetch_assoc()) {
    				echo "<tr><td>" .  $row["name"] . "</td><td>" .  $row["email"] . "</td><td>" .  $row["password"] . "</td><td>" . $row["apart_id"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["rent"] . "</td></tr>";
					}
					echo "</table>";
					} else { echo "0 results"; }
					$conn->close();
				?>
			</table>
  		</div>
</div>



		</div>
		</div>
		</form>
	</article>
	<script>
		function show(aval) {
        if (aval == "Add") {
          hiddenDiv1.style.display='block';
          hiddenDiv2.style.display='none';
          hiddenDiv3.style.display='none';
          Form.fileURL.focus();
        } 
        if (aval == "Remove"){
          hiddenDiv2.style.display='block';
          hiddenDiv1.style.display='none';
          hiddenDiv3.style.display='none';
          Form.fileURL.focus();
        }
        else{
          hiddenDiv3.style.display='block';
          hiddenDiv1.style.display='none';
          hiddenDiv2.style.display='none';
          Form.fileURL.focus();
        }
    }
	</script>
</body>
</html>