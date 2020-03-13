<!DOCTYPE html>
<html>
<head>
	<style type="text/css">ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: Gold;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: green;
  color: white;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: lightgrey;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;
color: black;}

.dropdown:hover .dropdown-content {
  display: block;
  color: black;
}.active
{
	background-color: red;
	color: white;
}

.active
{
	background-color: red;
	color: white;
}
<style type="text/css">
		* {font-family: Helvetica Neue, Arial, sans-serif; }

body { background-color: lightgrey;}

h1, table { text-align: center; }

table {border-collapse: collapse;  width: 70%; margin: 0 auto 5rem;}

th, td { padding: 1.5rem; font-size: 1.3rem; }

tr {background: hsl(50, 50%, 80%); }

tr, td { transition: .4s ease-in; } 

tr:first-child {background: hsla(12, 100%, 40%, 0.5); }

tr:nth-child(even) { background: hsla(50, 50%, 80%, 0.7); }

td:empty {background: hsla(50, 25%, 60%, 0.7); }

tr:hover:not(#firstrow), tr:hover td:empty {background: #ff0; pointer-events: visible;}
tr:hover:not(#firstrow) { transform: scale(1.2); font-weight: 700; box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.5);}
</style>
	<title></title>
</head>
<body bgcolor="lightblue">
<div class="ram"><ul>
  <li><a href="dash.php">Home</a></li>
  <li><a href="price.html">Market Price</a></li>
  <li><a href="display.php">Your Orders</a></li>
   <li><a href="display3.php">Order Taken</a></li>
  <li><a href="image.php">Crop List</a></li>
  <li><a href="attempt1.php">Demands</a></li >
  <li><a href="ragav.php">Place Orders</a></li>  
  <li><a class="active" href="feedback.php">Feedback</a></li>  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Forms</a>
    <div class="dropdown-content">
      <a href="kisan.php">Kisaan Registration</a>
      <a href="loan1.php">Loan Application</a>
      <li style="float: right;"><a  href="logout.php"> Log Out</a></li>
    </li>
</ul></div>
    <?php
session_start();

  $servername="localhost";
  $username="root";
  $password="";
  
$a=$_SESSION['u'];

  $conn= new mysqli($servername,$username,$password);
  mysqli_select_db($conn,'agrifronts');
  $sql="SELECT * FROM feed WHERE farmer='$a' ";
$result=mysqli_query($conn,$sql);
?>
<?php
$i=1;
?>
<form action="feedings1.php" method="POST">
<table id="racetimes">
	

	</tr>
<tr id="firstrow"><th>Serial num</th><th>Customer</th><th colspan="4">Select</th></tr>
<?php

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>
        <td><?php echo $i; $i++; ?></td>
	<td><?php echo $row['farmer'];?></td>
	<td><?php echo $row['rating'];?></td>
  <td><input type="radio" name="id" value="<?php echo $row['farmer'];?>" >
	
	
	
</tr>

<?php }
 ?>


</table><input type="submit" name="submit" value="More"></form><br><br><br><br>

</body>
</html>