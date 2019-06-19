<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>USER_DETAILS</title>
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
    height: 640px; 
    border-radius: 10px;

}

nav {
    float: left;
    width: 21%;
    height: 650px;
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
	margin-left: 20px;
	margin-top: 30px;
	font-size: 30px;
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
				<li><a href="user.php">Profile</a></li>
				<li><a href="#" onclick="display()">Phone Numbers</a></li>
				<li><a href="service.html">Submit Service Request</a></li>
				<li><a href="payment1.php">Rent Payment</a></li>
				<li class="t"><a href="#">View details</a></li>
				<li><a href="#" onclick="display1()">Sign Out</a></li>
				
			</ul>
		</div>
	</nav> 
	<article>
		<div class="ap">
			<p class="p" style="font-size: 35px; margin-left: 50px; margin-top: 50px; text-align: left; color: red;">Choose Action</p>
			<select class="action" onchange="java_script_:show(this.options[this.selectedIndex].value)" name="" style="margin-left: 50px; margin-top: 10px;">
				<option value="">Select an option</option>
				<option value="vp">View payments</option>
				<option value="var">View active Requests</option>
				<option value="vr">View all Requests</option>
			</select>
		<br>
		<div id="hiddenDiv3" style="display:none; margin-right: 0px; padding-right: 0px;">
		<p class="e">Requests </p><br>
  		<div>
  			<table>
 				<tr>
 				<th>C_Id</th>
  				<th>Category</th>
  				<th>Location</th>
  				<th>Issue_cause</th>
  				<th>Date</th>
  				<th>Status</th>
 				</tr>
 				<?php
					$conn = mysqli_connect("localhost", "root", "", "project");
  					// Check connection
  					if ($conn->connect_error) {
   						die("Connection failed: " . $conn->connect_error);
  					} 
  					$name = $_SESSION['user'];
  					$sql1 = "SELECT email FROM tenant WHERE name = '".$name."' limit 1";
      				$result1 = mysqli_query($conn,$sql1);
      				$row1 = $result1->fetch_assoc();
      				$email = $row1["email"];

  					$sql = "SELECT * FROM complaint WHERE tenant_id= '".$email."' ORDER BY date1";
  					$result = $conn->query($sql);
  					if ($result->num_rows > 0) {
   					// output data of each row
   					while($row = $result->fetch_assoc()) {
    				echo "<tr><td>" .  $row["complaint_id"] . "</td><td>" . $row["category"] . "</td><td>" . $row["location"] . "</td><td>" . $row["issue_cause"] . "</td><td>" .  $row["date1"] . "</td><td>" .  $row["status"]. "</td></tr>";
					}
					echo "</table>";
					} else { echo "0 results"; }
					$conn->close();
				?>
			</table>
  		</div>
  		</div>
  		<div id="hiddenDiv1" style="display:none;" class="app">
			<p class="e">Transactions</p><br>
  		<div>
  			<table>
 				<tr>
  				<th>Trans_Id</th>
  				<th>Amount</th>
  				<th>Trans_Date</th>
  				<th>Bank_Name</th>
 				</tr>
 				<?php
					$conn = mysqli_connect("localhost", "root", "", "project");
  					// Check connection
  					if ($conn->connect_error) {
   						die("Connection failed: " . $conn->connect_error);
  					} 
  					$name = $_SESSION['user'];
  					$pass= $_SESSION['pass'];
  					$sql1 = "SELECT email FROM tenant WHERE name = '".$name."' and password = '".$pass."' limit 1";
      				$result1 = mysqli_query($conn,$sql1);
      				$row1 = $result1->fetch_assoc();
      				$email = $row1["email"];

  					$conn = mysqli_connect("localhost", "root", "", "project");
  					// Check connection
  					if ($conn->connect_error) {
   						die("Connection failed: " . $conn->connect_error);
  					} 
  					$conn1 = new PDO("mysql:host=localhost; dbname=project",'root',"");

         			$sql = "CALL rent('".$email."')";
         			$result = $conn1->prepare($sql);
         			$result->setFetchMode(PDO::FETCH_ASSOC);
         			$result->execute();

   					while($row = $result->fetch()) {
    				echo "<tr> <td>" .  $row["trans_id"] . "</td><td>" . $row["amt"] . "</td><td>" . $row["t_date"] . "</td><td>" .  $row["bank_name"] . "</td></tr>";
					}
					echo "</table>";
					
					$conn->close();
				?>
			</table>
  		</div>
		</div>
		<div id="hiddenDiv2" style="display:none; margin-right: 0px; padding-right: 0px;">
		<p class="e">Requests </p><br>
  		<div>
  			<table>
 				<tr>
 				<th>C_Id</th>
  				<th>Category</th>
  				<th>Location</th>
  				<th>Issue_cause</th>
  				<th>Date</th>
 				</tr>
 				<?php
					$conn = mysqli_connect("localhost", "root", "", "project");
  					// Check connection
  					if ($conn->connect_error) {
   						die("Connection failed: " . $conn->connect_error);
  					} 
  					$name = $_SESSION['user'];
  					$sql1 = "SELECT email FROM tenant WHERE name = '".$name."' limit 1";
      				$result1 = mysqli_query($conn,$sql1);
      				$row1 = $result1->fetch_assoc();
      				$email = $row1["email"];


  					$sql = "SELECT * FROM complaint WHERE status = 'open' and tenant_id= '".$email."' ORDER BY date1";
  					$result = $conn->query($sql);
  					if ($result->num_rows > 0) {
   					// output data of each row
   					while($row = $result->fetch_assoc()) {
    				echo "<tr><td>" .  $row["complaint_id"] . "</td><td>" . $row["category"] . "</td><td>" . $row["location"] . "</td><td>" . $row["issue_cause"] . "</td><td>" .  $row["date1"] . "</td></tr>";
					}
					echo "</table>";
					} else { echo "0 results"; }
					$conn->close();
				?>
			</table>
  		</div>
  		</div>
  	</div>
	</article>
	<script>
		function show(aval) {
        if (aval == "vp") {
          hiddenDiv1.style.display='block';
          hiddenDiv2.style.display='none';
          hiddenDiv3.style.display='none';
          Form.fileURL.focus();
        } 
        if (aval == "var") {
          hiddenDiv1.style.display='none';
          hiddenDiv2.style.display='block';
          hiddenDiv3.style.display='none';
          Form.fileURL.focus();
        }
        else{
          hiddenDiv1.style.display='none';
          hiddenDiv2.style.display='none';
          hiddenDiv3.style.display='block';
          Form.fileURL.focus();
        }
    }
	</script>
</body>
</html>