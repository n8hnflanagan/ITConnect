<?php 
	
	
include_once 'includes/dbh.inc.php';
	




   //$con= mysqli_connect("sql2.freemysqlhosting.net", "sql2225438", "xX6*eN5!") or die("Error connecting to database: ".mysqli_error());
     
    //mysqli_select_db($conn,"itconnect") or die(mysqli_error());
if (isset($_POST['query'])) 
	{
		$query = $_POST['query']; 
		if (empty($query))
			{
			header("Location: searchpage.php?signup=empty");
			exit();
			} else {
				
					 
					$query = htmlspecialchars($query); 
					 
			$raw_results2 = mysqli_query($conn,"SELECT * FROM Companies
						WHERE (`CompName` LIKE '%".$query."%')") or die(mysqli_error($con));
					 
					if(mysqli_num_rows($raw_results2) > 0){
						
						while($results2 = mysqli_fetch_array($raw_results2)){
			/*
			echo '<div style="background:darkorange;display:flex;width:80%;height:170px;border-color:red;border-style:solid;border-width:2px;">
					<div style="margin-left:10px;"><br><img src="companylogo.png" height="135" alt="Profile Icon">
				</div>
				<div style="margin-left:30px;">';

							echo "<h4><u>Company</u></h4>";
							echo "<p><b>Name: </b>".$results2['CompName']." <br> <br>
						 <b>About: </b>".$results2['CompAbout']."<br> <br>
						 <b>Email:</b> ".$results2['CompEmail']."</p>";
							echo '</div></div>';
							*/
			echo '<div class="container">
				  <div class="search-results">';
				  echo "<h4><u>Company</u></h4>";
				  echo "<p><b>Name: </b>".$results2['CompName']." <br> <br>
				  <b>About: </b>".$results2['CompAbout']."<br> <br>
				  <b>Email:</b> ".$results2['CompEmail']."</p>";
				  echo '</div></div>';
					

							
			echo "<br>";
						}
						 }


					$raw_results = mysqli_query($conn,"SELECT * FROM Users
						WHERE (`UserFirstName` LIKE '%".$query."%') OR (`UserLastName` LIKE '%".$query."%') OR (`UserCompany` LIKE '%".$query."%')") or die(mysqli_error($conn));
					 
					if(mysqli_num_rows($raw_results) > 0){
					
						while($results = mysqli_fetch_array($raw_results)){
							
							/*echo '<div style="background:darkorange;display:flex;width:80%;height:170px;border-color:red;border-style:solid;border-width:2px;">
									<div style="margin-left:10px;"><br><img src="icon.png" height="135" alt="Profile Icon">
								</div>
								<div style="margin-left:30px;">';

									echo "<h4><u>User</u></h4>";
											echo "<p><b>Name:</b> ".$results['UserFirstName']." ".$results['UserLastName']."<br> <br>
										 <b>Company: </b>".$results['UserCompany']."<br> <br>
										 <b>Email: </b>".$results['UserEmail']."</p>";
											
							echo '</div></div>';
							echo "<br>";*/
							
				  echo '<div class="container">
				  <div class="search-results">';
				  echo "<h4><u>User</u></h4>";
				  echo "<p><b>Name:</b> ".$results['UserFirstName']." ".$results['UserLastName']."<br> <br>
				  <b>Company: </b>".$results['UserCompany']."<br> <br>
				  <b>Email: </b>".$results['UserEmail']."</p>";
				  echo '</div></div>';
						}
			}

					
					if((mysqli_num_rows($raw_results)<0) OR (mysqli_num_rows($raw_results2)<0)){ 
						echo "No results";
					}
		}
	}else {
		header("Location: ../SearchPage.php?query=notset");
		exit();
		}
		
    include_once 'header.php';
	
?>
<div class="container">
	<div class="row">
				<div class="search-heading">
					<img class="center" class="img-responsive" src="PrototypeImages/ITConnectBlue.png" alt="IT Connect Logo" width="100" height="100">
				<h3> <b>Search Results</b></h3>
				</div>
	</div>
</div>
<br>
</html>