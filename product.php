<?php
error_reporting(0);
session_start();
include("connect.php");

$batch=$_SESSION['batch'];
$query="select * from $batch";
$batchsql=mysqli_query($con,$query);

$batchdata=mysqli_fetch_object($batchsql);

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

<div class="container text-center">
	<div class="row">
		<div style="padding-top: 60px">
			<div class="col-md-4 text-center">
				<?php echo $_SESSION['name']; ?>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $_SESSION['cardno']; ?>
			</div>
			<div class="col-md-4 text-center">
				<?php echo $_SESSION['mobile']; ?>
			</div>			
		</div>
		
		<div style="padding-top: 90px">
		
			<form class="form-horizontal" method="post" action="bill.php">
				<div class="form-group">
					<div class="col-md-4"></div>
					<div class="col-md-1">
						<input type="checkbox" id="rice1cb" name="rice1cb">
					</div>	
					<div class="col-md-2 text-left">
    					<label>Rice 1 </label>
    				</div>
    				<div class="col-md-1 text-left">
    					<label><?php echo $batchdata->rice1. " kg"; ?> </label>
    				</div>
				</div>
				
				<div class="form-group">
					<div class="col-md-4"></div>
					<div class="col-md-1">
						<input type="checkbox" id="rice2cb" name="rice2cb">
					</div>	
					<div class="col-md-2 text-left">
    					<label>Rice 2 </label>
    				</div>
    				<div class="col-md-1 text-left">
    					<label><?php echo $batchdata->rice2. " kg"; ?> </label>
    				</div>
				</div>
				
				<div class="form-group">
					<div class="col-md-4"></div>
					<div class="col-md-1">
						<input type="checkbox" id="sugarcb" name="sugarcb">
					</div>	
					<div class="col-md-2 text-left">
    					<label>Sugar </label>
    				</div>
    				<div class="col-md-1 text-left">
    					<label><?php echo $batchdata->sugar. " kg"; ?> </label>
    				</div>
				</div>
				
				<div class="form-group">
					<div class="col-md-4"></div>
					<div class="col-md-1">
						<input type="checkbox" id="wheatcb" name="wheatcb">
					</div>	
					<div class="col-md-2 text-left">
    					<label>Wheat </label>
    				</div>
    				<div class="col-md-1 text-left">
    					<label><?php echo $batchdata->wheat. " kg"; ?> </label>
    				</div>
				</div>
				
				<div class="form-group">
					<div class="col-md-4"></div>
					<div class="col-md-1">
						<input type="checkbox" id="tdcb" name="tdcb">
					</div>	
					<div class="col-md-2 text-left">
    					<label>Thoar Dhall </label>
    				</div>
    				<div class="col-md-1 text-left">
    					<label><?php echo $batchdata->thoardhall. " kg"; ?> </label>
    				</div>
				</div>
				
				<div class="form-group">
					<div class="col-md-4"></div>
					<div class="col-md-1">
						<input type="checkbox" id="udpcb" name="udpcb">
					</div>	
					<div class="col-md-2 text-left">
    					<label>Udp Dhall </label>
    				</div>
    				<div class="col-md-1 text-left">
    					<label><?php echo $batchdata->udpdhall. " kg"; ?> </label>
    				</div>
				</div>
				
				<br><br>
				
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