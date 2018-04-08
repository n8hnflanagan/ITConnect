<?php

session_start();

if (isset($_POST['submit'])) {

	include 'dbh.inc.php';

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//Error handlers
	//Check if inputs are empty
	if (empty($uid) || empty($pwd)) {
		header("Location: ../index.php?login=empty1");
		exit();
	} else {
			$sql = "SELECT * FROM Users WHERE UserName ='$uid'OR UserEmail = '$uid'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
				if($resultCheck < 1){
					header("Location: ../index.php?login=error2");
					exit();
					} else{
						if($row = mysqli_fetch_assoc($result)){
							//De-hashing password
							$hashedPwdCheck = password_verify($pwd, $row['UserPwd']);
							if ($hashedPwdCheck == false) {
								header("Location: ../index.php?login=error3");
								exit();
							}elseif ($hashedPwdCheck == true){
								//Log in the user here
								$_SESSION['u_id'] = $row['UserId'];
								$_SESSION['u_first'] = $row['UserFirstName'];
								$_SESSION['u_last'] = $row['UserLastName'];
								$_SESSION['u_email'] = $row['UserEmail'];
								$_SESSION['u_name'] = $row['UserName'];
								$_SESSION['u_type'] = $row['UserCompany'];
								header("Location: ../UserProfilePage.php?login=success");
								exit();
 								}
							}
						}
			}
} else {
	header("Location: ../index.php?login=error4");
	exit();
}
