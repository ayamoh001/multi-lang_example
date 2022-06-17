<?php 

$conn=mysqli_connect("localhost","root","","messages");
if(!$conn){echo "error: " . mysqli_connect_error();}