<?php
	$email = $_POST['email'];
	$password = $_POST['password'];
	$con = mysqli_connect('localhost','root','','loginform');
	$query = "INSERT INTO `logintable`(`email`, `password`) VALUES ('$email','$password')";
	$run = mysqli_query($con,$query);


	$rno = $_POST['rollnumber'];
	$name = $_POST['name'];
	$con1 = mysqli_connect('localhost','root','','example');
	$query1 = "INSERT INTO `exampletable`(`rollnumber`, `name`) VALUES ('$rno','$name')";
	$run1 = mysqli_query($con1,$query1);



	if($run == 'TRUE' || $run1 == 'TRUE')
	{
		echo "Data success";
	}

	else
	{
		echo "Error!";
	}

?>