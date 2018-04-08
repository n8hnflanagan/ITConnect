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
		  $userType = mysqli_real_escape_string($conn, $_POST['selType']);
/*
			$userId=18;
			$sql="SELECT UserId FROM itconnect.users WHERE UserName = '".$userName."' AND UserFirstName = '".$userFirstName."' AND UserLastName = '".$userLastName."' ";
			echo $sql."<br/>";
			$sql2= " INSERT INTO itconnect.companies (CompName, CompAddress, CompEmail, CompContactNum, CompAbout, CompWebsite, UserId, CompPhotoFileLocation, CompProfileVisible, CompAccountActive, CompCoverPhotoFileLocation) VALUES ('company', null, 'null@null.com', null, 'filler random', null, '".$userId."', 'empty', 1, 1, 'empty')";
			echo $sql2;
*/

			//Error Handling
			//Check for empty fields
			if (empty($userFirstName)|| empty($userLastName) || empty($userEmail) || empty($userAddress) || empty($userName) || empty($userPwd) || empty($confuserPwd))
			{
				header("Location: ../signup.php?signup=empty");
				exit();
			} else {
						//Check if input characters are valid
						if (!preg_match("/^[a-zA-Z0-9]*$/", $userFirstName) || !preg_match("/^[a-zA-Z0-9]*$/", $userLastName))
							{
							header("Location: ../RegistrationPage.php?signup=invalid");
							exit();
							} else{
											if($userPwd==$confuserPwd){ //
												//Check if email is valid
														if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL))
															{
															header("Location: ../RegistrationPage.php?signup=email");
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
																				$sql = "INSERT INTO users(`UserName`, `UserFirstName`, `UserLastName`, `UserEmail`, `UserCompany`, `UserAddress`, `UserContactNo`, `UserPwd`, `UserAccountActive`, `UserPictureFileLocation`, `UserHash`, `UserProfileVisible`, `UserCoverPhotoFileLocation`, `UserBannedDateTime`, `UserType`) VALUES ('$userName', '$userFirstName', '$userLastName', '$userEmail', '$userType', '$userAddress', 'null', '$hashedPwd', 1, 'null', 'temp', 1, 'temp', NULL,'".$userType."');";
																				mysqli_query($conn, $sql);
																				if(!($userType='standard')){
																										header("Location: ../CompanytProfilePage.php?signup=success");
																										exit();
																										 }else{
																														 $sql="SELECT UserId FROM itconnect.users WHERE UserName = '".$userName."' AND UserFirstName = '".$userFirstName."' AND UserLastName = '".$userLastName."' ";
																														 mysqli_query($conn, $sql);
																														 $result = $conn->query($sql);
																														 $row = $result->fetch_assoc();
																														 //print_r($row);
																														 $userId=$row['UserId'];


																			                                                //Updates Companies table with blank fields
																															$sql2= " INSERT INTO itconnect.companies (CompName, CompAddress, CompEmail, CompContactNum, CompAbout, CompWebsite, UserId, CompPhotoFileLocation, CompProfileVisible, CompAccountActive, CompCoverPhotoFileLocation) VALUES ('company', null, 'null@null.com', null, 'filler random', null, '".$userId."', 'empty', 1, 1, 'empty')";
																															mysqli_query($conn, $sql2);
																															header("Location: ../CompanyProfilePage.php?signup=success");
																															exit();
																														}
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
