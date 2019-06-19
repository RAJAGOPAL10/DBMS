<?php
session_start();
   $name= $_POST['email'];
   $password = $_POST['password'];
   if (!empty($name) && !empty($password)){
         $host = "localhost";
         $dbUsername = "root";
         $dbPassword = "";
         $dbname = "project";
         $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
         if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
    else{
      $sql = "SELECT email FROM tenant WHERE name = '".$name."' and password = '".$password."' limit 1";
      $result = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($result);

      $_SESSION['user'] = $name;
      $_SESSION['pass'] = $password;

      if($count == 1) {
         echo "<script type='text/javascript'>alert('submitted successfully!');
         window.location.href='user.php';
         </script>";

         exit();
      }else {
         echo "<script type='text/javascript'>alert('Incorrect username or password!');
         window.location.href='login.html';
         </script>";
        
      }
    }
   }
   else{
      echo "<script type='text/javascript'>alert('All fields required!!!');
         window.location.href='login.html';
         </script>";
 die();
   }
    
?>