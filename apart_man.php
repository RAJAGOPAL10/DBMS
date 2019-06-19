<?php
$id = $_POST['a_id'];
$add = $_POST['apart_add'];
$unit = $_POST['unit'];
$rent = $_POST['rent'];

$id1 = $_POST['aid'];
$add1 = $_POST['apartadd'];

	if ((!empty($id) && !empty($add) && !empty($unit) && !empty($rent)) || (!empty($id1) && !empty($add1))){
	     $host = "localhost";
         $dbUsername = "root";
         $dbPassword = "";
         $dbname = "project";
         $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if (mysqli_connect_error()) {
        	die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        }

    	else{
    		if(!empty($id)){
          $sql1 = "SELECT rent_amt FROM apartment WHERE apart_id = '".$id."' limit 1";
                $result = mysqli_query($conn,$sql1);
                $count = mysqli_num_rows($result);


              if($count == 0){
    			       $sql = "INSERT INTO apartment ( apart_id , unit_id , apart_address , rent_amt) VALUES ( '$id', '$unit', '$add', '$rent' )";
    			       if (mysqli_query($conn,$sql)){
    				       echo "<script type='text/javascript'>alert('New Apartment added successfully!!!');
         			      window.location.href='admin.php';
         			      </script>";
 					          die();
 				       }
 				       else{
 					          echo "<script type='text/javascript'>alert('Request Unsuccessfull!!!
 					          Try Again Later!!!');
         			      window.location.href='apart_man1.php';
         			      </script>";
 					          die();
 				       }
    		}
        else{
          echo "<script type='text/javascript'>alert('Apartment already exists!!!');
                      window.location.href='apart_man1.php';
                     </script>";
                     die();
        }
      }
    		else{
    			$sql1 = "SELECT rent_amt FROM apartment WHERE apart_id = '".$id1."' limit 1";
              	$result = mysqli_query($conn,$sql1);
              	$count = mysqli_num_rows($result);


          		if($count == 1){
          			$sql = "DELETE FROM apartment WHERE apart_id = '".$id1."' ";
          			if (mysqli_query($conn,$sql)){
    				       echo "<script type='text/javascript'>alert('Apartment Deleted successfully!!!');
         			      window.location.href='admin.php';
         			      </script>";
 					          die();
 					}
 					else{
 						echo "<script type='text/javascript'>alert('Request Unsuccessfull!!!
 					          Try Again Later!!!');
         			      window.location.href='apart_man1.php';
         			      </script>";
 						die();
 					}
          		}
          		else{
          			echo "<script type='text/javascript'>alert('Wrong details entered!!!');
        		          window.location.href='apart_man1.php';
         		         </script>";
                     die();
          		}

    		}



    	}
    }
    else{
    	echo "<script type='text/javascript'>alert('Enter all details!!!');
         window.location.href='apart_man1.php';
         </script>";
 		die();
    }

?>