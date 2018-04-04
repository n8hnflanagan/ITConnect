<?php
include_once 'header.php';
include_once 'includes/dbh.inc.php';


if( empty($_SESSION['u_first']))
{header("Location: index.php?notloggedin");
exit();
}else{
	$sqlUserId="SELECT UserId FROM users WHERE UserName='".$_SESSION['u_id']."' && UserFirstName='".$_SESSION['u_first']."'&& UserLastName='".$_SESSION['u_last']."';";
	//echo '<br>';
	//echo $sql;
	mysqli_query($conn, $sqlUserId);
	$resultUserId = $conn->query($sqlUserId);
	$row = $resultUserId->fetch_assoc();
	print_r($row);
	$userId=$row['UserId'];

	/*$sqlPwd="SELECT UserName FROM users WHERE UserId='".$userId."';";
	$resultPwd = $conn->query($sqlPwd);
	$row = $resultPwd->fetch_assoc();
	print_r($row);
	$userName=$row['UserName'];*/

			echo '<div class="container">';
				echo '<div class="row">';
							echo '<div class="account-heading">';
								echo '<img class="center" class="img-responsive" src="PrototypeImages/ITConnectBlue.png" alt="IT Connect Logo" width="100" height="100">';
							echo '<h3> <b>Account</b></h3>

							</div>
				</div>
			</div>	';


			echo '<div class="container">
				<div class="row">
					<div class = "profile-photo" >';
						echo'	<img class="center" class="img-responsive" src="PrototypeImages/WeeDaniel.jpg" alt="Profile Photo" width="130" height="130">';
						//echo	"".$_SESSION['u_first']. "<br>";
						echo	"<h2><b>".$_SESSION['u_first']." ".$_SESSION['u_last']. "</b></h2>";
					 echo '</div>
				</div>
			</div>';

			echo '<div class="container">
				<div class="row">
					<div class = "account-form" >

							<div class = "main-text">';
							echo	"<h2><b> Current Username: \" ".$_SESSION['u_name']. " \"</b></h2>";
							echo '<h3>Change Username</h3>';
							echo '<form action="includes\userName.php" method="POST" autocomplete="on"> ';
							echo 'Enter new username:<br>';
							echo '<input type="text" name="UserName" placeholder="UserName"><br/>';
							echo '<button type="submit" name="submit">Change</button>';
							echo '</form>
							<br>';
							echo '<h3>Change Password</h3>';
							echo '<form action="includes\userPass.php" method="POST" autocomplete="on"> ';
							echo 'Enter current password:<br>';
							echo '<input type="text" name="UserCurrPwd" placeholder="Current UserPassword"><br/>';
							echo '<br>';
							echo 'Enter new password:<br>';
							echo '<input type="text" name="NewPwd" placeholder="New Password"><br/>';
							echo '<br>';
							echo 'Confirm new password:<br>';
							echo '<input type="text" name="ConfPwd" placeholder="Confirm Password"><br/>';
							echo '<br>';
							echo '<button type="submit" name="submit">Change</button>';
							echo '</form>';
							echo '<form action="includes\logout.inc.php" method="POST" autocomplete="on"> ';
							echo '<button type="submit" name="submit">Logout</button>';
							echo '</form>
					</div>
				</div>
			</div>';

			    echo '<!-- Bootstrap core JavaScript
			    ================================================== --> ';
			  echo '<!-- Placed at the end of the document so the pages load faster -->';
			    echo '<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>';
			    echo "<script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\/script>')</script>";
			    echo '<script src=\"BootstrapRepository/dist/js/bootstrap.min.js\"></script>';
			    echo '<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->';
			    echo '<script src=\"/BootstrapRepository/docs/assets/js/ie10-viewport-bug-workaround.js\"></script>';
			  echo'</body>';
			 echo'</html>';
			} //End User logged in check
?>
