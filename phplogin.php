<?php
session_start();
include('db_conn.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=	md5($_POST["password"]);

	$sql="SELECT * FROM user_test WHERE username='".$username."' AND password='".$password."'
	";

	$result=	mysqli_query($con, $sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{
		$_SESSION["username"]=$username;
		$_SESSION["username"]=$username;
		header('location: index.php');
		echo"user";
	}

	elseif($row["usertype"]=="admin")
	{
		$_SESSION["username"]=$username;

		header('location: index.php');
		
	}

	else
	{
		echo "<script>";
		echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
		echo "window.history.back()";
	echo "</script>";
	}
}
?>