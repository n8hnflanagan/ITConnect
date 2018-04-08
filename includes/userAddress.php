<?php
session_start();

if (isset($_POST['submit']))
	{

		include_once 'dbh.inc.php';

		$userAddress = mysqli_real_escape_string($conn, $_POST['Address']);
		$userId = $_SESSION['u_id'];

		//Error Handling
		//Check for empty fields
		if ( empty($userAddress) )
		{
			header("Location: ../UserAccountPage.php?userAddress=empty");
			mysqli_close($conn);
			exit();
		} else {
					    //Check if input characters are valid

												$sql = "UPDATE users SET UserAddress='".$userAddress."' WHERE UserId ='".$userId."';";
												// Perform a query, check for error
												if (!mysqli_query($conn, $sql))
												  {
												  echo("Error description: " . mysqli_error($conn));
												  }
												mysqli_query($conn, $sql);
												header("Location: ../UserAccountPage.php?changeAddress=success");
												mysqli_close($conn);
												exit();
											 //End check

						}
} else{

				header("Location: ../UserAccountPage.php?PostSubmit");
				mysqli_close($conn);
				exit();
			} //End check if email valid
			?>
