<?php
	include_once 'header.php';
	include_once 'includes/dbh.inc.php';
	if( empty($_SESSION['comp_id']))
		{header("Location: index.php?compnotloggedin");
		exit();
		}
		//echo $_SESSION['comp_id'];
?>




<div class="container">
		<div class="row">
				<div class="cover-photo">
					<?php
					$sql= "SELECT CompCoverPhotoFileLocation FROM itconnect.companies WHERE CompId =".$_SESSION['comp_id'].";";
					mysqli_query($conn, $sql);
					$result = $conn->query($sql);
					$row = $result->fetch_assoc();
					//print_r($row);
					$compPicLocation=$row['CompCoverPhotoFileLocation'];
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
					<img class="center" class="img-responsive"  src="<?php  echo $compPicLocation ?>" alt="Cover Photo" height="200">';

				</div>
			</div>
		</div>




<div class="container">
	<div class="row">
				<div class="company-logo">
					<?php
					$sql= "SELECT CompPhotoFileLocation FROM itconnect.companies WHERE CompId =".$_SESSION['comp_id'].";";
					mysqli_query($conn, $sql);
					$result = $conn->query($sql);
					$row = $result->fetch_assoc();
					//print_r($row);
					$compPicLocation=$row['CompPhotoFileLocation'];
					//echo $compPicLocation;
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
										//Assign Company name variable
										$sql2= "SELECT CompName FROM itconnect.companies WHERE CompId =".$_SESSION['comp_id'].";";

										mysqli_query($conn, $sql2);
										$result = $conn->query($sql2);
										$row = $result->fetch_assoc();
										//print_r($row);
										$compName=$row['CompName'];
										//echo $compPicLocation;
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

												$sql3= "SELECT CompAbout FROM itconnect.companies WHERE CompId =".$_SESSION['comp_id'].";";

												mysqli_query($conn, $sql3);
												$result = $conn->query($sql3);
												$row = $result->fetch_assoc();
												//print_r($row);
												$compAbout=$row['CompAbout'];

												$sql4= "SELECT CompAddress FROM itconnect.companies WHERE CompId =".$_SESSION['comp_id'].";";

												mysqli_query($conn, $sql4);
												$result = $conn->query($sql4);
												$row = $result->fetch_assoc();
												//print_r($row);
												$compAddress=$row['CompAddress'];


					 ?>
					<img class="center" class="img-responsive" src="<?php  echo $compPicLocation ?>" alt="Company Logo" width="100" height="100">

					<h3><b><?php  echo $compName ?> </b></h3>

					<p> <?php  echo $compAddress ?> </p>
				</div>
	</div>
</div>



<div class="container">
	<div class="row">
			<div class="current-vacancies">
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
							echo "<br/>";
							// do stuff with $row
					}
				 ?>
			</div>
	</div>
</div>


<div class="container">
		<div class="row">
				<div class="company-overview">
					<h3><b>Company Overview<b></h3>
					<p> <?php  echo $compAbout ?> </p>
					<br>
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
