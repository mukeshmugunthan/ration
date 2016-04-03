<?php
session_start();
include("connect.php");

if(isset($_POST['submit']))
{
	$rice1=$_POST['rice1'];
	$rice2=$_POST['rice2'];
	$sugar=$_POST['sugar'];
	$wheat=$_POST['wheat'];
	
	$sql=mysqli_query($con,'select * from stock where shopno="'.$_SESSION['shopno'].'"');
	
	if($sql)
	{
		$update=mysqli_query($con,'update stock set rice1="'.$rice1.'",rice2="'.$rice2.'",sugar="'.$sugar.'",wheat="'.$wheat.'" where shopno="'.$_SESSION['shopno'].'"');
	
		echo "<script type='text/javascript'>";
		echo "alert('Stock items updated successfully')";
		echo "</script>";
	}
	else
	{
		$sql1="insert into stock(shopno,rice1,rice2,sugar,wheat) values('".$_SESSION['shopno']."','".$rice1."','".$rice2."','".$sugar."','".$wheat."')";
		mysqli_query($con,$sql1);
	
		echo "<script type='text/javascript'>";
		echo "alert('Stock items entered successfully')";
		echo "</script>";
	}
	
	$main_stock=mysqli_query($con,'select * from main_stock');
	$result=mysqli_fetch_object($main_stock);
	
	if($result->rice1!=$rice1)
	{
		echo "Qty missing";
	}
	else if($result->rice2!=$rice2)
	{
		echo "Qty missing";
	}
	else if($result->sugar!=$sugar)
	{
		echo "Qty missing";
	}
	else if($result->wheat!=$wheat)
	{
		echo "Qty missing";
	}
	
}

?>