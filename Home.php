<!DOCTYPE html>
<html>
<head>
	<title>Home Screen</title>
</head>
<body>

	<?php
		require_once'Genuine_checker.php';
		require_once'dbcon.php';
		$oper_id=$_SESSION['ID'];

//		$result= mysql_query("SELECT * FROM user WHERE user_id='$oper_id'");
//		while ($row = mysql_fetch_array($result)) {
//			echo "Welcome ".$row['first_name']." ". $row['last_name'];
//			echo "<br> <a href='Out.php'>Logout</a>";
//		}

		$stmt = $con->prepare("SELECT * FROM users WHERE user_id='$oper_id'");
		$stmt->execute(array("$oper_id"));
		$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

        echo "Welcome ".$userRow['first_name']." ". $userRow['last_name'];
        echo "<br> <a href='Out.php'>Logout</a>";






	?>


</body>
</html>