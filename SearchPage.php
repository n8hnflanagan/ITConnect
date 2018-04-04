<?php 
	include_once 'header.php';
	
	
?>
	
	
<div class="container">
	<div class="row">
				<div class="search-heading">
					<img class="center" class="img-responsive" src="PrototypeImages/ITConnectBlue.png" alt="IT Connect Logo" width="100" height="100">
				<h3> <b>Search</b></h3>
				</div>
	</div>
</div>	


<div class="container">
    <div class="row">
	</br>
    <form action="searchresults.php" method="POST">
        <input type="text" name="query" />
        <input type="submit" value="Search" />
    </form>
	</div>
</div>	
<!--
	
<div class="container">
		<div class="row">
				<div class="search-results">
					<h4>Insert Search Results</h4>
				</div>
		</div>
</div>

<div class="container">
		<div class="row">
				<div class="search-results">
					<h4>Insert Search Results</h4>
				</div>
		</div>
</div>


<div class="container">
		<div class="row">
				<div class="search-results">
					<h4>Insert Search Results</h4>
				</div>
		</div>
</div>
-->

<!-- include this in full website
<div class="container">
		<div class="row">
			<div class="extra-search-pages">
				<p><a>1</a> <a href=1>2</a> <a href=1>3</a> <a href=1>4</a> 
				<a href=1>5</a> <a href=1>...</a></p>
			</div>
		</div>
</div>
-->
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
