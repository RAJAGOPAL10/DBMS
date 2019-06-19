<?php
   $name= $_POST['name'];
   $email = $_POST['email'];
   if (!empty($name) || !empty($email)){
         $host = "localhost";
         $dbUsername = "root";
         $dbPassword = "";
         $dbname = "project";
         $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
         if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
    else{
      $sql = "SELECT apart_id FROM tenant WHERE name = '".$name."' and email = '".$email."' limit 1";
      $result = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($result);


      if($count == 1) {
            echo "<script type='text/javascript'>alert('submitted successfully!');
         window.location.href='signup2.html';
         </script>";

         exit();
         

      }else {
         echo "<script type='text/javascript'>alert('Invalid name or email !!!');
         window.location.href='signup1.html';
         </script>";
         exit();
        
      }
    }
   }
   else{
      echo "<script type='text/javascript'>alert('All fields required!!!');
         window.location.href='signup1.html';
         </script>";
 die();
   }
    
?>