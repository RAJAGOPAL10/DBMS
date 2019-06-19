<?php

$cid = $_POST['cid'];
$date = $_POST['date1'];

if (!empty($cid) && !empty($date) ){
		 $host = "localhost";
         $dbUsername = "root";
         $dbPassword = "";
         $dbname = "project";
         $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
         if (mysqli_connect_error()) {
     		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    		}
    	else{

    		$sql = "SELECT tenant_id FROM complaint WHERE complaint_id = '".$cid."' and date1 = '".$date."' limit 1";
      		$result = mysqli_query($conn,$sql);
      		$count = mysqli_num_rows($result);


      		if($count == 1) {
    		$sql1 = "UPDATE complaint SET status = 'closed' WHERE complaint_id = '".$cid."' AND date1 = '".$date."' limit 1";

    		if (mysqli_query($conn,$sql1)){
    				echo "<script type='text/javascript'>alert('Status Updated Successfully!!!');
         			window.location.href='admin.php';
         			</script>";
 					die();
 				}
 				else{
 					echo "<script type='text/javascript'>alert('Unsuccessfull!!! \n
 					Try Again Later!!!');
         			window.location.href='admin.php';
         			</script>";
 					die();
 				}
    		}
    		else{
      			echo "<script type='text/javascript'>alert('Wrong details entered!!!');
        		 window.location.href='acomp1.php';
         		</script>";
      		}
    	}
}
else{
      echo "<script type='text/javascript'>alert('All fields required!!!');
         window.location.href='acomp1.php';
         </script>";
 		die();
}

?>