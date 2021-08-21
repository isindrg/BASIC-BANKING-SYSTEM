<?php
//create connection
$connect = mysqli_connect('localhost','roots','12345','bbank');

//check connection
if(!$connect)
{
	echo 'Connection error: ' . mysqli_connect_error();

}

?>

