<?php
include_once 'header.php';
include_once 'includes/dbh.inc.php';


	if( empty($_SESSION['comp_id']))
		{header("Location: index.php?companynotloggedin");
		exit();
  }else{
				$sql5="SELECT VacTitle, VacDescription, VacLocation, VacDatePosted, VacClosureDate FROM itconnect.vacancies WHERE CompId =".$_SESSION['comp_id'].";";
				//echo $sql5;
					mysqli_query($conn, $sql5);
					$result = $conn->query($sql5);
					//$row = $result->fetch_assoc();
					//print_r($row);
					$count=1;
					while ($row = $result->fetch_assoc())
						{
							echo '<div class="container">
										 <div class="row">
											<div class = "profile-photo" >';
												echo "<h3>Vacancy: ".$count."</h3>";
										    echo '<form action="includes\editCurrVacancies.php" method="POST" autocomplete="on"> ';
											    echo '<div class="form-group">';
											    echo '<label>Vacancy Title</label>';
											    //$sql= "SELECT VacTitle FROM itconnect.vacancies WHERE CompId = '".$_SESSION['comp_id']."'";
											    //mysqli_query($conn, $sql);
											    //$result = $conn->query($sql);
											    //$row = $result->fetch_assoc();
											    //print_r($row);
											    $vacTitle=$row['VacTitle'];
											    echo '<input type="text" class="form-control" name="Company" placeholder="Change Company: '.$vacTitle.'">';
											    echo '</div>';


											    echo '<div class="form-group">';
											    echo '<label>Vacancy Description</label>';
											    //$sql= "SELECT VacDescription FROM itconnect.vacancies WHERE CompId = '".$_SESSION['comp_id']."'";
													//echo $sql;
											    //mysqli_query($conn, $sql);
											    //$result = $conn->query($sql);
											    //$row = $result->fetch_assoc();
											    //print_r($row);
											    $vacDesc=$row['VacDescription'];
											    echo '<input type="text" class="form-control" name="Address" placeholder="Change Address: '.$vacDesc.'">';
											    echo '</div>';


											    echo '<div class="form-group">';
											    echo '<label>Vacancy Location</label>';
											    //$sql= "SELECT VacLocation FROM itconnect.vacancies WHERE CompId = '".$_SESSION['comp_id']."'";
											    //mysqli_query($conn, $sql);
											    //$result = $conn->query($sql);
											    //$row = $result->fetch_assoc();
											    //print_r($row);
											    $vacLoc=$row['VacLocation'];
											    echo '<input type="text" class="form-control" name="Contact" placeholder="Change Contact Number Max 15 Chars: '.$vacLoc.'">';
											    echo '</div>';


											    echo '<div class="form-group">';
											    echo '<label>Vacancy Date Posted</label>';
											    //$sql= "SELECT VacDatePosted FROM itconnect.vacancies WHERE CompId = '".$_SESSION['comp_id']."'";
											    //mysqli_query($conn, $sql);
											    //$result = $conn->query($sql);
											    //$row = $result->fetch_assoc();
											    //print_r($row);
											    $vacDatePosted=$row['VacDatePosted'];
											    //echo '<input type="text" class="form-control" rows="6" name="Aboutme" placeholder="Change About Me: '.$userAboutMe.'">';
											    echo '<input type="date" class="form-control" name="Contact" placeholder="Change Contact Number Max 15 Chars: '.$vacLoc.'">';
													echo '</form>';
											    echo '</div>';

													echo '<div class="form-group">';
											    echo '<label>Vacancy Closure Date</label>';
											    //$sql= "SELECT VacClosureDate FROM itconnect.vacancies WHERE CompId = '".$_SESSION['comp_id']."'";
											    //mysqli_query($conn, $sql);
											    //$result = $conn->query($sql);
											    //$row = $result->fetch_assoc();
											    //print_r($row);
											    $vacClosureDate=$row['VacClosureDate'];
											    //echo '<input type="text" class="form-control" rows="6" name="Aboutme" placeholder="Change About Me: '.$userAboutMe.'">';
											    echo '<input type="date" class="form-control" name="Contact" placeholder="Change Contact Number Max 15 Chars: '.$vacClosureDate.'">';
													echo '</form>';
											    echo '</div>';

													echo '<input type="file"  name="file">';
													echo '<button type="submit" name="submit">Submit</button>';
													echo '</form>';
													echo '</div>';

							echo '</div">
									</div>
								</div>';
			    		$count++;
				}
				include_once 'footer.php';
    }
