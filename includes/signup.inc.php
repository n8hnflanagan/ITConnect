<?php


if (isset($_POST['submit']))
	{

	include_once 'dbh.inc.php';

	$userFirstName = mysqli_real_escape_string($conn, $_POST['UserFirstName']);
	$userLastName = mysqli_real_escape_string($conn, $_POST['UserLastName']);
	$userEmail = mysqli_real_escape_string($conn, $_POST['UserEmail']);
	$userAddress = mysqli_real_escape_string($conn, $_POST['UserAddress']);
	$userName = mysqli_real_escape_string($conn, $_POST['UserName']);
	$userPwd = mysqli_real_escape_string($conn, $_POST['UserPwd']);
	$confuserPwd = mysqli_real_escape_string($conn, $_POST['ConfUserPwd']);

	//Error Handling
	//Check for empty fields
	if (empty($userFirstName)|| empty($userLastName) || empty($userEmail) || empty($userAddress) || empty($userName) || empty($userPwd) || empty($confuserPwd))
	{
		header("Location: ../signup.php?signup=empty");
		exit();
	} else {
			//Check if input characters are valid
			if (!preg_match("/^[a-zA-Z]*$/", $userFirstName) || !preg_match("/^[a-zA-Z]*$/", $userLastName))
				{
				header("Location: ../RegistrationPage.php?signup=invalid");
				exit();
				} else{
								if($userPwd==$confuserPwd){ //
									//Check if email is valid
											if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL))
												{
												header("Location: ../RegistrationPage.html?signup=email");
												exit();
												} else {
														//Check database for Username existing
														$sql = "SELECT * FROM Users WHERE userName ='$userName'";
														$result= mysqli_query($conn,$sql);

														$resultCheck = mysqli_num_rows($result);
														} if ($resultCheck > 0 )
															{
															header("Location: ../RegistrationPage.php?signup=usertaken");
															exit();
															} else {
																	//Hashing password
																	$hashedPwd = password_hash($userPwd, PASSWORD_DEFAULT);
																	//Insert the user into the database
																	$sql = "INSERT INTO `users`(`UserName`, `UserFirstName`, `UserLastName`, `UserEmail`, `UserCompany`, `UserAddress`, `UserContactNo`, `UserPwd`, `UserAccountActive`, `UserPictureFileLocation`, `UserHash`, `UserProfileVisible`, `UserCoverPhotoFileLocation`, `UserBannedDateTime`, `UserType`) VALUES ('$userName', '$userFirstName', '$userLastName', '$userEmail', 'null', '$userAddress', 'null', '$hashedPwd', 1, 'null', 'temp', 1, 'temp', NULL,'Standard');";





																	mysqli_query($conn, $sql);
																	header("Location: ../UserProfilePage.php?signup=success");
																	exit();
																	}
																}else{
																		header("Location: ../RegistrationPage.php?passwordsmatch=false");
																		exit();
																		} //End check if email valid
													}
					  }

} else {
	header("Location: ../signup.php?signup=nofields");
	exit();
}
