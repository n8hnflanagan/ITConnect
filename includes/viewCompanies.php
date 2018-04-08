<?php
session_start();
if (isset($_POST['submit']))
	{

			include_once 'dbh.inc.php';
      $compIdSel = mysqli_real_escape_string($conn, $_POST['compEdit']);
      //echo $compIdSel;
      $_SESSION['comp_id'] = $compIdSel;
			header("Location: ../CompanyProfilePage.php?view=success");
			exit();
    }else {
			header("Location: ../UserAccountPage.php?company=nofields");
			exit();
			}
 ?>
