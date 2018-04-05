<?php
session_start();

if (isset($_POST['submit']))
	{

		include_once 'dbh.inc.php';

    $UserCurrPwd = mysqli_real_escape_string($conn, $_POST['UserCurrPwd']);
    $NewPwd = mysqli_real_escape_string($conn, $_POST['NewPwd']);
    $ConfPwd = mysqli_real_escape_string($conn, $_POST['ConfPwd']);
/*    $sql="SELECT UserId FROM users WHERE UserName='".$_SESSION['u_id']."' && UserFirstName='".$_SESSION['u_first']."'&& UserLastName='".$_SESSION['u_last']."';";
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
		//Check for empty fields*/
		if ( empty($UserCurrPwd) || empty($NewPwd) || empty($ConfPwd))
		{
			header("Location: ../UserAccountPage.php?userpwd=emptyfields");
			mysqli_close($conn);
			exit();
		} else if (!preg_match("/^[a-zA-Z]*$/", $UserCurrPwd)||!preg_match("/^[a-zA-Z]*$/", $NewPwd) || !preg_match("/^[a-zA-Z]*$/", $ConfPwd)) //Check if input characters are valid
								{
								header("Location: ../UserAccountPage.php?fields=invalid");
								mysqli_close($conn);
								exit();
              } else if($NewPwd!=$ConfPwd){
                                          header("Location: ../UserAccountPage.php?passwords=nomatch");
                                          mysqli_close($conn);
                                          exit();
                          }else{echo '<br>';
        												$hashedPwd = password_hash($NewPwd, PASSWORD_DEFAULT);
                                $sql = "UPDATE users SET UserPwd='".$hashedPwd."' WHERE UserId ='".$_SESSION['u_id']."';";
        												//echo $sql;
        												// Perform a query, check for error
        												if (!mysqli_query($conn, $sql))
        												  {
        												  echo("Error description: " . mysqli_error($conn));
        												  }
        												mysqli_query($conn, $sql);
                                echo $_SESSION['u_name'];
        												header("Location: ../UserAccountPage.php?changepasssuccess");
        												mysqli_close($conn);
        												exit();

      											} //End check if email valid


} else{

				header("Location: ../UserAccountPage.php?PostSubmit");
				mysqli_close($conn);
				exit();
			} //End check if email valid
			?>
