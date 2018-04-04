<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content=""> <!-- Carl - need to customise all these -->
    <meta name="Group2" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>ITConnect</title>
	<!-- Custom styles for UserProfile page-->
    <link href="UserProfilePage.css" rel="stylesheet">

	<!-- Custom styles for this template -->
    <link href="VacancyApplyPage.css" rel="stylesheet">

	<!-- Custom styles for VacancyView Page -->
    <link href="VacancyViewPage.css" rel="stylesheet">

	<!-- Custom styles for CompanyProfile -->
    <link href="CompanyProfilePage.css" rel="stylesheet">

	<!-- Custom styles for Connections page -->
    <link href="ConnectionsPage.css" rel="stylesheet">

	<!-- Custom styles for Vacancies page -->
    <link href="VacanciesPage.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="BootstrapRepository/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="BootstrapRepository/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for Login Page -->
    <link href="LogInPage.css" rel="stylesheet">

	<!-- Custom styles for User Account page -->
    <link href="UserAccountPage.css" rel="stylesheet">

	 <!-- Custom styles for SearchPage -->
    <link href="SearchPage.css" rel="stylesheet">

	<!-- Custom styles for Registration Page -->
    <link href="RegistrationPage.css" rel="stylesheet">

	<!-- Custom styles for Homepage -->
    <link href="HomePage.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="BootstrapRepository/docs/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <header>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="HomePage.php"><img src="PrototypeImages/ITConnectBlue.png" alt="IT Connect Logo" width="30" height="30"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
			<li><a href="UserProfilePage.php">My Profile</a></li>
			<li><a href="ConnectionsPage.php">Connections</a></li>
			<li><a href="VacanciesPage.php">Vacancies</a></li>
            <li><a href="CompanyProfilePage.php">Companies</a></li>
			<li><a href="SearchPage.php">Search</a></li>
			<li><a href="UserAccountPage.php">Account</a></li>
			<li><a href="index.php">Log in or out </a></li>
			<li><a href="RegistrationPage.php">Sign-up</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	</header>
