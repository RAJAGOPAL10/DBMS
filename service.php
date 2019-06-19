<?php
session_start();
$name= $_POST['name'];
$email = $_POST['email'];
$id = $_POST['a_id'];
$phno = $_POST['phone'];
$date = $_POST['date'];

$location = $_POST['location'];
$category = $_POST['category'];
$issue1 = $_POST['issue1'];
$issue2 = $_POST['issue2'];
$issue3 = $_POST['issue3'];
$issue4 = $_POST['issue4'];
$issue5 = $_POST['issue5'];
$issue6 = $_POST['issue6'];
$comment = $_POST['message'];

if (!empty($name) && !empty($email) && !empty($phno) && !empty($date) && !empty($id)){
	       $host = "localhost";
         $dbUsername = "root";
         $dbPassword = "";
         $dbname = "project";
         $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
         if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        }

    	   else{
          $name1 = $_SESSION['user'];
              $sql = "SELECT password FROM tenant WHERE name = '".$name1."' AND apart_id = '".$id."' and email = '".$email."' AND phone = '".$phno."' limit 1";
              $result = mysqli_query($conn,$sql);
              $count = mysqli_num_rows($result);


          if($count == 1) {
                  if (!empty($issue1)) 
                  {
                     $sql1 = "INSERT INTO complaint ( tenant_id , category , location , issue_cause , comment , date1 ) VALUES ( '$email', '$category', '$location', '$issue1', '$comment' , '$date' )";
                   }
                   if (!empty($issue2)) 
                  {
                     $sql1 = "INSERT INTO complaint ( tenant_id , category , location , issue_cause , comment , date1 ) VALUES ( '$email', '$category', '$location', '$issue2', '$comment' , '$date' )";
                   }

                   if (!empty($issue3)) 
                  {
                     $sql1 = "INSERT INTO complaint ( tenant_id , category , location , issue_cause , comment , date1 ) VALUES ( '$email', '$category', '$location', '$issue3', '$comment' , '$date' )";
                   }
                   if (!empty($issue4)) 
                  {
                     $sql1 = "INSERT INTO complaint ( tenant_id , category , location , issue_cause , comment , date1 ) VALUES ( '$email', '$category', '$location', '$issue4', '$comment' , '$date' )";
                   }
                   if (!empty($issue5)) 
                  {
                     $sql1 = "INSERT INTO complaint ( tenant_id , category , location , issue_cause , comment , date1 ) VALUES ( '$email', '$category', '$location', '$issue5', '$comment' , '$date' )";
                   }
                   if (!empty($issue6)) 
                  {
                     $sql1 = "INSERT INTO complaint ( tenant_id , category , location , issue_cause , comment , date1 ) VALUES ( '$email', '$category', '$location', '$issue6', '$comment' , '$date' )";
                   }
      			     if (mysqli_query($conn,$sql1)){
    				        echo "<script type='text/javascript'>alert('Complaint raised successfully!!!');
         			      window.location.href='user.php';
         			      </script>";
                    echo "done";
 					          die();
 				         }
 				         else{
 					          echo "<script type='text/javascript'>alert('Request Unsuccessfull!!!
 					          Try Again Later!!!');
         			      window.location.href='service.html';
         			      </script>";
 					          die();
 				         }
      		    }
      		    else{
      			       echo "<script type='text/javascript'>alert('Wrong details entered!!!');
        		          window.location.href='service.html';
         		         </script>";
                     die();
      		    }
    	   }
}
else{
	echo "<script type='text/javascript'>alert('Enter all details!!!');
         window.location.href='service.html';
         </script>";
 		die();
    mysqli_close($conn);
}


?>