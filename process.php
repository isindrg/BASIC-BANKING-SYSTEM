<?php include 'database.php'; ?>
<style> 
            img {
                width:300px;
                height: 500px;
                object-fit: contain;
                 
            }
            ul {
            	 
	             margin:0;
	             padding:30;
	             list-style-type: none;
                background-color: #111;
                 border: ridge;
               
                  overflow: hidden;
                   
}
            li{
            	
            	display: inline-block;
            	margin = auto;
            	
            	
            	 

            }
            li a{
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
            	 

            }
        

        </style> 
</head>
<body>
    <form method="post" action="customer.php">
	<header>
		<nav >
			<ul>
				<li><a href="index.php">  HOME </a></li>
				<li><a href=""> VIEW CUSTOMER </a></li>
				<li><a href="transfer.php"> TRANSACTION </a></li>
				
			</ul>
		</nav>
	
        
	</header>


<?php

// create a variable

/*$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$department=$_POST['department'];
$email=$_POST['email'];

//Execute the query


mysqli_query($connect,"INSERT INTO employee(first_name,last_name,department,email)
		        VALUES ('$first_name','$last_name','$department','$email')");*/


$sql = "SELECT * FROM employee";
$result = mysqli_query($connect,"SELECT * FROM employee");

echo " CUSTOMER DETAILS";

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Balance</th>
<th>Email</th>
<th>Account</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['first_name'] . "</td>";
echo "<td>" . $row['last_name'] . "</td>";
echo "<td>" . $row['balance'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['Account'] . "</td>";
echo "</tr>";
}

echo "</table>";
?>
 <html>
<head>
	<title>
  <h1> Customer Details</h1>
	</title>
	<link rel = "stylesheet" type = "text/css" href = "buttons.css">
	<style>
		table {
		font-family: sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		h2{
		font-family: monospace;
		font-size:37px;
		}
		
		td, th {
		border: 2px solid white;
		border-radius: 1px;
		text-align: center;
		padding: 10px;
		}

		tr:nth-child(odd) {
		background-color: #4876FF;
		}
	</style>

