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
	
	<!-- Michaela's code for mock up --> 
	
<div class="container">
	<div class="row">
		<div class="register-form">	
			<section>				
                <div id="register" class="animate form">
                            <!--<form  action="includes/signup.inc.php" method="POST" autocomplete="on"> 
                                <p> 
                                    <label for="userfirstname" class="ufname" data-icon="u">Your username</label>
                                    <input id="userfirstname" name="UserFirstName" required="required" type="text" placeholder="FirstName" />
                                </p>
								<p> 
                                    <label for="userlastname" class="ulname" data-icon="u">Your username</label>
                                    <input id="userlastname" name="UserLastName" required="required" type="text" placeholder="LastName" />
                                </p>
                                <p> 
                                    <label for="email" class="youmail" data-icon="e" > Your email</label>
                                    <input id="email" name="UserEmail" required="required" type="email" placeholder="username@hostmail.com"/> 
                                </p>
								<p> 
                                    <label for="useraddress" class="uadd" data-icon="u">Your Address</label>
                                    <input id="useraddress" name="UserAddress" required="required" type="text" placeholder="Address" />
                                </p>
								<p> 
                                    <label for="username" class="uname" data-icon="u">Your username</label>
                                    <input id="username" name="UserName" required="required" type="text" placeholder="Username" />
                                </p>
                                <p> 
                                    <label for="password" class="upasswd" data-icon="p">Your password </label>
                                    <input id="password" name="UserPwd" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                            <!--    <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p> 
                                <p class="signin button"> 
									<button type="submit" name="submit" value="Sign up">Sign Up</button> 
								</p>
                                <p class="change_link">  
									Already a member?
									<a href="index.html" class="to_register"> Go and log in </a>
								</p>
                            </form>-->
							
			<form class="signup-form" action="includes/signup.inc.php" method="POST" autocomplete="on">
			<input type="text" name="UserFirstName" placeholder="UserFirstName"><br/>
			<input type="text" name="UserLastName" placeholder="UserLastName"><br/>
			<input type="text" name="UserEmail" placeholder="E-mail"><br/>
			<input type="text" name="UserAddress" placeholder="Address"><br/>
			<input type="text" name="UserName" placeholder="UserName"><br/>
			<input type="text" name="UserPwd" placeholder="Password"><br/>
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
