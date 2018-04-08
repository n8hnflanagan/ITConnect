<?php
	include_once 'header.php';
	include_once 'includes/dbh.inc.php';
	if( empty($_SESSION['u_first']))
		{header("Location: index.php?notloggedin");
		exit();
		}
?>

<!--Start CoverPhoto(Background photo) Picture Code-->
<?php
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



<div class="container">
	<div class="row">
				<div class="profile-photo">
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

					<?php
					echo	"<h3><b>".$_SESSION['u_first']." ".$_SESSION['u_last']. "</b></h3>";

					$sql= "SELECT JobHistPosition FROM jobhistory WHERE UserId ='".$_SESSION['u_id']."' && JobHistToDate is NULL;";
					//echo $sql;
					mysqli_query($conn, $sql);
					$result = $conn->query($sql);
					$row = $result->fetch_assoc();
					//print_r($row);
					$userCurrJob=$row['JobHistPosition'];
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

					$sql= "SELECT UserCompany FROM users WHERE UserId ='".$_SESSION['u_id']."';";
					//echo $sql;
					mysqli_query($conn, $sql);
					$result = $conn->query($sql);
					$row = $result->fetch_assoc();
					//print_r($row);
					$userCurrCompany=$row['UserCompany'];
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

					$sql= "SELECT UserAddress FROM users WHERE UserId ='".$_SESSION['u_id']."';";
					//echo $sql;
					mysqli_query($conn, $sql);
					$result = $conn->query($sql);
					$row = $result->fetch_assoc();
					//print_r($row);
					$userCurrAddress=$row['UserAddress'];
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

					?>
					<p><?php echo $userCurrJob ?>  <br> <?php echo $userCurrCompany ?> <br> <?php echo $userCurrAddress ?> </p>
					<p>UserType: <?php echo $_SESSION['u_type'] ?>  <br>

				</div>
	</div>
</div>



<!-- <img class="center" class="img-responsive"  src="<?php // echo $userPicLocation ?>" alt="Profile Photo" width="100" height="100">'; -->





<!-- add this after prototype meeting - links to skip directly to the relevant section on the page
<div class="container">
	<div class="row">
		<div class="profile-menu">
				<div class="col-md-4">
					<div class="employment-history-menu">
						<a class="text-muted" style="text-decoration:none" href="BlankLinksLandingPage.html">Employment History</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="qualifications-menu">
						<a class="text-muted" style="text-decoration:none" href="BlankLinksLandingPage.html">Qualifications</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="skills-menu">
						<a class="text-muted" style="text-decoration:none" href="BlankLinksLandingPage.html">Skills</a>
					</div>
				</div>
		</div>
	</div>
</div>
-->


<div class="container">
	<div class="row">
			<div class="vacs-and-conns">
				<div class="col-md-6">
					<div class="sample-connections">
						<h4> Your Connections</h4>
						<hr>
						<?php
						$sql= "SELECT DISTINCT users.UserFirstName, users.UserLastName FROM users,connections WHERE users.UserId IN (SELECT userId_1 FROM connections WHERE UserId='".$_SESSION['u_id']."')" ;
						//echo $sql;
						//$sql= "SELECT UserId FROM users WHERE UserId ='".$_SESSION['u_id']."';";
						//echo $sql;
						mysqli_query($conn, $sql);
						$result = $conn->query($sql);
						//$row = $result->fetch_assoc();
						//print_r($row);
						while ($row = $result->fetch_assoc())
						  {
							    echo $row['UserFirstName'] ;
									echo " ";
									echo $row['UserLastName'];
									echo "<br/>";
							    // do stuff with $row
							}
						//print_r($row);
						//$userCurrAddress=$row['UserAddress'];
						//print_r($row);
									if (mysqli_connect_errno())
										{
										echo "Failed to connect to MySQL: " . mysqli_connect_error();
										}

										// Perform a query, check for error
										if (!mysqli_query($conn, $sql))
											{
											echo("Error description: " . mysqli_error($conn));
											} ?>
					</div>
				</div>

			</div>
	</div>
</div>

<div class="container">
		<div class="row">
			<div class="vacs-and-conns">
				<div class="col-md-6">
					<div class="sample-vacancies">
						<h4> Suggested Vacancies </h4>
						<hr>
				<?php	$sql=	"SELECT vacancies.VacTitle,vacancies.VacDescription,vacancies.VacRequiredexp,vacancies.VacStatus,
											vacancies.VacLocation,
											vacancies.VacSalary,
											vacancies.VacDisplay,
											vacancies.VacDatePosted,
											vacancies.VacExpLevel,
											companies.CompName
										  FROM
											itconnect.vacancies vacancies,
											itconnect.companies companies,
											itconnect.skillsforvacancy skillsforvacancy,
											itconnect.userskills userskills
										  WHERE
											vacancies.VacanciesId = skillsforvacancy.VacanciesId AND
											vacancies.CompId = companies.CompId AND
											skillsforvacancy.SkillsId = userskills.SkillsId AND
											userskills.UserId = '".$_SESSION['u_id']."' ";
							//echo $sql;
							//echo '<br/>';
							mysqli_query($conn, $sql);
							$result = $conn->query($sql);
							//$row = $result->fetch_assoc();
							//print_r($row);
							while ($row = $result->fetch_assoc())
							  {
								    echo "JobTitle".$row['VacTitle']."" ;
										echo " ";
										echo $row['VacDescription'];
										echo "<br/>";
								    // do stuff with $row
								}
	       ?>


					</div>
				</div>
			</div>
		</div>
</div>

<div class="container">
		<div class="row">
				<div class="profile-information">
					<h3><b>About Me:<b></h3>
				<?php
				$sql= "SELECT UserAboutMe FROM users WHERE UserId ='".$_SESSION['u_id']."';";
				//echo $sql;
				mysqli_query($conn, $sql);
				$result = $conn->query($sql);
				$row = $result->fetch_assoc();
				//print_r($row);
				$userAboutMe=$row['UserAboutMe'];
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
				?>
					<p class="text-justify"><?php echo $userAboutMe ?> </p>
					<br>
					<hr>
					<h3><b>Employment History</b></h3>
					<?php
							$sql= "SELECT
							jobhistory.JobHistFromDate,
							jobhistory.JobHistToDate,
							jobhistory.JobHistPosition,
							jobhistory.JobHistPosDesc,
							companies.CompName
						FROM
							itconnect.jobhistory jobhistory,
							itconnect.companies companies
						WHERE
							jobhistory.CompId = companies.CompId AND
							jobhistory.UserId = '".$_SESSION['u_id']."'
						";
						mysqli_query($conn, $sql);
						$result = $conn->query($sql);
						//$row = $result->fetch_assoc();
						//print_r($row);
						while ($row = $result->fetch_assoc())
							{
									echo "<h5><b>Position: </b><br>".$row['JobHistPosition']."</h5>" ;
									echo "<h5><b>Company: </b><br>".$row['CompName']."</h5>" ;
									//echo "<h5><b>CheckJHTODateNullValue: </b>".$row['JobHistToDate']."</h5></br>" ;
									echo "<h5><b>Dates of Employment: </b><br>".$row['JobHistFromDate']. " - ";
									if(empty($row['JobHistToDate'])){echo "Present";}else{
																																				echo $row['JobHistToDate'];
																																				}"</h5>" ;
									echo "<br>";
									echo " --------------------------------------------------------------------";
									//echo $row['VacDescription'];

									// do stuff with $row
							}
					?>

					<h3><b>Qualifications<b></h3>
						<?php
								$sql= "SELECT
												UserQualInst,
												UserQualDesc,
												UserQualCompletionDate,
												UserQualModules,
												UserQualificationGrade
											FROM
												itconnect.userqualification
											WHERE
												UserId = '".$_SESSION['u_id']."'	";
								//echo $sql;
								mysqli_query($conn, $sql);
								$result = $conn->query($sql);
								//$row = $result->fetch_assoc();
								//print_r($row);
								while ($row = $result->fetch_assoc())
									{
											echo "<h5><b>Institution: </b><br>".$row['UserQualInst']."</h5>" ;
											echo "<h5><b>Qualification: </b><br>".$row['UserQualDesc']."</h5>" ;
											//echo "<h5><b>CheckJHTODateNullValue: </b>".$row['JobHistToDate']."</h5></br>" ;
											echo "<h5><b>Date of Completion: </b><br/>".$row['UserQualCompletionDate']. "</h5>";
											echo "<p class=\"text-justify\"<b>Modules included: <br>".$row['UserQualModules']."</b></p>" ;

											echo "<br>";
											echo " --------------------------------------------------------------------";
											//echo $row['VacDescription'];

											// do stuff with $row
									}

						?>


					<h3><b>Skills<b></h3>
						<?php
							$sql= "SELECT
											skills.SkillsTitle
										FROM
											itconnect.userskills userskills,
											itconnect.skills skills
										WHERE
											userskills.SkillsId = skills.SkillsId AND
											userskills.UserId = '".$_SESSION['u_id']."' ";
											mysqli_query($conn, $sql);
											$result = $conn->query($sql);
											//$row = $result->fetch_assoc();
											//print_r($row);
											while ($row = $result->fetch_assoc())
												{
														echo $row['SkillsTitle'] ;
														echo '<br/>';
														//echo "<h5><b>Qualification: </b><br>".$row['UserQualDesc']."</h5>" ;
														//echo "<h5><b>CheckJHTODateNullValue: </b>".$row['JobHistToDate']."</h5></br>" ;
														//echo "<h5><b>Date of Completion: </b><br/>".$row['UserQualCompletionDate']. "</h5>";
														//echo "<p class=\"text-justify\"<b>Modules included: <br>".$row['UserQualModules']."</b></p>" ;

														//echo "<br>";
														//echo " --------------------------------------------------------------------";
														//echo $row['VacDescription'];

														// do stuff with $row
												}
						?>

					</div>
				</div>
			</div>
		</div>
</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="BootstrapRepository/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/BootstrapRepository/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
