<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
  <link rel="stylesheet" type="text/css" href="service1.css">
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
  margin-top: 20px;
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

.row {
  display: -ms-flexbox; 
  display:flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
  margin: 0px;
}


.col-50 {
  -ms-flex: 40%; 
  flex: 20%;
}

.col-75 {
  -ms-flex: 40%; 
  flex: 20%;
}

.col-50,
.col-75 {
  padding: 0px;
}

.container {
  background-color: #f2f2f2;
  
  padding: 5px 20px 25px 30px;
  border: 1px solid lightgrey;
  border-radius: 0px;
}

input[type=text],[type = date] {
  width: 40%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
}

label {
  padding-left: 3px;
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  padding-left: 20px;
  padding-right: 20px;
  margin: 15px;
  margin-left: 30%;
  border: none;
  width: 25%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

nav {
    height: 640px;
  background-size: cover;
  background-position: center;
  margin-top: 10px;
    margin-bottom: 10px;
    margin-left: 10px;
    border-radius: 8px;
  background-color: #0f4275;
}
._nav{
  float: right;
  list-style: none;
  margin-top: 20px;
  padding-right: 100px;

}

._nav li{
  display: inline-block;
}

._nav li a{
  color: black;
  text-decoration: none;
  padding: 5px 20px;
  font-size: 15px;
  
}

._nav li:hover a{
  border: 2px solid black;
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
.avatar{
  width: 100px;
  height:100px;
  border-radius: 50%;
  position: center;
  top: 50px;
  padding: 20px 90px;
  margin-top: 40px;
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
  </style>
  <script type="text/javascript">
    function display1() {
      alert(' Successfully Signed Out!!!');
      window.location.href='login.html';
      session_destroy();
    }

  </script>
</head>
<body>
	<header style="width: auto; height: 80px; background-color: #202020;">
		
		<div class="row1">
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
        <li class="t"><a href="payment1.php">Rent Payment</a></li>
        <li><a href="urent1.php">View details</a></li>
        <li><a href="#" onclick="display1()">Sign Out</a></li>
        
      </ul>
    </div>
  </nav> 

	<div class="row" style="margin: 18px 15px 10px 15px">
  <div class="col-75">
    <div class="container">
      <form action="payment.php" method="POST">
      
        <div class="row">
          <div class="col-50">
          	<br>
            <h3> Tenant Details</h3><br>
            <label> Name</label>
            <input type="text" name="name" placeholder="John M. Doe">

            <label> Email</label>
            <input type="text" name="email" placeholder="john@example.com">

            <label> Date</label>
            <input type="date" name="date" placeholder="2000-03-31">

            <label> Amount</label>
            <input type="text" name="amt" placeholder="XXXX">

            <div class="row">
              <div class="col-50">
                <label>Apartment number</label>
                <input type="text" name="apartment_id" placeholder="##">
              </div>
              <div class="col-50">
                <label>Phone Number</label>
                <input type="text" name="ph_no" placeholder="1234567890" size="10">
              </div>
            </div>
          </div>

          <div class="col-50">
          	<br>
            <h3>  Payment</h3><br>
            <label >Name of bank</label>
            <input type="text" name="bankname" placeholder="State Bank Of India">
            
            <label>Name on Card</label>
            <input type="text" name="cardname" placeholder="John More Doe">
            <label>Credit card number</label>
            <input type="text" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label>Exp Month</label>
            <input type="text" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label>Exp Year</label>
                <input type="text" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label>CVV</label>
                <input type="text" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
        </div>
        <input type="submit" value="Pay" class="btn">
      </form>
    </div>
  </div>

</div>


</body>
</html>