<!DOCTYPE html>
<html>
<head>
	<style>
  .active
{
  background-color: red;
  color: white;
}

		ul {
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
}
.ram
{
	height:130px;
	width:100%;
	
}

	</style>
	<title></title>
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
</head>
<body>
	<div class="ram"><ul>
  <li><a href="dash.php">Home</a></li>
  <li><a href="price.html">Market Price</a></li>
  <li><a href="display.php">Your Orders</a></li>
   <li><a href="display3.php" class="active">Order Taken</a></li>
  <li><a href="image.php">Crop List</a></li>
  <li><a href="attempt1.php">Demands</a></li >
  <li><a href="ragav.php">Place Orders</a></li>  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Forms</a>
    <div class="dropdown-content">
      <a href="kisan.php">Kisaan Registration</a>
      <a href="loan1.php">Loan Application</a>
     <li style="float: right;"><a  href="logout.php"> Log Out</a>
    
  </li>
</ul></div>
	<form name="name" action="display4.php" method="POST">
<h1>Crop Products</h1>
<table id="racetimes">
	

	</tr>
<tr id="firstrow"><th>Serial No</th><th>Customer</th><th>Amount</th><th>Crop</th><th>Select</th></tr>
<?php
session_start();

  $servername="localhost";
  $username="root";
  $password="";
  
$a=$_SESSION['u'];

  $conn= new mysqli($servername,$username,$password);
  mysqli_select_db($conn,'agrifronts');
  $sql="SELECT * FROM products WHERE farmer='$a' and message='order taken'";
$result=mysqli_query($conn,$sql);
?>
<?php

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>
        <td>*</td>
	<td><?php echo $row['customer'];?></td>
	<td><?php echo $row['amount'];?></td>
	<td><?php echo $row['crop'];?></td>
	<td><input type="radio" name="id" value="<?php echo $row['id'];?>"></td>

	
	
</tr>

<?php }
 ?>
<center><input type="submit" name="submit" value="submit"></center>
</table></form>
</body>
</html>