<?php
include_once 'header.php';
include_once 'includes/dbh.inc.php';


	if( empty($_SESSION['u_first']))
		{header("Location: index.php?notloggedin");
		exit();
		}else{


					echo '<div class="container">';
						echo '<div class="row">';
									echo '<div class="account-heading">';
										echo '<img class="center" class="img-responsive" src="PrototypeImages/ITConnectBlue.png" alt="IT Connect Logo" width="100" height="100">';
									echo '<h3> <b>Account</b></h3>

									</div>
						</div>
					</div>	';

					//<!--Start CoverPhoto(Background photo) Picture Code-->
					echo '<div class="container">
						<div class="row">
							<div class = "profile-photo" >'; ?>

								<?php
								echo '<img class="center" class="img-responsive"';
								$sql= "SELECT UserCoverPhotoFileLocation FROM users WHERE UserId ='".$_SESSION['u_id']."';";
								//echo $sql;
								mysqli_query($conn, $sql);
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
								//print_r($row);
								$userCoverFileLocation=$row['UserCoverPhotoFileLocation'];
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

								//$sql = "UPDATE users SET UserPwd='".$hashedPwd."' WHERE UserId ='".$_SESSION['u_id']."';";
								echo ' src="'.$userCoverFileLocation.'"'; ?> alt="Background Cover Photo" width="1024" height="200">
								<!-- End  CoverPhoto(Background photo) Picture Code-->

								<?php
								// User Upload Profile picture code start
								echo '<br/>';
								echo '<b>Upload New Cover PhotoBackground Picture</b>';
								echo '<div class="form-group">';
								echo '<form action="includes\UserCoverUpload.php" method="POST" enctype="multipart/form-data" > ';

								echo '<input type="file"  name="file">';
								echo '<button type="submit" name="submit">Upload Profile Pic</button>';
								echo '</form>';
								echo '</div>';
								// User Upload Profile picture code End
								 ?>



								<?php
					//<!--Start Profile Picture Code-->
					echo '<div class="container">
						<div class="row">
							<div class = "profile-photo" >'; ?>

								<?php
								echo '<img class="center" class="img-responsive"';
								$sql= "SELECT UserPictureFileLocation FROM users WHERE UserId ='".$_SESSION['u_id']."';";
								//echo $sql;
								mysqli_query($conn, $sql);
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
								//print_r($row);
								$userPicLocation=$row['UserPictureFileLocation'];
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

								//$sql = "UPDATE users SET UserPwd='".$hashedPwd."' WHERE UserId ='".$_SESSION['u_id']."';";
								echo ' src="'.$userPicLocation.'"'; ?> alt="Profile Photo" width="100" height="100">
								<!-- End profile Picture code -->

								<?php
								// User Upload Profile picture code start
								echo '<br/>';
								echo '<b>Upload New Profile Picture</b>';
								echo '<div class="form-group">';
								echo '<form action="includes\UserUpload.php" method="POST" enctype="multipart/form-data" > ';

								echo '<input type="file"  name="file">';
								echo '<button type="submit" name="submit">Upload Profile Pic</button>';
								echo '</form>';
								echo '</div>';
								// User Upload Profile picture code End
								 ?>








								<?php
								//echo	"".$_SESSION['u_first']. "<br>";
								echo	"<h2><b>".$_SESSION['u_first']." ".$_SESSION['u_last']. "</b></h2>";

								?>

								<!--Start Company Option Code Test-->

								<?php
												if(($_SESSION['u_type']=='company'))
													{
															echo	'<form class="signup-form" action="includes/companies.php" method="POST" autocomplete="on">';
															echo '	<label for="sel1">Select Company page to EDIT :</label>';
																	  echo ' <select class="form-control" name="compEdit" id="register">';

																		 $sql= "SELECT CompId, CompName FROM itconnect.companies WHERE UserId ='".$_SESSION['u_id']."'" ;
																		 echo $sql;
																		 //echo '<option value="';
																		 mysqli_query($conn, $sql);
																		 $result = $conn->query($sql);
																		 //$row = $result->fetch_assoc();
																		 //print_r($row);
																		 $count=1;
																		 while ($row = $result->fetch_assoc())
																		 {
																			 echo '<option value="'; 
																			 echo $row['CompId'];
																			 echo '">';
																			 echo $row['CompName'];
																			 echo '</option>';
																			 $count++;
																		 }
																	 									if (mysqli_connect_errno())
																	 										{
																	 										echo "Failed to connect to MySQL: " . mysqli_connect_error();
																	 										}

																	 										// Perform a query, check for error
																	 										if (!mysqli_query($conn, $sql))
																	 											{
																	 											echo("Error description: " . mysqli_error($conn));
																	 											}

																		echo ' </select>';
															echo '	<button type="submit" name="submit">Edit Company</button>';
														  echo '</form> ';
														}
															?>
															<!--End Company Test Code-->

															<!--Start View Company Option Code Test-->

															<?php
																			if(($_SESSION['u_type']=='company'))
																				{
																						echo	'<form class="signup-form" action="includes/viewCompanies.php" method="POST" autocomplete="on">';
																						echo '	<label for="sel1">Select Company page to VIEW :</label>';
																								  echo ' <select class="form-control" name="compEdit" id="register">';

																									 $sql= "SELECT CompId, CompName FROM itconnect.companies WHERE UserId ='".$_SESSION['u_id']."'" ;
																									 echo $sql;
																									 //echo '<option value="';
																									 mysqli_query($conn, $sql);
																									 $result = $conn->query($sql);
																									 //$row = $result->fetch_assoc();
																									 //print_r($row);

																									 while ($row = $result->fetch_assoc())
																									 {
																										 echo '<option value="';
																										 echo $row['CompId'];
																										 echo '">';
																										 echo $row['CompName'];
																										 echo '</option>';

																									 }
																								 									if (mysqli_connect_errno())
																								 										{
																								 										echo "Failed to connect to MySQL: " . mysqli_connect_error();
																								 										}

																								 										// Perform a query, check for error
																								 										if (!mysqli_query($conn, $sql))
																								 											{
																								 											echo("Error description: " . mysqli_error($conn));
																								 											}

																									echo ' </select>';
																						echo '	<button type="submit" name="submit">View Company</button>';
																					  echo '</form> ';
																					}
																						?>
																						<!--End View Company Test Code-->



								<?php

								echo '<form action="includes\userFirstName.php" method="POST" autocomplete="on"> ';
				        echo '<div class="form-group">';
				        echo '<label>First Name</label>';
 							  echo '<input type="text" class="form-control" name="FirstName" placeholder="Change First Name: '.$_SESSION['u_first'].'">';
								echo '<button type="submit" name="submit">Change</button>';
								echo '</form>';
				        echo '</div>';

								echo '<form action="includes\userLastName.php" method="POST" autocomplete="on"> ';
				        echo '<div class="form-group">';
				        echo '<label>Surname</label>';
 							  echo '<input type="text" class="form-control" name="LastName" placeholder="Change Surname: '.$_SESSION['u_last'].'">';
								echo '<button type="submit" name="submit">Change</button>';
								echo '</form>';
				        echo '</div>';

								echo '<form action="includes\userEmail.php" method="POST" autocomplete="on"> ';
				        echo '<div class="form-group">';
				        echo '<label>Email</label>';
 							  echo '<input type="text" class="form-control" name="Email" placeholder="Change Email: '.$_SESSION['u_email'].'">';
								echo '<button type="submit" name="submit">Change</button>';
								echo '</form>';
				        echo '</div>';

								echo '<form action="includes\userCompany.php" method="POST" autocomplete="on"> ';
				        echo '<div class="form-group">';
				        echo '<label>Company</label>';
								$sql= "SELECT UserCompany FROM itconnect.users WHERE UserId = '".$_SESSION['u_id']."'";
								mysqli_query($conn, $sql);
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
								//print_r($row);
								$userCompany=$row['UserCompany'];
 							  echo '<input type="text" class="form-control" name="Company" placeholder="Change Company: '.$userCompany.'">';
								echo '<button type="submit" name="submit">Change</button>';
								echo '</form>';
				        echo '</div>';

								echo '<form action="includes\userAddress.php" method="POST" autocomplete="on"> ';
				        echo '<div class="form-group">';
				        echo '<label>Address</label>';
								$sql= "SELECT UserAddress FROM itconnect.users WHERE UserId = '".$_SESSION['u_id']."'";
								mysqli_query($conn, $sql);
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
								//print_r($row);
								$userAddress=$row['UserAddress'];
 							  echo '<input type="text" class="form-control" name="Address" placeholder="Change Address: '.$userAddress.'">';
								echo '<button type="submit" name="submit">Change</button>';
								echo '</form>';
				        echo '</div>';

								echo '<form action="includes\UserContactNo.php" method="POST" autocomplete="on"> ';
				        echo '<div class="form-group">';
				        echo '<label>Contact Number</label>';
								$sql= "SELECT UserContactNo FROM itconnect.users WHERE UserId = '".$_SESSION['u_id']."'";
								mysqli_query($conn, $sql);
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
								//print_r($row);
								$userContact=$row['UserContactNo'];
 							  echo '<input type="text" class="form-control" name="Contact" placeholder="Change Contact Number Max 15 Chars: '.$userContact.'">';
								echo '<button type="submit" name="submit">Change</button>';
								echo '</form>';
				        echo '</div>';

								echo '<form action="includes\UserAboutMe.php" method="POST" autocomplete="on"> ';
				        echo '<div class="form-group">';
				        echo '<label>About Me</label>';
								$sql= "SELECT UserAboutMe FROM itconnect.users WHERE UserId = '".$_SESSION['u_id']."'";
								mysqli_query($conn, $sql);
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
								//print_r($row);
								$userAboutMe=$row['UserAboutMe'];
 							  //echo '<input type="text" class="form-control" rows="6" name="Aboutme" placeholder="Change About Me: '.$userAboutMe.'">';
								echo '<textarea class="form-control" rows="6" name="Aboutme" placeholder="Change About Me: '.$userAboutMe.'"></textarea>';
								echo '<button type="submit" name="submit">Change</button>';
								echo '</form>';
				        echo '</div>';

							?>



<?php
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
