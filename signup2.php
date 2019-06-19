<?php
$ph_no = $_POST['ph_no'];
$password = $_POST['password'];
$cpassword = $_POST['c_password'];
$email = $_POST['email'];

if ( !empty($password) && !empty($cpassword) && !empty($email) && !empty($ph_no) )
{
	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "project";


    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);


    if (mysqli_connect_error()) {
     	die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
    else{
    	if ($password == $cpassword) {
    		$sql = "UPDATE tenant SET password = '".$password."' ,  phone = '".$ph_no."' WHERE email = '".$email."' limit 1";
    		
    		if (mysqli_query($conn,$sql)){
    			echo "<script type='text/javascript'>alert('Details entered successfully!!!');
         			window.location.href='login.html';
         			</script>";
 				die();
			}
			else{
				echo "<script type='text/javascript'>alert('Error updating record!!!');
         	window.location.href='signup2.html';
         	</script>";
 			die();
			}
		}
    	else{
    		echo "<script type='text/javascript'>alert('Passwords do not match!!!');
         	window.location.href='signup2.html';
         	</script>";
 			die();
    	}
	}
}
else{
	echo "<script type='text/javascript'>alert('All fields required!!!');
         window.location.href='signup2.html';
         </script>";
 	die();
}

?>