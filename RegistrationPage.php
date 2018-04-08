<?php
	include_once 'header.php';

?>

<div class="container">
	<div class="row">
				<div class="register-heading">
					<img class="center" class="img-responsive" src="PrototypeImages/ITConnectBlue.png" alt="IT Connect Logo" width="100" height="100">
				<h3> <b>Sign-up</b></h3>
				</div>
	</div>
</div>



<div class="container">
	<div class="row">
		<div class="register-form">
			<section>
                <div id="register" class="animate form">


			<form class="signup-form" action="includes/signup.inc.php" method="POST" autocomplete="on">
				<input type="text" name="UserFirstName" placeholder="UserFirstName"><br/>
				<input type="text" name="UserLastName" placeholder="UserLastName"><br/>
				<input type="text" name="UserEmail" placeholder="E-mail"><br/>
				<input type="text" name="UserAddress" placeholder="Address"><br/>
				<input type="text" name="UserName" placeholder="UserName"><br/>
				<input type="text" name="UserPwd" placeholder="Password"><br/>
				<input type="text" name="ConfUserPwd" placeholder="Confirm Password"><br/>
				<label for="sel1">Select User Type:</label>
					   <select class="form-control" name="selType" id="register">
							 <option value="standard">Standard</option>
							 <option value="company">Company</option>
						 </select>
				<button type="submit" name="submit">SignUp</button>
		  </form>

                </div>
            </section>
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
