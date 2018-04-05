<?php
	include_once 'header.php';

?>

<div class="container">
	<div class="row">
				<div class="login-heading">
					<img class="center" class="img-responsive" src="PrototypeImages/ITConnectBlue.png" alt="IT Connect Logo" width="100" height="100">
				<h3> <b>Log-in or out</b></h3>
				</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="login-form">
		<!-- Nathan, this is the old code so please replace it with new stuff -->
            <section>
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">

															<?php
															if( empty($_SESSION['u_first']))
															{
																echo '<form  action="includes/login.inc.php" method="POST">';
																echo '<p>';
                                    echo '<label for="username" class="uname" data-icon="u" > Your email or username </label>';
                                    echo '<input id="username" name="uid" required="required" type="text" placeholder="myusername or mymail@mail.com"/>';
                                echo '</p>';
                                echo '<p>';
                                    echo '<label for="password" class="youpasswd" data-icon="p"> Your password </label>';
                                    echo '<input id="password" name="pwd" required="required" type="password" placeholder="eg. X8df!90EO" />';
                                echo '</p>';
																echo '<p class="login button">';
																echo '<button type="submit" name="submit">Login</button>';
																echo '<br>';
																echo '</form>';
															}else if( !empty($_SESSION['u_first']))
																			{
																				echo '<form action="includes\logout.inc.php" method="POST" autocomplete="on"> ';
																				echo '<button type="submit" name="submit">Logout</button>';
																				echo '</form>';
																		  }
                      					?>

							</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="RegistrationPage.php" class="to_register">Join us</a>
								</p>

                        </div>
					</div>
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
