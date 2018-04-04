<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
		<nav>
			<div class="main-wrapper">
				<ul>
					<li><a href="login.php">Home</a></li>
				</ul>
				<div class="nav-login">
					<?php 
						if (isset($_SESSION['UserName'])) {
							echo '<form action="includes/logout.inc.php" method="POST">
							<button type="submit" name="submit">Logout</button>
							</form>';
							}else {
								echo '<form action="includes/login.inc.php" method="POST">
									<input type="text" name="UserName" placeholder="Username/E-mail">

									<input type="password" name="pwd" placeholder="Password">

									<button type="submit" name="submit">Login</button>
								</form>
								<a href="signup.php">Sign Up</a>';
							}
					?>
					
				</div>
			</div>
		</nav>
</header>