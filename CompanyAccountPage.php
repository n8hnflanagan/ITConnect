<?php
include_once 'header.php';
include_once 'includes/dbh.inc.php';


	if( empty($_SESSION['comp_id']))
		{header("Location: index.php?company=notloggedin");
		exit();
		}else{


					echo '<div class="container">';
						echo '<div class="row">';
									echo '<div class="account-heading">';
										echo '<img class="center" class="img-responsive" src="PrototypeImages/ITConnectBlue.png" alt="IT Connect Logo" width="100" height="100">';
									echo '<h3> <b>Company Account Page </b></h3>';
                  echo '</div>';
					 	echo '</div>';
					echo '</div>';

          //<!--Start CompCoverPhoto(Background photo) Picture Code-->
					echo '<div class="container">
						     <div class="row">
							     <div class = "profile-photo" >'; ?>

								<?php
                $sql= "SELECT CompCoverPhotoFileLocation FROM companies WHERE CompId ='".$_SESSION['comp_id']."';";
								//echo $sql;
								echo '<img class="center" class="img-responsive"';
								$sql= "SELECT CompCoverPhotoFileLocation FROM companies WHERE CompId ='".$_SESSION['comp_id']."';";
								//echo $sql;
								mysqli_query($conn, $sql);
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
								//print_r($row);
								$compCoverFileLocation=$row['CompCoverPhotoFileLocation'];
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
								echo ' src="'.$compCoverFileLocation.'"'; ?> alt="Background Cover Photo" width="1024" height="200">

								<!-- End  CoverPhoto(Background photo) Picture Code-->

								<?php
								// User Upload Profile picture code start
								echo '<br/>';
								echo '<b>Upload New Comp Cover PhotoBackground Picture</b>';
								echo '<div class="form-group">';
								echo '<form action="includes\CompCoverUpload.php" method="POST" enctype="multipart/form-data" > ';

								echo '<input type="file"  name="file">';
								echo '<button type="submit" name="submit">Upload Profile Pic</button>';
								echo '</form>';
								echo '</div>';
								// User Upload Profile picture code End
								 ?>
               </div>
             </div >
           </div>


								<?php
					//<!--Start Profile Picture Code-->
					echo '<div class="container">
						<div class="row">
							<div class = "profile-photo" >'; ?>

								<?php
								echo '<img class="center" class="img-responsive"';
								$sql= "SELECT CompPhotoFileLocation FROM companies WHERE CompId ='".$_SESSION['comp_id']."';";
								//echo $sql;
								mysqli_query($conn, $sql);
								$result = $conn->query($sql);
								$row = $result->fetch_assoc();
								//print_r($row);
								$compPicLocation=$row['CompPhotoFileLocation'];
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
								echo ' src="'.$compPicLocation.'"'; ?> alt="Profile Photo" width="100" height="100">
								<!-- End profile Picture code -->

								<?php
								// User Upload Profile picture code start
								echo '<br/>';
								echo '<b>Upload New Profile Picture</b>';
								echo '<div class="form-group">';
								echo '<form action="includes\compLogoUpload.php" method="POST" enctype="multipart/form-data" > ';

								echo '<input type="file"  name="file">';
								echo '<button type="submit" name="submit">Upload Profile Pic</button>';
								echo '</form>';
								echo '</div>';
								// User Upload Profile picture code End
								 ?>
               </div>
               </div>
               </div>

                 <div class="container">
                 	<div class="row">
                 			<div class="profile-photo">
                 				<h3> Current Vacancies</h3>
                 				<?php
                 				$sql5="SELECT VacTitle, VacDescription, VacLocation, VacDatePosted, VacClosureDate FROM itconnect.vacancies WHERE CompId =".$_SESSION['comp_id'].";";
                 				mysqli_query($conn, $sql5);
                 				$result = $conn->query($sql5);
                 				//$row = $result->fetch_assoc();
                 				//print_r($row);
                 				while ($row = $result->fetch_assoc())
                 					{
                 							echo "--------------------------------------------------------------------";
                 							echo "<br/>";
                 							echo "<b>Vacancy Title:</b> ".$row['VacTitle']." " ;
                 							echo "<b>Vacancy Description:</b> ".$row['VacDescription']." " ;
                 							echo "<b>Vacancy Location:</b> ".$row['VacLocation']." " ;
                 							echo "<br/>";
                 							echo "<b>Vacancy Date Posted:</b> ".$row['VacDatePosted']." " ;
                 							echo "<b>Vacancy Closure Date:</b> ".$row['VacClosureDate']." " ;
                 							echo " ";
                 							echo "<br/>";
                 							echo "--------------------------------------------------------------------";

                 							// do stuff with $row
                 					}
                          echo '</form>';

                          echo '<div class="form-group">';
        									echo '<form action="editVacancies.php" method="POST" autocomplete="on"> ';
        									echo '<button type="submit" name="submit">Edit Vacancies</button>';
        									echo '</form>';
                          echo '</div>';

                          echo '<div class="form-group">';
        									echo '<form action="newVacancies.php" method="POST" autocomplete="on"> ';
        									echo '<button type="submit" name="submit">New Vacancies</button>';
        									echo '</form>';
                          echo '</div>';
                 				 ?>
                 			</div>
                 	</div>
                 </div>











<?php


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
