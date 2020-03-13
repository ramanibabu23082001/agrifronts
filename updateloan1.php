<?php
session_start();
$b=$_POST['crop'];
$c=$_POST['amount'];
$e=$_POST['values'];
  $servername="localhost";
  $username="root";
  $password="";
   $conn= new mysqli($servername,$username,$password);
  mysqli_select_db($conn,'agrifronts');
  
  
$a=$_SESSION['u'];
if($b=='address')
{
$sql="UPDATE loan SET address ='$c' WHERE name='$a' and Loan='$e'";
$result=mysqli_query($conn,$sql);
header("Location:out.php");


}



if($b=='email')
{
$sql="UPDATE loan SET email ='$c' WHERE name='$a' and Loan='$e'";
$result=mysqli_query($conn,$sql);

header("Location:out.php");}

?>