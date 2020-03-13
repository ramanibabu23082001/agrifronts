<?php

$a=$_POST['name1'];
$b=$_POST['pro1'];

$servername="localhost";
$username="root";
$password="";

$conn= new mysqli($servername,$username,$password);

if($conn->connect_error)
{
	die("connection failed".$conn->connect_error);}
mysqli_select_db($conn,"registration");
$result=mysqli_query($conn,"SELECT * FROM customers WHERE username='$a'");
  $check=mysqli_num_rows($result);
  if ($check==1) {
      	$sql="INSERT INTO vegetables(name,products)VALUES('$a','$b')";
  	mysqli_query($conn,$sql);
  	echo "suceess";
  }
  else
  {
  	echo "failed";
  }
?>