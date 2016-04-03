<?php
session_start();
include("connect.php");

if(isset($_POST['submit']))
{
	$cardno=$_POST['cardno'];
	
	$result=mysqli_query($con,'select * from customer where cardno="'.$cardno.'"');
	
	$data=mysqli_fetch_object($result);
	
	$_SESSION['cardno']=$data->cardno;
	$_SESSION['batch']=$data->batch;
	
}

?>

<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="format-detection" content="telephone=no">
    	<meta name="msapplication-tap-highlight" content="no">

    	<title>Computerized Ration</title>

    	<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Font Awesome Icons -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<!-- Scripts -->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<link href="css/style.css" rel="stylesheet">

	</head>
<body>

<div class="container-fluid text-center">
	<div class="row">
		<div style="padding-top: 60px">
			<form class="form-horizontal" method="post" action="password.php">
				<div class="form-group">
						<label class="control-label col-sm-4 col-md-4 col-lg-4" for="cardno">Password</label>
    				<div class="col-sm-4 col-md-4 col-lg-4">
						<input type="text" class="form-control" name="pwd" id="pwd" placeholder="Password" required>
					</div>
				</div>
				
				<div class="form-group">
					<div class="row">
						<div class="col-sm-5"></div>
						<div class="col-sm-2">
							<input type="submit" name="submit" value="Submit" class="form-control btn btn-login">
						</div>
						<div class="col-sm-5"></div>
					</div>
				</div>
			</form>
		</div>
			
	</div>
</div>


</body>
</html>