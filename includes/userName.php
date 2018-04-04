<?php
session_start();

if (isset($_POST['submit']))
	{

		include_once 'dbh.inc.php';
    $sql="SELECT UserId FROM users WHERE UserName='".$_SESSION['u_id']."' && UserFirstName='".$_SESSION['u_first']."'&& UserLastName='".$_SESSION['u_last']."';";
		echo '<br>';
		echo $sql;
		mysqli_query($conn, $sql);
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$userId=$row['UserId'];
		//print_r($row);
					if (mysqli_connect_errno())
					  {
					  echo "Failed to connect to MySQL: " . mysqli_connect_error();
					  }

						// Perform a query, check for error
						if (!mysqli_query($conn, $sql))
						  {
						  echo("Error description: " . mysqli_error($conn));
						  }


echo	"<h2><b> UserId: \" ".$userId. " \"</b></h2>";
//echo '.$userId.''';



		// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



		$userName = mysqli_real_escape_string($conn, $_POST['UserName']);
		echo $userId;

		//Error Handling
		//Check for empty fields
		if ( empty($userName) )
		{
			header("Location: ../UserAccountPage.php?username=empty");
			mysqli_close($conn);
			exit();
		} else {
					    //Check if input characters are valid
							if (!preg_match("/^[a-zA-Z]*$/", $userName) )
								{
								header("Location: ../UserAccountPage.php?signup=invalid");
								mysqli_close($conn);
								exit();
								} else{
												echo '<br>';
												$sql = "UPDATE users SET UserName='".$userName."' WHERE UserId ='".$userId."';";
												echo $sql;
												// Perform a query, check for error
												if (!mysqli_query($conn, $sql))
												  {
												  echo("Error description: " . mysqli_error($conn));
												  }
												mysqli_query($conn, $sql);
												header("Location: ../UserAccountPage.php?changeusername=success");
												$_SESSION['u_name'] = $userName;
												mysqli_close($conn);
												exit();
											} //End check if email valid

						}
} else{

				header("Location: ../UserAccountPage.php?PostSubmit");
				mysqli_close($conn);
				exit();
			} //End check if email valid
			?>
