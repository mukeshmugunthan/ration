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
			<div class="col-sm-4 col-md-4 col-lg-4"></div>

			<div class="col-sm-4 col-md-4 col-lg-4" style="padding-top: 60px">
			<form method="post" action="stocksuccess.php">
				<div class="form-group" style="font-size:18px">
					<?php echo $_SESSION['shopno']; ?>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="rice1" id="rice1" placeholder="rice 1" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="rice2" id="rice2" placeholder="rice 2" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="sugar" id="sugar" placeholder="Sugar" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="wheat" id="wheat" placeholder="Wheat" required>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3">
							<input type="submit" name="submit" value="Submit" class="form-control btn btn-login">
						</div>
					</div>
				</div>
			</form>
			</div>
			
			<div class="col-sm-4 col-md-4 col-lg-4"></div>
		</div>
	</div>


</body>
</html>