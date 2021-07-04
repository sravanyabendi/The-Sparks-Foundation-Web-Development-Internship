<?php
session_start(); 
if(isset($_POST['submit'])){
    $_SESSION['row']=$_POST['submit'];
    header("Location: moneytransfer.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TSF BANKING SYSTEM</title>
	<link rel="stylesheet" href="css/transaction.css" >
    
</head>
<body>
	
	<div class="navbar"> 
		<h1><a href="homepage.php">TSF Bank</a></h1>
		<ul>
			<li class="home">
				<a href="homepage.php">Home</a>
			</li>
			<li class="viewcustomers">
				<a href="customerdetails.php">View Customers</a>
			</li>
			<li class="transact">
				<a href="transaction_hist.php">Transaction History</a>
			</li>
		</ul>
	</div>
	<div class="transfer">
		<h1 id="h1">Customer details</h1>
		<table cellspacing="0">
		 <thead>
		 <th width="200">Name</th>
		 <th width="200">Account No</th>
		 <th width="200">IFSC code</th>
		 <th width="200">Email ID</th>
		 <th width="200">Account Balance</th>
		 <th width="200">Transfer</th>
		 </thead>
		 <tbody>
		 <?php 
			      include("connect.php");
				  $query="SELECT * FROM `customer_details`";
				  $result=mysqli_query($conn,$query);
				  $fn=1;
				  while($row=mysqli_fetch_assoc($result)){
                    $name=$row['first_name'];
					$accountno=$row['account_no'];
					$ifsc=$row['ifsc_code'];
                    $email=$row['email'];
                    $bal=$row['bank_balance']; 
					  echo "<tr>
					  <td>$name</td>
					  <td>$accountno</td>
					  <td>$ifsc</td>
					  <td>$email</td>
					  <td>$bal</td>
					  <form action='customerdetails.php' method='POST'>
                    <td><button class='btn' value='$fn' name='submit'>Transfer</button></td>
                    </form>
					  </tr>";
					 $fn+=1;
					}
					 ?> 
					 </tbody>
		 </table>
	</div>   
	
   
</body>
</html>