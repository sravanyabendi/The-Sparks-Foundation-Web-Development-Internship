<?php
$conn=mysqli_connect("localhost","root","","tsf");
        if(!$conn){
            die("sorry failed to connect :". mysqli_connect_error());
        }
?>