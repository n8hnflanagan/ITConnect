<?php
	include_once 'header.php';
	include_once 'includes/dbh.inc.php';
	if( empty($_SESSION['u_first']))
		{header("Location: index.php?notloggedin");
		exit();
		}
?>

<div class="container">
		<div class="row">
				<div class="cover-photo">
					<img class="center" class="img-responsive" src="PrototypeImages/sunset4.png" style="background-image"  alt="Cover Photo" width="1024" height="200">
				</div>
			</div>
		</div>
</div>

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
						$sql= "SELECT UserId FROM users WHERE UserId ='".$_SESSION['u_id']."';";
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
											} ?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="sample-vacancies">
						<h4> Suggested Vacancies </h4>
						<hr>
					</div>
				</div>
			</div>
	</div>
</div>

<div class="container">
		<div class="row">
				<div class="profile-information">
					<h3><b>About Me:<b></h3>
					<p class="text-justify"> An experienced software developer with more than 10 years of experience in various industries. Having started his career in quality assurance, he shifted his focus to working with software product companies, primarily in the mobile telecommunications sector to drive technical best practice, and deliver business value. </p>
					<br>
					<hr>
					<h3><b>Employment History</b></h3>
					<h5><b>Position: </b><br> Senior Java Developer</h5>
					<h5><b>Company: </b><br> Avaya</h5>
					<h5><b>Dates of Employment: </b><br> April 2014 - present</h5>
					<br>
					<p class="text-justify"> As a Senior Java Developer, I have worked in the back-end design, development and delivery of their Content Licensing Management suite of web services. Have consistently delivered successful Java software deployments as part of a very successful Agile team using the latest Scrum tools such as Atlassian Jira for ticket and story management, GitHub for collaboration and IntelliJ IDE for code development.
						Completed the development of numerous micro services in conjunction the latest Spring technologies such as Spring Boot, JPA and Spring Security together with REST based web services, JSON, XML, JSP and JavaScript running on a Tomcat platform connecting to an Oracle 11 database. Currently working with cutting edge technologies such as Neo4J graph database, Apache Camel and Hystrix Web service monitoring and the use of Bamboo and Jenkins continuous integration deployment framework. Consistently delivering quality code in a timely manner and worked in tandem with other teams from multiple geographic locations to achieve our success. </p>
					<br><br>

					<h5><b>Position: </b><br> Senior Java Developer</h5>
					<h5><b>Company: </b><br> Avaya</h5>
					<h5><b>Dates of Employment: </b><br> April 2014 - present</h5>
					<br>
					<p class="text-justify"> As a Senior Java Developer, I have worked in the back-end design, development and delivery of their Content Licensing Management suite of web services. Have consistently delivered successful Java software deployments as part of a very successful Agile team using the latest Scrum tools such as Atlassian Jira for ticket and story management, GitHub for collaboration and IntelliJ IDE for code development.
						Completed the development of numerous micro services in conjunction the latest Spring technologies such as Spring Boot, JPA and Spring Security together with REST based web services, JSON, XML, JSP and JavaScript running on a Tomcat platform connecting to an Oracle 11 database. Currently working with cutting edge technologies such as Neo4J graph database, Apache Camel and Hystrix Web service monitoring and the use of Bamboo and Jenkins continuous integration deployment framework. Consistently delivering quality code in a timely manner and worked in tandem with other teams from multiple geographic locations to achieve our success. </p>
					<br><br>
					<hr>

					<h3><b>Qualifications<b></h3>
					<h5><b>Institution: </b><br> University of Limerick</h5>
					<h5><b>Qualification: </b><br> HDip Software Development</h5>
					<h5><b>Dates: </b><br> Sept 2009 - Aug 2010</h5>
					<br>
					<p class="text-justify">Modules included: Programming,Fundamentals of Computer Organisation, Model Driven Development, Development of Information Systems, Database Systems
					</p>
					<br>
					<hr>

					<h3><b>Skills<b></h3>
					<p>Java<br>SQL<br>Agile<br>Project Management<br>
					</p>
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
