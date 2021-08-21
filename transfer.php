<?php include 'database.php';
$sql = "SELECT * FROM users";
    $result = mysqli_query($connect,$sql); ?>
    <style> 
            
            ul {
                 
                padding:30;
                 list-style-type: none;
                background-color: #111;
                 border: ridge;
                 z-index: -1;
               
                   
}
            li{
                
                display: inline-block;
                margin = auto;
                
                
                 

            }
            li a{
            color: #fff;
            text-decoration: none;
            padding: 6px 9px;
                 

            }
        

        </style> 
</head>
<body>
    <form method="post" action="result.php">
    <header>
        <nav >
            <ul>
                <li><a href="index.php">  HOME </a></li>
                <li><a href="process.php"> VIEW CUSTOMER </a></li>
                <li><a href=" "> TRANSACTION </a></li>
                
            </ul>
        </nav>
    
        
    </header>


<!--?php

$sql = "SELECT * FROM transaction";
$result = mysqli_query($connect,"SELECT * FROM transaction");

echo "Transfer";

echo "<table border='1'>
<tr>
<th>id</th>
<th>sender</th>
<th>receiver</th>
<th>balance</th>

</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['sender'] . "</td>";
echo "<td>" . $row['receiver'] . "</td>";
echo "<td>" . $row['balance'] . "</td>";

echo "</tr>";
}

echo "</table>";



?-->
 <html>
<head> 
    <title>Transaction Page</title>
    <style>
    body {
               padding-top: 60px;
               font-size:25px;
               background: #f5fce3;
               background: -webkit-linear-gradient(to right, #f5fce3, #e1e6d6 );
               background: linear-gradient(to right, #f5fce3,#e1e6d6 );
        }
    .transferMoney{
        color:white;
        background: #91c1c9;
        background: -webkit-linear-gradient(to bottom,  #91c1c9, #5e9da8 );
        background: linear-gradient(to bottom, #91c1c9, #3a5f66);
        padding: 20px;
        position:fixed;
        top:50%;
        left:50%;
        transform: translate(-50%, -50%);
    }

 
    </style>   
    <script type="text/javascript">
    
        if(window.history.replaceState){
            
            window.history.replaceState(null, null, window.location.href); 
        }
       
    </script>
      
     
<html>
<head> 
    <title>Transaction Page</title>
    
<!-- BODY-->
<body>
<!-- INCLUDING NAVBAR-->

<!-- Creating Form to collect information related to do transaction-->
<div class = 'transferMoney'>
    <h1>Transfer Money</h1>
    <!-- Form's action attribute points to this page only-->
    <!-- Note: To redirect page to samee php write "php echo $_SERVER['PHP_SELF'];" in action attribute-->
    <form name="myForm" action="ResultPage.php"  onsubmit="return validateForm()" method="post">
    <!-- To structurise form it is put in a table--onsubmit="return validateForm()"-->
        <table id="table1">
        <!-- ROW 1 : PAYER ACCOUNT ID IS ASKED-->
        <tr>
            <td>Payer Account No</td>
            <td><input type="number" name="payerID"  min=100 required><td>
        </tr>
        <!-- ROW 2 : PAYEE ACCOUNT ID IS ASKED-->
        <tr>
            <td>Payee Account No</td>
            <td><input type="number" name="payeeID" min=100 required ><td>
        </tr>
        <!-- ROW 3 : AMOUNT TO BE TRANSFERRED IS ASKED-->
        <tr>
            <td>Amount (in Rupees)</td>
            <td><input type="number" name="amount" min=1 required><td>
        </tr>
        <!-- ROW 4 : BUTTON TO ASK TO CONFIRM TRANSACTION-->
        <tr>
            <td><input type= "hidden" name= "form_submitted" value="1"></td>
            <td> <input type="submit" value="PROCEED"><td>
        </tr>
       
        </table>
    </form>
</div>
 <!-- FORM / TABLE ENDS HERE WITH DIV TAG-->
 <script>
 
 function validateForm() {
            var x = document.forms["myForm"]["payerID"].value;
            var y = document.forms["myForm"]["payeeID"].value;
            var z = document.forms["myForm"]["amount"].value;
            var regex=/^[0-9]+$/;

            
            if (x == "" || y=="" || z=="") {
                alert("Fill it!!");
                return false;
            }

            //var num = z>0?1:-1;
            if((Math.sign(z)==-1)||(Math.sign(z)==-0)||z==0){
                alert("Enter a valid amount to do transaction");
                return false;
            }
            if(isNaN(z)|| !x.match(regex)|| !y.match(regex) ||!z.match(regex)){
                alert("Enter correct input!");
                return false;
            }
            
           // var data = <?php //echo json_encode("42", JSON_HEX_TAG); ?>;
        }
            
 </script>
</body>
</html>
</style>

   