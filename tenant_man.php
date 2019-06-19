<?php
$id = $_POST['a_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$rent = $_POST['rent'];

$id1 = $_POST['a_id1'];
$name1 = $_POST['name1'];
$email1 = $_POST['email1'];


if ((!empty($id1) && !empty($name1) && !empty($email1) ) || (!empty($id) && !empty($name) && !empty($rent) && !empty($email))){
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
                $sql1 = "SELECT name FROM tenant WHERE email = '".$email."' limit 1";
                $result = mysqli_query($conn,$sql1);
                $count = mysqli_num_rows($result);


                if($count == 0){
                    $sql2 = "SELECT unit_id FROM apartment WHERE apart_id = '".$id."' limit 1";
                    $resul = mysqli_query($conn,$sql2);
                    $coun = mysqli_num_rows($resul);


                    if($coun == 1){
    			               $sql = "INSERT INTO tenant ( email , name , apart_id , rent ) VALUES ( '$email', '$name', '$id' ,'$rent' )";
    			               if (mysqli_query($conn,$sql)){
    				                echo "<script type='text/javascript'>alert('New Tenant added successfully!!!');
         			              window.location.href='admin.php';
         			              </script>";
 					                  die();
 				                 }
 				                 else{
 					                  echo "<script type='text/javascript'>alert('Request Unsuccessfull!!!
 					                  Try Again Later!!!');
         			              window.location.href='tenant_man1.php';
         			              </script>";
 					                  die();
 				                 }
    		              }
                      else{
                        echo "<script type='text/javascript'>alert('Apartment does not exist!!!
                            Try Again Later!!!');
                            window.location.href='tenant_man1.php';
                            </script>";
                            die();
                      }
                  }
                    else{
                      echo "<script type='text/javascript'>alert('Tenant already exists!!!');
                      window.location.href='tenant_man1.php';
                     </script>";
                     die();
                }
          }
    		  else{
    			       $sql1 = "SELECT name FROM tenant WHERE email = '".$email1."'limit 1";
              	$result = mysqli_query($conn,$sql1);
              	$count = mysqli_num_rows($result);


          		  if($count == 1){
          			     $sql = "DELETE FROM tenant WHERE email = '".$email1."' ";
          			     if (mysqli_query($conn,$sql)){
    				            echo "<script type='text/javascript'>alert('Tenant Deleted successfully!!!');
         			            window.location.href='admin.php';
         			          </script>";
 					              die();
 					          }
 					          else{
 						             echo "<script type='text/javascript'>alert('Request Unsuccessfull!!!
 					              Try Again Later!!!');
         			          window.location.href='tenant_man1.php';
         			          </script>";
 						           die();
 					          }
          		  }
          		  else{
          			     echo "<script type='text/javascript'>alert('Wrong details entered!!!');
        		          window.location.href='tenant_man1.php';
         		         </script>";
                     die();
          		  }

    		  }
        }
    }
    else{
    	echo "<script type='text/javascript'>alert('Enter all details!!!');
         window.location.href='tenant_man1.php';
         </script>";
 		die();
    }

?>