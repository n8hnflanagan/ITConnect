<?php 
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>SignUp</h2>
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
			<input type="text" name="UserFirstName" placeholder="UserFirstName">
			<input type="text" name="UserLastName" placeholder="UserLastName">
			<input type="text" name="UserEmail" placeholder="E-mail">
			<input type="text" name="UserAddress" placeholder="Address">
			<input type="text" name="UserName" placeholder="UserName">
			<input type="text" name="UserPwd" placeholder="Password">
			<button type="submit" name="submit">SignUp</button>
		</form>
	</div>
</section>

<?php 
	include_once 'footer.php';
?>
	


</body>
</html>