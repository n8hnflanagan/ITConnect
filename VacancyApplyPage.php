<?php 
	include_once 'header.php';
	
?>
	
	
	
<div class="container">
	<div class="row">
				<div class="vacancy-apply-heading">
					<img class="center" class="img-responsive" src="PrototypeImages/ITConnectBlue.png" alt="IT Connect Logo" width="100" height="100">
				<h3><b>Vacancy Application</b></h3>
				</div>
	</div>
</div>
	


<div class="container">
		<div class="row">
				<div class="application">
					  <form>
					  	<fieldset>
							<legend>Your Application</legend>
							<div class="form-group">
							  <label>Name</label>
							  <input type="text" class="form-control" placeholder="Add Name" pattern="[A-Z][a-z]{26}">
							</div>

							<div class="form-group">
							  <label>Email</label>
							  <input type="email" class="form-control" placeholder="Add Email">
							</div>

							<div class="form-group">
							  <label>Cover Letter</label>
							  <textarea class="form-control" placeholder="Add Cover Letter"></textarea>
							</div>

							<div class="form-group">
							  <label>Upload CV</label>
							  <input type="file">
							  <p class="help-block">Only PDF allowed</p>
							</div>

							<button type="submit" class="btn btn-default">Submit</button>
						</form>
					</fieldset>
					<br>

					<p><a href="VacancyViewPage.php">Return to view vacancy</a></p>
				</div>
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
