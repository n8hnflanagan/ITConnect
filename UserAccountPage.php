<?php 
	include_once 'header.php';
	
?>
	


<div class="container">
	<div class="row">
				<div class="account-heading">
					<img class="center" class="img-responsive" src="PrototypeImages/ITConnectBlue.png" alt="IT Connect Logo" width="100" height="100">
				<h3> <b>Account</b></h3>

				</div>
	</div>
</div>	
	

<div class="container">
	<div class="row">
		<div class = "profile-photo" >
				<img class="center" class="img-responsive" src="PrototypeImages/WeeDaniel.jpg" alt="Profile Photo" width="130" height="130">
				<h2><b>Daniel O'Donnell</b></h2>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class = "account-form" >
		
				<div class = "main-text">
				<h3>Change Username</h3>
				<form action="action_page.php"> <!--action_page.php doesn't exist..it's just in there as an example. target = "_blank" can be used here to show results on new page (or _self on same page)-->
				Enter new username:<br>
				<input type = "text" required name="new-username"> 
				<input type = "submit" value = "Submit">
				</form>
				<br>
				<h3>Change Password</h3>
				<form action="action_page.php"> <!--action_page.php doesn't exist..it's just in there as an example. target = "_blank" can be used here to show results on new page (or _self on same page)-->
				Enter current password:<br>
				<input type = "text" required name="current-password"> 
				<br>
				Enter new password:<br>
				<input type = "text" required name="new-password"> 
				<br>
				Confirm new password:<br>
				<input type = "text" required name="confirm-new-password"> 
				<br>
				<input type = "submit" value = "Submit">
				</form>
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


