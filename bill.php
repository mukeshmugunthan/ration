<?php
session_start();
include("connect.php");
$batch=$_SESSION['batch'];
$query="select * from $batch";
$batchsql=mysqli_query($con,$query);

$batchdata=mysqli_fetch_object($batchsql);

if(isset($_POST['submit']))
{

if(isset($_POST['rice1cb']))
	$rice1=$_POST['rice1cb'];
if(isset($_POST['rice2cb']))
	$rice2=$_POST['rice2cb'];
if(isset($_POST['sugarcb']))
	$sugar=$_POST['sugarcb'];
if(isset($_POST['wheatcb']))
	$wheat=$_POST['wheatcb'];
if(isset($_POST['tdcb']))
	$thoardhall=$_POST['tdcb'];
if(isset($_POST['udpcb']))
	$udpdhall=$_POST['udpcb'];
	
	if($_SESSION['batch']=="batch1")
	{
		$rice1amt=0;
		$rice2amt=0;
		$sugaramt=13.50;
		$wheatamt=20;
		$thoardhallamt=30;
		$udpdhallamt=30;
		
		
		$r1a=$r2a=$sa=$wa=$tda=$uda=0;
		
		if(isset($rice1))
			$r1a=0;
		if(isset($rice2))
			$r2a=0;
		if(isset($sugar))
			$sa=$sugaramt * $batchdata->sugar;
		if(isset($wheat))
			$wa=$wheatamt * $batchdata->wheat;
		if(isset($thoardhall))
			$tda=$thoardhallamt * $batchdata->thoardhall;
		if(isset($udpdhall))
			$uda=$udpdhallamt * $batchdata->udpdhall;
			
		$total = $r1a + $r2a + $sa + $wa + $tda + $uda;
		
	}
	else
	{
		$rice1amt=10;
		$rice2amt=10;
		$sugaramt=13.50;
		$wheatamt=20;
		$thoardhallamt=30;
		$udpdhallamt=30;
		
		$r1a=$r2a=$sa=$wa=$tda=$uda=0;
		
		if(isset($rice1))
			$r1a=$rice1amt * $batchdata->rice1;
		if(isset($rice2))
			$r2a=$rice2amt * $batchdata->rice2;
		if(isset($sugar))
			$sa=$sugaramt * $batchdata->sugar;
		if(isset($wheat))
			$wa=$wheatamt * $batchdata->wheat;
		if(isset($thoardhall))
			$tda=$thoardhallamt * $batchdata->thoardhall;
		if(isset($udpdhall))
			$uda=$udpdhallamt * $batchdata->udpdhall;
			
		$total = $r1a + $r2a + $sa + $wa + $tda + $uda;
	}
	
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
<div class="container text-center">
	<div class="row">
		<div style="padding-top: 60px">
			<div class="col-md-3"></div>
			<div class="col-md-2"><?php echo $_SESSION['name']; ?></div>
			<div class="col-md-2"><?php echo $_SESSION['cardno']; ?></div>
			<div class="col-md-2"><?php echo date('d-F-y'); ?></div>
			<div class="col-md-3"></div>
		</div>
	</div>
	
	<?php if(isset($rice1)) {  ?>
	<div class="row" style="padding-top:30px">
		<div class="col-md-4"></div>
		<div class="col-md-2 text-left">
			<? echo "Rice 1";?>
		</div>
		<div class="col-md-1">
			<?php echo "Rs. " .$r1a;?>
		</div>
		<div class="col-md-3"></div>
	</div>
	<? } ?>
	
	<?php if(isset($rice2)) { ?>
	<div class="row" style="padding-top:22px">
		<div class="col-md-4"></div>
		<div class="col-md-2 text-left">
			<? echo "Rice 2";?>
		</div>
		<div class="col-md-1">
			<?php echo "Rs. " .$r2a; ?>
		</div>
		<div class="col-md-3"></div>
	</div>
	<? } ?>
	
	<?php if(isset($sugar)) { ?>
	<div class="row" style="padding-top:22px">
		<div class="col-md-4"></div>
		<div class="col-md-2 text-left">
			<? echo "Sugar";?>
		</div>
		<div class="col-md-1">
			<?php echo "Rs. " .$sa; ?>
		</div>
		<div class="col-md-3"></div>
	</div>
	<? } ?>
	
	<?php if(isset($wheat)) { ?>
	<div class="row" style="padding-top:22px">
		<div class="col-md-4"></div>
		<div class="col-md-2 text-left">
			<? echo "Wheat";?>
		</div>
		<div class="col-md-1">
			<?php echo "Rs. " .$wa; ?>
		</div>
		<div class="col-md-3"></div>
	</div>
	<? } ?>
	
	<?php if(isset($thoardhall)) { ?>
	<div class="row" style="padding-top:22px">
		<div class="col-md-4"></div>
		<div class="col-md-2 text-left">
			<? echo "Thoardhall";?>
		</div>
		<div class="col-md-1">
			<?php echo "Rs. " .$tda; ?>
		</div>
		<div class="col-md-3"></div>
	</div>
	<? } ?>
	
	<?php if(isset($udpdhall)) { ?>
	<div class="row" style="padding-top:22px">
		<div class="col-md-4"></div>
		<div class="col-md-2 text-left">
			<? echo "Uddpdhall";?>
		</div>
		<div class="col-md-1">
			<?php echo "Rs. " .$uda; ?>
		</div>
		<div class="col-md-3"></div>
	</div>
	<? } ?>
	
	<div class="row" style="padding-top:22px">
		<div class="col-md-4"></div>
		<div class="col-md-2 text-left">
			<label><? echo "Total";?></label>
		</div>
		<div class="col-md-1">
			<label><?php echo "Rs. " .$total; ?></label>
		</div>
		<div class="col-md-3"></div>
	</div>
	
	<div class="row" style="padding-top:30px">
		<div class="col-md-4"></div>
		<div class="col-md-2 text-right">
			<a href="customerlogin.php" class="btn btn-info">Home</a>
		</div>
		<div class="col-md-2 text-left">
			<a href="" class="btn btn-warning">Print</a>
		</div>
		<div class="col-md-3"></div>
	</div>
	
</div>
</body>
</html>