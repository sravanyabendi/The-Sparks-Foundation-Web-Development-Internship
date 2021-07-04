<?php
session_start();
if(isset($_POST['submit'])){
    $fname1=$_POST['sender'];
    $fname=$_POST['receiver'];
    $amm=$_POST['amount_r'];
    include("connect.php");
    if($amm==''){
        echo "<script> alert('Please enter proper ammount to be transferred')</script>";
    }
    else if($fname1==''){
        echo "<script> alert('Please enter the appropriate name of the Sender')</script>";
    }
    else if($fname==''){
        echo "<script> alert('Please enter the appropriate name of the Receiver')</script>";
    }
    else{
    $query="SELECT * FROM `customer_details` WHERE `first_name`='$fname'";
    $result=mysqli_query($conn,$query);
    $nrows=mysqli_num_rows($result);
    $q="SELECT * FROM `customer_details` WHERE `first_name`='$fname1'";
    $r=mysqli_query($conn,$q);
    $nrows1=mysqli_num_rows($r);
    if($nrows1){
        if($nrows){
            $row=mysqli_fetch_assoc($r);
            $accountno=$row['account_no'];
            $bal=$row['bank_balance'];
        $row=mysqli_fetch_assoc($result);
        $raccount_no=$row['account_no'];
        $rbal=$row['bank_balance'];
        date_default_timezone_set("Asia/Kolkata");
        $date=date('d/m/y');
        $time=date("h:i");
        if($amm<=$bal){
            $newsendbal=$bal-$amm;
            $newrecbal=$rbal+$amm;
            $q="UPDATE `customer_details` SET `bank_balance`=$newsendbal WHERE `account_no`=$accountno";   
            mysqli_query($conn,$q);
            $q="UPDATE `customer_details` SET `bank_balance`=$newrecbal WHERE `account_no`=$raccount_no";   
            mysqli_query($conn,$q); 
            $q="INSERT INTO `transactions` VALUES('$fname1',$accountno,'$fname',$raccount_no,$amm,'$date','$time')";
            mysqli_query($conn,$q);
            echo "<script> alert('Money transfered successfully from $fname1 to $fname') </script>";
        }
        else{
            echo "<script> alert('Insufficient Account Balance')</script>"; 
        }

    }
}
    else{
        echo "<script> alert('Please Check the name and try again')</script>";
    }
}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<title>TSF BANKING SYSTEM</title>
	<link rel='stylesheet' href='css/moneytransfer.css' >
    
</head>
<body>
    <div class='navbar'> 
		<h1><a href='homepage.php'>TSF Bank</a> </h1>
		<ul>
			<li class='home'>
				<a href='homepage.php'>Home</a>
			</li>
			<li class='viewcustomers'>
				<a href='customerdetails.php'>View Customers</a>
			</li>
		</ul>
	</div>
<form action="moneytransfer1.php" method="POST">
<div class='whole'>
<div class='transfer-block'>
    <img src='images/sender.png'>
    <div class='send'>
    <h1>Transfer</h1><br><br>
       <?php 
       include("connect.php");
       $query="SELECT * FROM `customer_details`";
       $result=mysqli_query($conn,$query);
       $cust=mysqli_num_rows($result);
       echo "<select class='drop' name='sender' placeholder='Select the Sender'>
       <option value='select'>Select the Sender</option> ";
       while($row=mysqli_fetch_assoc($result)){
        $name=$row["first_name"];
        echo "<option value='$name'>$name</option> ";  
       }
       echo "</select>  <br><br>";
        ?>
</div>
</div>
<div class='receive-block'>
    <img src='images/receiver.png'>
    <div class='receive'>
    <h1>Receiver</h1><br><br>
    <?php 
       include("connect.php");
       $query="SELECT * FROM `customer_details`";
       $result=mysqli_query($conn,$query);
       $cust=mysqli_num_rows($result);
       echo "<select class='drop' name='receiver' placeholder='Select the Receiver'>
       <option value='select'>Select the Receiver</option> ";
       while($row=mysqli_fetch_assoc($result)){
        $name=$row["first_name"];
        echo "<option value='$name'>$name</option> ";  
       }
       echo "</select>  <br><br>";
        ?>
       <input type='text'  class='inp' placeholder='Amount In Rupees' name='amount_r' br>
</div>

</div>
<div>
    <input id='btn' name='submit' type='submit'/>
  
</div>

</div>
</form>
</body>
</html>