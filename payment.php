<?php
$name= $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$amt = $_POST['amt'];
$id = $_POST['apartment_id'];
$ph_no = $_POST['ph_no'];

$b_name = $_POST['bankname'];
$c_name = $_POST['cardname'];
$c_no = $_POST['cardnumber'];
$expm = $_POST['expmonth'];
$expy = $_POST['expyear'];
$cvv = $_POST['cvv'];

 if (!empty($name) && !empty($email) && !empty($date) && !empty($ph_no) && !empty($id) && !empty($amt) && !empty($b_name) && !empty($c_name) && !empty($c_no) && !empty($expm) && !empty($expy) && !empty($cvv) ){
         $host = "localhost";
         $dbUsername = "root";
         $dbPassword = "";
         $dbname = "project";
         $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
         if (mysqli_connect_error()) {
     		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    		}
    	else{
      		$sql = "SELECT email FROM tenant WHERE name = '".$name."' and email = '".$email."' and apart_id = '".$id."' and phone = '".$ph_no."' and rent = '".$amt."' limit 1";
      		$result = mysqli_query($conn,$sql);
      		$count = mysqli_num_rows($result);


      		if($count == 1) {



      			$sql = "INSERT INTO rent ( email, amt, t_date, bank_name ) VALUES ('$email', '$amt', '$date', '$b_name')";
    		
    			if (mysqli_query($conn,$sql)){
    				echo "<script type='text/javascript'>alert('Payment Successfull!!!');
         			window.location.href='user.php';
         			</script>";
 					die();
 				}
 				else{
 					echo "<script type='text/javascript'>alert('Payment Unsuccessfull!!!
 					Try Again Later!!!');
         			window.location.href='user.php';
         			</script>";
 					die();
 				}

      		}
      		else{
      			echo "<script type='text/javascript'>alert('Wrong details entered!!!');
        		 window.location.href='payment1.php';
         		</script>";
      		}
      	}
     }
	else{
      echo "<script type='text/javascript'>alert('All fields required!!!');
         window.location.href='payment1.php';
         </script>";
 		die();
   	}




?>