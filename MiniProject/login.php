<?php
session_start();


$data=mysqli_connect('localhost','root','','ocrs');
if($data===false)

{

	die("connection error");

}


if($_SERVER["REQUEST_METHOD"]=="POST")
{

	$username=$_POST["username"];

	$password=$_POST["password"];



    $sql="select * from registration where username='".$username."' AND password='".$password."' ";

   
    $result=mysqli_query($data,$sql);


    $row=mysqli_fetch_array($result);
	
	
	

if($row["usertype"]=="customer")
	{
		$_SESSION["username"]=$username;

		header("location:newhome.php");

	}
	elseif($row["usertype"]=="admin")
	{
               $_SESSION["username"]=$username;

               header("location:Admin.php");
	}
	else
	{
		echo "username or password incorrect";
	}



}







?>