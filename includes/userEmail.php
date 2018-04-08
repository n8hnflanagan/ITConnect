<?php
session_start();

if (isset($_POST['submit']))
	{

		include_once 'dbh.inc.php';

		$userEmail = mysqli_real_escape_string($conn, $_POST['Email']);
		$userId = $_SESSION['u_id'];


if (empty($userEmail) )
    {
      header("Location: ../signup.php?signup=empty");
      exit();
    } else {
        //Check if input characters are valid

                    if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL))
                              {
                              header("Location: ../UserAccountPage.php?invalid=email");
                              exit();
                              } else {
                                $sql = "UPDATE users SET UserEmail='".$userEmail."' WHERE UserId ='".$userId."';";
                                //echo $sql;
                                // Perform a query, check for error
                                if (!mysqli_query($conn, $sql))
                                  {
                                  echo("Error description: " . mysqli_error($conn));
                                  }
                                mysqli_query($conn, $sql);
                                header("Location: ../UserAccountPage.php?changeemail=success");
                                $_SESSION['u_email'] = $userEmail;
                                mysqli_close($conn);
                                exit();
                                  }


          }

 }else {
 	header("Location: ../UserAccountPage.php?email=nofields");
 	exit();
 }
?>
