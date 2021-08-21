<!-- 
THIS PAGE IS EXECEUTED WHEN USER CLICKS BUTTON ON  TRANSFER.php (TRANSACTION OF MONEY  PAGE) 
THIS IS RESPONSIBLE FOR UPDATING TABLES IN DATABASE
-->
<?php include 'database.php';
 ?>

<!--HTML CODE STARTS -->

    <style>

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

  <div class= "main ">
    <div  align="center">


<!-- PHP CODE STARTS HERE-->
<!-- when user clicks proceed button then below code is executed-->
<?php 
  if(isset($_POST['form_submitted'])){

    //These variables are collecting form data
      $PAYER_ID = $_POST['payerID'];
      $PAYEE_ID = $_POST['payeeID'];
      $AMOUNT = $_POST['amount'];

      if(empty($PAYER_ID) || empty($PAYER_ID) || empty($AMOUNT)){
        //javascript code to notify user not to leave field blank         
        echo "<script> alert('Empty Fields !!');
        window.location.href='transfer.php';
        </script>";  
        exit() ;           
      }

      //CHECK IF AMOUNT IS GREATER THAN 0 OR NOT
      if($AMOUNT <=0){
        echo "<script> alert('Amount must be greater than zero !!');
        window.location.href='transfer.php';
        </script>";  
        exit() ;  
      }

      if(!ctype_digit($AMOUNT) || !ctype_digit($PAYER_ID) || !ctype_digit($PAYEE_ID)){
        echo "<script> alert('Entered value can only contain digit!!');
        window.location.href='transfer.php';
        </script>";  
        exit() ;  
      }


      //CHECK IF PAYER ID EXISTS OR NOT
      //balance = select balance from dbbsnk where acount = payeeid
    
      $sqlbalance = "SELECT balance FROM employee where account='$PAYER_ID'";
      $payerbalance=mysqli_query($connect,$sqlbalance);
      $result = mysqli_fetch_array($payerbalance);

      if($result['balance']<$AMOUNT){
        echo "not enough balane ";
         }
       else
        {
          $value = ($result['balance'] - $AMOUNT);
          $sqlupdatePayer = "UPDATE employee SET balance = $value WHERE account = $PAYER_ID ";
          $result=mysqli_query($connect,$sqlupdatePayer);

          $sqlbalance1 = "SELECT balance FROM employee where account='$PAYEE_ID'";
          $payeebalance=mysqli_query($connect,$sqlbalance1);
          $result1 = mysqli_fetch_array($payeebalance);

          $value1 = ($result1['balance'] + $AMOUNT);

          $sqlupdatePayee = "UPDATE employee
          SET balance = $value1
          WHERE account = $PAYEE_ID ";
          $result=mysqli_query($connect,$sqlupdatePayee);
          echo "SUCCESFULLY TRANSFERED ";
         }

  }
  //DATABASE CONNECTION ENDS HERE
  $connect->close();
  //PHP CODE ENDS HERE
?>
 
             

         

</body>
</html>
