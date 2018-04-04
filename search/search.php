<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
</head>
<body><h2>Search Results</h2>
    </div>
<br>


<?php
   $con= mysqli_connect("sql2.freemysqlhosting.net", "sql2225438", "xX6*eN5!") or die("Error connecting to database: ".mysqli_error());
     
    mysqli_select_db($con,"sql2225438") or die(mysqli_error());

    $query = $_GET['query']; 
         
        $query = htmlspecialchars($query); 
         
$raw_results2 = mysqli_query($con,"SELECT * FROM Companies
            WHERE (`CompName` LIKE '%".$query."%')") or die(mysqli_error($con));
         
        if(mysqli_num_rows($raw_results2) > 0){
            
            while($results2 = mysqli_fetch_array($raw_results2)){

echo '<div style="background:darkorange;display:flex;width:80%;height:170px;border-color:red;border-style:solid;border-width:2px;">
      	<div style="margin-left:10px;"><br><img src="companylogo.png" height="135" alt="Profile Icon">
	</div>
	<div style="margin-left:30px;">';

             	echo "<h4><u>Company</u></h4>";
                echo "<p><b>Name: </b>".$results2['CompName']." <br> <br>
			 <b>About: </b>".$results2['CompAbout']."<br> <br>
			 <b>Email:</b> ".$results2['CompEmail']."</p>";
                echo '</div></div>';
echo "<br>";
            }
             }


        $raw_results = mysqli_query($con,"SELECT * FROM Users
            WHERE (`UserFirstName` LIKE '%".$query."%') OR (`UserLastName` LIKE '%".$query."%') OR (`UserCompany` LIKE '%".$query."%')") or die(mysqli_error($con));
         
        if(mysqli_num_rows($raw_results) > 0){
        
            while($results = mysqli_fetch_array($raw_results)){
            	
echo '<div style="background:darkorange;display:flex;width:80%;height:170px;border-color:red;border-style:solid;border-width:2px;">
      	<div style="margin-left:10px;"><br><img src="icon.png" height="135" alt="Profile Icon">
	</div>
	<div style="margin-left:30px;">';

		echo "<h4><u>User</u></h4>";
                echo "<p><b>Name:</b> ".$results['UserFirstName']." ".$results['UserLastName']."<br> <br>
			 <b>Company: </b>".$results['UserCompany']."<br> <br>
			 <b>Email: </b>".$results['UserEmail']."</p>";
                
echo '</div></div>';
echo "<br>";
            }
}

        
        if((mysqli_num_rows($raw_results)<0) OR (mysqli_num_rows($raw_results2)<0)){ 
            echo "No results";
        }

?>
</html>