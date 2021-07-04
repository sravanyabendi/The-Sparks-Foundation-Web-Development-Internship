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
				<h1><a href="homepage.html">TSF Bank</a></h1>
				<nav>
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
				</nav>
			</div>
			
	<div class="transfer">
		<h1 id="h1">Transaction History</h1>
		<table cellspacing="0">
		 <thead>
		 <th width="200">Sender</th>
		 <th width="200">Account No</th>
		 <th width="200">Receiver</th>
		 <th width="200">Account No</th>
		 <th width="200">Amount</th>
		 <th width="200">Date</th>
		 <th width="200">Time</th>
		 </thead>
		 <tbody>
			 <?php 
			      include("connect.php");
				  $query="SELECT * FROM `transactions`";
				  $result=mysqli_query($conn,$query);
				  $fn=1;
				  while($row=mysqli_fetch_assoc($result)){
					  $sender=$row['sender_name'];
					  $accounts=$row['from_accountno'];
					  $receiver=$row['receiver_name'];
					  $accountr=$row['to_accountno'];
					  $amounttr=$row['amount_transfer'];
					  $date=$row["date"];
					  $time=$row["time"];
					  echo "<tr>
					  <td>$sender</td>
					  <td>$accounts</td>
					  <td>$receiver</td>
					  <td>$accountr</td>
					  <td>$amounttr</td>
					  <td>$date</td>
					  <td>$time</td>
					  </tr>";
					 $fn+=1;
					}
					 ?>
	
		
		 </tbody>
		 </table>
	</div>   
	
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script>
		$(window).scroll(function(){
			if($(window).scrollTop()){
				$("nav").addClass("black");
			}
			else{
				$("nav").removeClass("black");
			}
		})
		</script>  
</body>
</html>