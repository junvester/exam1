

<?php

if (isset($_POST['submit'])){
	
	session_start();

	$_SESSION['email'] = htmlentities($_POST['email']);
	$_SESSION['username'] = htmlentities($_POST['username']);
	
	//$_SESSION['message'] = htmlentities($_POST['message']);

	header('Location: success.php');
}



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
	<h2> SIGN UP PHP</h2>
	<h2> CONTACT FORM</h2>

		<div class="container">
			
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];


			?>">
				<br><br>

				<div class="form-group">
					<label>FIRST NAME:</label>
					<input type="text" name="fname" class="form-control" value="">
				</div>

				<div class="form-group">
					<label>LAST NAME:</label>
					<input type="text" name="lname" class="form-control" value="">
				</div>


				<div class="form-group">
					<label>EMAIL ADD:</label>
					<input type="text" name="email" class="form-control" value="">
				</div>


				<div class="form-group">
				<label>USER NAME:</label>
				<input type="text" name="username" class="form-control" value="">
				</div>


				<div class="form-group">
				<label>PASSWORD</label>
				<input type="PASSWORD" name="password" class="form-control" value="">
				</div>

				
				<button type="submit" name='submit' class='btn btn-success'>
					CREATE ACCOUNT
				</button>

				<button type="reset" class='btn btn-warning'>
					clear
				</button>

				<a href="login.php">
				<button type="button" class='btn btn-primary'>
				

					EXIT
				</button>
				</a>

			</form>


		</div>	



</div>




</body>
</html>