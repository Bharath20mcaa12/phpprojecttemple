<?php 
	$host='localhost';
	$uname='root';
	$pwd='';
	$db='boot';

	$con=mysqli_connect($host,$uname,$pwd);
	mysqli_select_db($con,$db);

 ?>