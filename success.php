

<?php



session_start();

$username = $_SESSION['username'];
$email = $_SESSION['email'];



?>







<!DOCTYPE html>
<html>
<head>
	<title>PHP SESSION</title>




<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



</head>
<body>

<div class="jumbotron jumbotron-fluid" align="center">
	<h1>PRACTICAL EXAM 1</h1>
	<h2> CONGRATULATIONS !!!</h2>
	<h2> Successfully created an account:

		<?php
		echo '<br>';
		echo $username .'<br>';
		echo $email;
		echo '<br>'; 
		
		?>

	</h2>



		<div class="container">
			
			<br>
			<br>
			<a href="login.php">
			<h2>Click here to Log-in</h2>
			</a>

		</div>	



</div>




</body>
</html>