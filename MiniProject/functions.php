<?php
require("login.php");

function getUsersData($id){
	$array=array();


	$query=("SELECT * FROM `registration` WHERE `id` = '.$id'");

	while($row=mysql_fetch_assoc($query))
	{
		$array['id']=$row['id'];
        $array['firstname']=$row['firstname'];
        $array['lastname']=$row['lastname'];
        $array['username']=$row['username'];
        $array['password']=$row['password'];
        $array['gender']=$row['gender'];
        $array['email']=$row['email'];
        $array['phonenumber']=$row['phonenumber'];
        $array['address']=$row['address'];

	}
	return $array;
}
function getid($username){
	$query=mysql_query("SELECT `id` FROM `registration` WHERE `username`='$username'");

	while($row=mysql_fetch_assoc($query)){
		return $row['id'];
	}
}


?>