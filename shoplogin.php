<?php
session_start();
include("connect.php");

if(isset($_POST['submit']))
{
	$shopno= $_POST['shopno'];
	$pwd= $_POST['pwd'];
	
	$result=mysqli_query($con,'select * from shop_login where shopno="'.$shopno.'" and password="'.$pwd.'"');
	
	$count=mysqli_num_rows($result);
	
	if($count)
	{
		$data=mysqli_fetch_object($result);
	
		$_SESSION['id']=$data->id;	
		$_SESSION['shopno']=$data->shopno;
        $_SESSION['password']=$data->pwd;

	
		require_once("stock.php");
	}
	else
	{
		echo '<div class="text-center" style="padding-top:10px;color:red">';
		echo "Your shop no. or password is incorrect";
		echo '</div>';
		
		require_once("index.php");
	}

}
?>