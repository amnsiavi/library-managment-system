<?php

require 'dbh.inc.php';

if(isset($_POST['submit'])){

	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	$sql = "INSERT INTO users (email, u_password) VALUES ('".$email."', '".$password."'); ";

	if($password === $cpassword){
		mysqli_query($con, $sql);


	}
}

?>