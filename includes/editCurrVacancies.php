<?php
session_start();

if (isset($_POST['submit']))
	{

		include_once 'dbh.inc.php';

		$vacTitle = mysqli_real_escape_string($conn, $_POST['VacTitle']);
    $vacDesc = mysqli_real_escape_string($conn, $_POST['VacDesc']);
    $vacLoc = mysqli_real_escape_string($conn, $_POST['VacLocation']);
    $vacDatePosted = mysqli_real_escape_string($conn, $_POST['VacDatePosted']);
    $vacClosureDate = mysqli_real_escape_string($conn, $_POST['VacClosureDate']);
		//$userId = $_SESSION['u_id'];


    		//Check for empty fields Update if not empty
    		if ( !($vacTitle==0) )
    		{
          $vacTitle = mysqli_real_escape_string($conn, $_POST['VacTitle']);
          $sql = "UPDATE vacancies SET VacTitle='".$vacTitle."' WHERE CompId ='".$_SESSION['comp_id']."';";
    			// Perform a query, check for error
    			if (!mysqli_query($conn, $sql))
    			  {
    			  echo("Error description: " . mysqli_error($conn));
    			  }
    			mysqli_query($conn, $sql);
    			//header("Location: ../UserAccountPage.php?changefirstname=success");
    			mysqli_close($conn);
    			//exit();
    		}

        //Check for empty fields Update if not empty
    		if ( !($vacDesc==0) )
    		{
          $sql = "UPDATE vacancies SET VacDesc='".$vacDesc."' WHERE CompId ='".$_SESSION['comp_id']."';";
    			// Perform a query, check for error
    			if (!mysqli_query($conn, $sql))
    			  {
    			  echo("Error description: " . mysqli_error($conn));
    			  }
    			mysqli_query($conn, $sql);
    			//header("Location: ../UserAccountPage.php?changefirstname=success");
    			mysqli_close($conn);
    			//exit();
    		}

        //Check for empty fields Update if not empty
    		if ( !($vacLoc==0) )
    		{
          $sql = "UPDATE vacancies SET VacLocation='".$vacLoc."' WHERE CompId ='".$_SESSION['comp_id']."';";
    			// Perform a query, check for error
    			if (!mysqli_query($conn, $sql))
    			  {
    			  echo("Error description: " . mysqli_error($conn));
    			  }
    			mysqli_query($conn, $sql);
    			//header("Location: ../UserAccountPage.php?changefirstname=success");
    			mysqli_close($conn);
    			//exit();
    		}

        //Check for empty fields Update if not empty
    		if ( !($vacDatePosted==0) )
    		{
          $sql = "UPDATE vacancies SET VacDatePosted='".$vacDatePosted."' WHERE CompId ='".$_SESSION['comp_id']."';";
          echo $sql;
    			// Perform a query, check for error
    			if (!mysqli_query($conn, $sql))
    			  {
    			  echo("Error description: " . mysqli_error($conn));
    			  }
    			mysqli_query($conn, $sql);
    			//header("Location: ../UserAccountPage.php?changefirstname=success");
    			mysqli_close($conn);
    			//exit();
    		}

        if ( !($vacClosureDate==0) )
    		{
          $sql = "UPDATE vacancies SET VacClosureDate='".$vacClosureDate."' WHERE CompId ='".$_SESSION['comp_id']."';";
    			// Perform a query, check for error
    			if (!mysqli_query($conn, $sql))
    			  {
    			  echo("Error description: " . mysqli_error($conn));
    			  }
    			mysqli_query($conn, $sql);
    			//header("Location: ../UserAccountPage.php?changefirstname=success");
    			mysqli_close($conn);
    			//exit();
    		}
        header("Location: ../CompanyAccountPage.php?currvacancyupdate=success");

  } else{

				header("Location: ../CompanyAccountPage.php?PostSubmit");
				mysqli_close($conn);
				exit();
			} //End check if email valid
			?>
