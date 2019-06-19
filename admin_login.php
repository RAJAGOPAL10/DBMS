<?php
session_start();
   $admin_name= $_POST['admin_id'];
   $password = $_POST['password'];
   if (!empty($admin_name) && !empty($password)){
         $host = "localhost";
         $dbUsername = "root";
         $dbPassword = "";
         $dbname = "project";
         $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
         if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
    else{
      $sql = "SELECT password FROM admin WHERE name = '".$admin_name."' and password = '".$password."' limit 1";
      $result = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($result);
      $_SESSION['admin'] = $admin_name;

      if($count == 1) {
         echo "<script type='text/javascript'>alert('submitted successfully!');
         window.location.href='admin.php';
         </script>";

         exit();
      }else {
         echo "<script type='text/javascript'>alert('Incorrect id or password!');
         window.location.href='admin_login.html';
         </script>";
        
      }
    }
   }
   else{
      echo "<script type='text/javascript'>alert('All fields required!!!');
         window.location.href='admin_login.html';
         </script>";
 die();
   }
    
?>