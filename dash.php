<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		html,
body {
	height: 100%;
}
*
{
	border-spacing: border-box;
}

body {
	margin: 0;

	font-family: sans-serif;
	font-weight: 100;
	background: linear-gradient(45deg, #49a09d, #5f2c82);

}
.active
{
	background-color: red;
	color: white;
}

.container {
	position: absolute;
	

	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	background: linear-gradient(45deg, #49a09d, #5f2c82)
	

}

table {
	width: 800px;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

th,
td {
	padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;
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



th {
	text-align: left;
}

thead  
	 {
		background-color: #55608f;
	}
th
{
	background-color: #55608f;
}
tr:hover
{
background-color: rgba(255,255,255,0.3);
		
}
tbody {
	
			background-color: rgba(255,255,255,0.3);
		
	}
	td {
		position: relative;
		&:hover {
			&:before {
				content: "";
				position: absolute;
				left: 0;
				right: 0;
				top: -9999px;
				bottom: -9999px;
				background-color: rgba(255,255,255,0.2);
				z-index: -1;
			}
		}
	}
}



</style>
</head>
<body>
	<div class="ram"><ul>
  <li><a href="dash.php" class="active">Home</a></li>
  <li><a href="price.html">Market Price</a></li>
  <li><a href="display.php">Your Orders</a></li>
   <li><a href="display3.php">Order Taken</a></li>
  <li><a href="image.php">Crop List</a></li>
  <li><a href="attempt1.php">Demands</a></li >
  <li><a href="ragav.php">Place Orders</a></li>  
  <li><a href="feedback.php">Feedback</a></li>  
   <li><a href="myloan.php">My loans</a></li>  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Forms</a>
    <div class="dropdown-content">
      <a href="kisan.php">Kisaan Registration</a>
      <a href="loan1.php">Loan Application</a>
      <li style="float: right;"><a  href="logout.php"> Log Out</a></li>
      <li style="float: right"><a href="updatesign.php">Settings</a></li>  
    
    
  </li>
</ul></div>



	<?php
  
 

  $servername="localhost";
  $username="root";
  $password="";
  session_start();
  $a=$_SESSION['u'];
  



  $conn= new mysqli($servername,$username,$password);
  mysqli_select_db($conn,'agrifronts');
  $result=mysqli_query($conn,"SELECT * FROM sign1 WHERE name='$a'");
	$row=mysqli_fetch_assoc($result);?>
	
<div class="container">
	<h1 style="color: orange"><u><center>DASHBOARD</h1></center></u></h1>
	<table>
		<thead>
			<tr>
				<th>Basic Details</th>
				<th>User Profile</th>
				
			</tr>
		</thead>
		<tbody>
		<tr>	
			<td>Photo</td>
			<td colspan="5"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['photo']).'" height="100px" width="100px"/>'; ?>	</td>

			</tr>
			<tr>	
			<td>Name</td>
			<td colspan="5"><?php echo $row['name'];?></td>

			</tr>
			<tr>	
			<td>Gender</td>
			<td colspan="5"><?php echo $row['gender'];?></td>

			</tr>
			<tr>	
			<td>Age</td>
			<td colspan="5"><?php echo $row['age'];?></td>

			</tr>
			<tr>	
			<td>DOB</td>
			<td colspan="5"><?php echo $row['dob'];?> </td>

			</tr>
			<tr>	
			<td>Farming Member</td>
			<td colspan="5"><?php echo $row['member'];?></td>

			</tr>
			
			</tr>
		</tbody>
	</table>
</div>
</body>
</html>
