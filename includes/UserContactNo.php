<?php
session_start();

if (isset($_POST['submit']))
	{

		include_once 'dbh.inc.php';

		$userContact = mysqli_real_escape_string($conn, $_POST['Contact']);
		$userId = $_SESSION['u_id'];

		//Error Handling
		//Check for empty fields
		if ( empty($userContact) )
		{
			header("Location: ../UserAccountPage.php?usercontact=empty");
			mysqli_close($conn);
			exit();
		} else {
												$sql = "UPDATE users SET UserContactNo='".$userContact."' WHERE UserId ='".$userId."';";
												// Perform a query, check for error
												if (!mysqli_query($conn, $sql))
												  {
												  echo("Error description: " . mysqli_error($conn));
												  }
												mysqli_query($conn, $sql);
												header("Location: ../UserAccountPage.php?changecontact=success");
												mysqli_close($conn);
												exit();


						}
} else{

				header("Location: ../UserAccountPage.php?PostSubmit");
				mysqli_close($conn);
				exit();
			} //End check if email valid
			?>
