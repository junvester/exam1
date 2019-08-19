

<?php

if (isset($_POST['submit'])){
	
	session_start();
	$_SESSION['username'] = htmlentities($_POST['username']);
	$_SESSION['password'] = htmlentities($_POST['password']);
	//$_SESSION['message'] = htmlentities($_POST['message']);

	header('Location: welcome.php');
}



?>







<!DOCTYPE html>
<html>
<head>
	<meta name="author" content="Junvester">
	<title>PHP SESSION</title>




<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



</head>
<body>

<div class="jumbotron jumbotron-fluid" align="center">
	<h1>PRACTICAL EXAM 1</h1>
	<h2> LOGIN PHP</h2>


		<div class="container">
			
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];


			?>">

				<br><br><br>

				<div class="form-group">
					<label>USER NAME:</label>
					<input type="text" name="username" class="form-control" value="">
				</div>

				<div class="form-group">
					<label>PASSWORD:</label>
					<input type="PASSWORD" name="email" class="form-control" value="">
				</div>
				
				<h4>for new users... please sign up</h4>
				<br>
				<button type="submit" name='submit' class='btn btn-primary'>
					Log-in
				</button>

				<button type="reset" class='btn btn-warning'>
					clear
				</button>

				<a href="signup.php">

				<button type="button" class='btn btn-success'>
					sign up
				</button>

				</a>

			</form>


		</div>	



</div>




</body>
</html>