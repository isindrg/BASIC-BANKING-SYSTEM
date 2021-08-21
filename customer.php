<?php include 'database.php'; ?>

<?php
$q="select * from customers";
$result=mysqli_query($connect,$q);
/*$row_count=mysqli_num_rows($result)*/
?>
   

<html>
<head>
	<title>
   Customer Details
	</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">

	<style>
