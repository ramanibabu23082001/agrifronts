<?php
session_start();
$b=$_POST['crop'];
$c=$_POST['amount'];
  $servername="localhost";
  $username="root";
  $password="";
   $conn= new mysqli($servername,$username,$password);
  mysqli_select_db($conn,'agrifronts');
  
  
$a=$_SESSION['v'];
if($b=='address')
{
$sql="UPDATE sign2 SET address ='$c' WHERE name='$a'";
$result=mysqli_query($conn,$sql);
header("Location:out1.php");
}

if($b=='farming')
{
$sql="UPDATE sign2 SET member ='$c' WHERE name='$a'";
$result=mysqli_query($conn,$sql);

header("Location:out1.php");}
if($b=='password')
{
$sql="UPDATE sign2 SET password ='$c' WHERE name='$a'";
$result=mysqli_query($conn,$sql);

header("Location:out1.php");}
if($b=='email')
{
$sql="UPDATE sign2 SET email ='$c' WHERE name='$a'";
$result=mysqli_query($conn,$sql);

header("Location:out1.php");}

?>