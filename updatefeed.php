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
  
  
$a=$_SESSION['v'];
if($b=='email')
{
$sql="UPDATE feed SET email ='$c' WHERE name='$a'";
$result=mysqli_query($conn,$sql);
header("Location:out3.php");


}



if($b=='feed')
{
$sql="UPDATE loan SET rating ='$c' WHERE name='$a' and farmer='$e'";
$result=mysqli_query($conn,$sql);

header("Location:out3.php");}

?>