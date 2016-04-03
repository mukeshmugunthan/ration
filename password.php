<?php
session_start();
include("connect.php");

if(isset($_POST['submit']))
{

	$pwd=$_POST['pwd'];
	
	$result=mysqli_query($con,'select * from customer where password="'.$pwd.'"');
	
	$data=mysqli_fetch_object($result);
	
	if($pwd==$data->password)
	{
		
		$_SESSION['customerid']=$data->customerid;
		$_SESSION['name']=$data->name;
		$_SESSION['mobile']=$data->mobileno;
		$_SESSION['batch']=$data->batch;
	
		require_once("product.php");
	}
	else
	{
		echo "<script type='text/javascript'>";
		echo "alert('Incorrect Password\n Try again')";
		echo "</script>";
		
		require_once("generateotp.php");
	
	}
		
}