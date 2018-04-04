<?php
include_once 'dbh.inc.php';

	$userFirstName = mysqli_real_escape_string($conn, $_POST['UserFirstName']);
	$userLastName = mysqli_real_escape_string($conn, $_POST['UserLastName']);
	$userEmail = mysqli_real_escape_string($conn, $_POST['UserEmail']);
	$userAddress = mysqli_real_escape_string($conn, $_POST['UserAddress']);
	$userName = mysqli_real_escape_string($conn, $_POST['UserName']);
	$userPwd = mysqli_real_escape_string($conn, $_POST['UserPwd']);

	$hashedPwd = password_hash($userPwd, PASSWORD_DEFAULT);

/*$sql = "INSERT INTO Users (UserName, UserFirstName, UserLastName, UserEmail, UserCompany, UserAddress, UserContactNo, UserPwd, UserAccountActive, UserPictureFileLocation, UserHash, UserProfileVisible, UserCoverPhotoFileLocation) VALUES ('$userName', '$userFirstName', '$userLastName', '$userEmail', 'null', '$userAddress', 'null', '$hashedPwd', 1, 'null', 'temp', 1, 'temp');";
mysqli_query($conn, $sql);*/

$sql = "SELECT * FROM Users";
mysqli_query($conn, $sql);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform a query, check for error
if (!mysqli_query($conn, $sql))
  {
  echo("Error description: " . mysqli_error($conn));
  }

mysqli_close($conn);

?>