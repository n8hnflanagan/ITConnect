<?php
session_start();

if (isset($_POST['submit']))
	{

		include_once 'dbh.inc.php';

		$userFirstName = mysqli_real_escape_string($conn, $_POST['FirstName']);
		$userId = $_SESSION['u_id'];

		//Error Handling
		//Check for empty fields
		if ( empty($userFirstName) )
		{
			header("Location: ../UserAccountPage.php?username=empty");
			mysqli_close($conn);
			exit();
		} else {
					    //Check if input characters are valid
							if (!preg_match("/^[a-zA-Z]*$/", $userFirstName) )
								{
								header("Location: ../UserAccountPage.php?signup=invalid");
								mysqli_close($conn);
								exit();
								} else{
												$sql = "UPDATE users SET UserFirstName='".$userFirstName."' WHERE UserId ='".$userId."';";
												// Perform a query, check for error
												if (!mysqli_query($conn, $sql))
												  {
												  echo("Error description: " . mysqli_error($conn));
												  }
												mysqli_query($conn, $sql);
												header("Location: ../UserAccountPage.php?changefirstname=success");
												$_SESSION['u_first'] = $userFirstName;
												mysqli_close($conn);
												exit();
											} //End check 

						}
} else{

				header("Location: ../UserAccountPage.php?PostSubmit");
				mysqli_close($conn);
				exit();
			} //End check if email valid
			?>
