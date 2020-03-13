<!DOCTYPE html>
<html>
<head>
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
	<form name="name" action="prices2.php" method="POST">
<h1>Crop Products</h1>
<?php
session_start();
 $a=$_POST['crop'];
  $b=$_SESSION['v'];
  
  $c=$_POST['amount'];?>
<table id="racetimes">
	<tr>
		<td>User Details</td>
		<td > <input type="text" name="user" value="<?php echo($b);?>" readonly="">
			
		</td>
		<td > <input type="text" name="crop" value="<?php echo($a);?>" readonly="">
			
		</td>
		<td > <input type="text" name="amount" value="<?php echo($c);?>" readonly="">
			
		</td>

	</tr>
<tr id="firstrow"><th>Serial No</th><th>Crop</th><th>Farmer</th><th>Select</th></tr>
<?php


  $servername="localhost";
  $username="root";
  $password="";
  


  $conn= new mysqli($servername,$username,$password);
  mysqli_select_db($conn,'agrifronts');
  $sql="SELECT * FROM sale WHERE product='$a'";
$result=mysqli_query($conn,$sql);
?>
<?php
$i=1;
$j=1;
while($row=mysqli_fetch_assoc($result))
{

?>

<tr>
        <td><?php echo $i; $i++; ?></td>
	<td><?php echo $row['product'];?></td>
	<td><?php echo $row['name'];?></td>
	<td><input type="radio" name="id" value="<?php echo $row['name'];?>"></td>

	
	
</tr>

<?php }
 ?>
<input type="submit" name="submit" value="submit">
</table></form>
</body>
</html>