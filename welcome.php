

<?php



session_start();

$username = $_SESSION['username'];
//$email = $_SESSION['email'];



?>







<!DOCTYPE html>
<html>
<head>
	<title>PHP SESSION</title>




<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<style>
	
.hv {

  transition: transform .2s; /* Animation */
  width: 170px;
 /* height: 200px; */
  margin: 0 auto;
}


.hv:hover {
  transform: scale(1.4); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

</style>

</head>
<body>

<div class="jumbotron jumbotron-fluid" align="center">
	<h1>PRACTICAL EXAM 1</h1>
	<h2> Welcome user :

		<?php
		echo '<br>';
		echo $username .'<br>';
		//echo $email;
		echo '<br>'; 
		
		?>

	</h2>
	
		<div class="container" style="background-color: lightblue; width: 630px;
		height: 230px; align-items: center; padding: 10px" >
		<div class="container" style="background-color: green; width: 200px; height: 200px; float: left;" >
			<a href="https://www.w3schools.com/css/css_grid.asp">
			<img class="hv" width="170px" alt="pix1" src="koala.jpg">
			</a>
		</div>

		<div class="container" style="background-color: grey; width: 200px; height: 200px; float: left;"  >
			<a href="https://getbootstrap.com/docs/4.0/components/buttons/">
			<img class="hv" width="170px" alt="pix1" src="penguins.jpg">
			</a>
		</div>

		<div class="container" style="background-color: teal; width: 200px; height: 200px; float: left; " >
			<a href="https://css-tricks.com/snippets/css/scale-on-hover-with-webkit-transition/">
			<img class="hv" width="170px" alt="pix1" src="jellyfish.jpg">
			</a>
		</div>
		</div>

		

		<div class="container">
			
			<br>
			<br>
			<a href="login.php">
			<h2>Click here to Log-Out</h2>
			</a>

		</div>

</div>




</body>
</html>