<?php
session_start();

if (isset($_POST['submit']))
	{

		include_once 'dbh.inc.php';

		$userLastName = mysqli_real_escape_string($conn, $_POST['LastName']);
		$userId = $_SESSION['u_id'];

		//Error Handling
		//Check for empty fields
		if ( empty($userLastName) )
		{
			header("Location: ../UserAccountPage.php?username=empty");
			mysqli_close($conn);
			exit();
		} else {
					    //Check if input characters are valid
							if (!preg_match("/^[a-zA-Z]*$/", $userLastName) )
								{
								header("Location: ../UserAccountPage.php?signup=invalid");
								mysqli_close($conn);
								exit();
								} else{
												echo '<br>';
												$sql = "UPDATE users SET UserLastName='".$userLastName."' WHERE UserId ='".$userId."';";
												//echo $sql;
												// Perform a query, check for error
												if (!mysqli_query($conn, $sql))
												  {
												  echo("Error description: " . mysqli_error($conn));
												  }
												mysqli_query($conn, $sql);
												header("Location: ../UserAccountPage.php?changesurname=success");
												$_SESSION['u_last'] = $userLastName;
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
