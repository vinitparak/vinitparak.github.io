<?php 
$username =$_POST['name'];
$email = $_POST['email'];
$comment = $_POST['text'];
$conn=mysqli_connect("localhost","root","12345","win");

$query = "insert into `win1` (username,email,comment) values ('$username','$email','$comment')";
 
mysqli_query($conn, $query);



?>