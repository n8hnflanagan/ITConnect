<?php
session_start();

if (isset($_POST['submit']))
	{

		include_once 'dbh.inc.php';

		$userCompany = mysqli_real_escape_string($conn, $_POST['Company']);
		$userId = $_SESSION['u_id'];

		//Error Handling
		//Check for empty fields
		if ( empty($userCompany) )
		{
			header("Location: ../UserAccountPage.php?usercompany=empty");
			mysqli_close($conn);
			exit();
		} else {
					    //Check if input characters are valid
							if (!preg_match("/^[a-zA-Z0-9]*$/", $userCompany) )
								{
								header("Location: ../UserAccountPage.php?userCompany=invalid");
								mysqli_close($conn);
								exit();
								} else{
												$sql = "UPDATE users SET UserCompany='".$userCompany."' WHERE UserId ='".$userId."';";
												// Perform a query, check for error
												if (!mysqli_query($conn, $sql))
												  {
												  echo("Error description: " . mysqli_error($conn));
												  }
												mysqli_query($conn, $sql);
												header("Location: ../UserAccountPage.php?changecompany=success");
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
