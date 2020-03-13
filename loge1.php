<?php
  session_start();
  $a=$_POST['user'];
  $_SESSION['v']=$a;
  $b=$_POST['password'];

  $servername="localhost";
  $username="root";
  $password="";


  $conn= new mysqli($servername,$username,$password);
  mysqli_select_db($conn,'agrifronts');
  $result=mysqli_query($conn,"SELECT * FROM sign2 WHERE name='$a'and password='$b'");
 $check= mysqli_num_rows($result);
  if ($check==1) {
    header("Location:dash1.php");
  }
  else
  {
  header("Location:fail.php");
  }?>