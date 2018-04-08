<?php
session_start();

if (isset($_POST['submit']))
	{

		include_once 'dbh.inc.php';

		$userAboutMe = mysqli_real_escape_string($conn, $_POST['Aboutme']);
		$userId = $_SESSION['u_id'];

		//Error Handling
		//Check for empty fields
		if ( empty($userAboutMe) )
		{
			header("Location: ../UserAccountPage.php?UserAboutMe=empty");
			mysqli_close($conn);
			exit();
		} else {

												$sql = "UPDATE users SET UserAboutMe='".$userAboutMe."' WHERE UserId ='".$userId."';";
												// Perform a query, check for error
												if (!mysqli_query($conn, $sql))
												  {
												  echo("Error description: " . mysqli_error($conn));
												  }
												mysqli_query($conn, $sql);
												header("Location: ../UserAccountPage.php?changeUserAboutMe=success");
												mysqli_close($conn);
												exit();


						}
} else{

				header("Location: ../UserAccountPage.php?PostSubmit");
				mysqli_close($conn);
				exit();
			} //End check if email valid
			?>
