<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
	<?php
         $conn = new PDO("mysql:host=localhost; dbname=project",'root',"");

         $sql = "CALL rent('rajagopalkala98@gmail.com')";
         $result = $conn->prepare($sql);
         $result->setFetchMode(PDO::FETCH_ASSOC);
         $result->execute();
         while($row = $result->fetch()){
         	echo "<tr> <td>" .  $row["trans_id"] . "</td><td>" . $row["amt"] . "</td><td>" . $row["t_date"] . "</td><td>" .  $row["bank_name"] . "</td></tr>";

         }
	?>
	</table>
</body>
</html>
