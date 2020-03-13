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
		html,
body {
	height: 100%;
}

body {
	margin: 0;
	background: linear-gradient(45deg, #49a09d, #5f2c82);
	font-family: sans-serif;
	font-weight: 100;
}

.container {
	position: absolute;
	top: 70%;
	left: 50%;
	transform: translate(-50%, -50%);
}

table {
	width: 800px;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
	height: 100%;
}

th,
td {
	padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;
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
  <li><a href="dash.php">Home</a></li>
  <li><a href="price.html">Market Price</a></li>
  <li><a href="display.php">Your Orders</a></li>
   <li><a href="display3.php">Order Taken</a></li>
  <li><a href="image.php">Crop List</a></li>
  <li><a href="attempt1.php" class="active">Demands</a></li >
  <li><a href="ragav.php">Place Orders</a></li>  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Forms</a>
    <div class="dropdown-content">
      <a href="kisan.php">Kisaan Registration</a>
      <a href="loan1.php">Loan Application</a>
     <li style="float: right;"><a  href="logout.php"> Log Out</a>
    
  </li>
</ul></div>

	<?php
  

  $servername="localhost";
  $username="root";
  $password="";


  $conn= new mysqli($servername,$username,$password);
  mysqli_select_db($conn,'agrifronts');?>
	
<div class="container">
	<table>
		<thead>
			<tr>
				<th>Serial No</th>
				<th>Crops</th>
				<th>Demands</th>
				<th>Remains</th>
				<th>Input</th>
				<th>Submit</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>01</td>
				<td>Avarai</td>
				<td>550</td>
				<?php
   
				
				$sql="SELECT remains FROM demandings WHERE crop='avarai'";
				$result=mysqli_query($conn,$sql);
				if($row=mysqli_fetch_assoc($result))
				?>
<form name="attempt" action="avarai2.php" method="POST" >
				<td><input type="text" name="text1" value="<?php echo $row['remains'];?>" readonly></td>

				<td><input type="radio" name="crop" value="avarai " required=""></td>
				<td><input type="submit" name="Submit" value="submit" ></td>

</form>
			</tr>
			<tr>
				<td>02</td>
				<td>Baby potato</td>
				<td>500</td>
					<?php
   
				
				$sql="SELECT remains FROM demandings WHERE crop='baby_potato'";
				$result=mysqli_query($conn,$sql);
				if($row=mysqli_fetch_assoc($result))
				?>
<form name="attempt" action="baby2.php" method="POST" >
				<td><input type="text" name="text1" value="<?php echo $row['remains'];?>" readonly></td>

				<td><input type="radio" name="crop" value="baby_potato " required=""></td>
				<td><input type="submit" name="submit" value="submit"></td></form>
			</tr>
				<tr>
				<td>03</td>
				<td>Beans</td>
				<td>650</td>
					<?php
   
				
				$sql="SELECT remains FROM demandings WHERE crop='beans'";
				$result=mysqli_query($conn,$sql);
				if($row=mysqli_fetch_assoc($result))
				?>
<form name="attempt" action="beans2.php" method="POST" >
				<td><input type="text" name="text1" value="<?php echo $row['remains'];?>" readonly></td>

				<td><input type="radio" name="crop" value="beans " required=""></td>
				<td><input type="submit" name="submit" value="submit"></td></form>
			</tr>
	<tr>
				<td>04</td>
				<td>Brinjal</td>
				<td>650</td>
					<?php
   
				
				$sql="SELECT remains FROM demandings WHERE crop='brinjal'";
				$result=mysqli_query($conn,$sql);
				if($row=mysqli_fetch_assoc($result))
				?>
<form name="attempt" action="brinjal2.php" method="POST" >
				<td><input type="text" name="text1" value="<?php echo $row['remains'];?>" readonly></td>

				<td><input type="radio" name="crop" value="brinjal " required=""></td>
				<td><input type="submit" name="submit" value="submit"></td></form>
			</tr>
				<tr>
				<td>05</td>
				<td>Beetroot</td>
				<td>500</td>
					<?php
   
				
				$sql="SELECT remains FROM demandings WHERE crop='beetroot'";
				$result=mysqli_query($conn,$sql);
				if($row=mysqli_fetch_assoc($result))
				?>
<form name="attempt" action="beetroot2.php" method="POST" >
				<td><input type="text" name="text1" value="<?php echo $row['remains'];?>" readonly></td>

				<td><input type="radio" name="crop" value="beetroot " required=""></td>
				<td><input type="submit" name="submit" value="submit"></td></form>
			</tr>
				<tr>
				<td>06</td>
				<td>Cabbage</td>
				<td>550</td>
					<?php
   
				
				$sql="SELECT remains FROM demandings WHERE crop='cabbage'";
				$result=mysqli_query($conn,$sql);
				if($row=mysqli_fetch_assoc($result))
				?>
<form name="attempt" action="cabbage2.php" method="POST" >
				<td><input type="text" name="text1" value="<?php echo $row['remains'];?>" readonly></td>

				<td><input type="radio" name="crop" value="cabbage" required=""></td>
				<td><input type="submit" name="submit" value="submit"></td></form>
			</tr>
				<tr>
				<td>07</td>
				<td>Carrot</td>
				<td>700</td>
					<?php
   
				
				$sql="SELECT remains FROM demandings WHERE crop='carrot'";
				$result=mysqli_query($conn,$sql);
				if($row=mysqli_fetch_assoc($result))
				?>
<form name="attempt" action="carrot2.php" method="POST" >
				<td><input type="text" name="text1" value="<?php echo $row['remains'];?>" readonly></td>

				<td><input type="radio" name="crop" value="carrot " required=""></td>
				<td><input type="submit" name="submit" value="submit"></td></form>
			</tr>
				<tr>
				<td>08</td>
				<td>Drumstick</td>
				<td>565</td>
					<?php
   
				
				$sql="SELECT remains FROM demandings WHERE crop='drumstick'";
				$result=mysqli_query($conn,$sql);
				if($row=mysqli_fetch_assoc($result))
				?>
<form name="attempt" action="drumstick2.php" method="POST" >
				<td><input type="text" name="text1" value="<?php echo $row['remains'];?>" readonly></td>

				<td><input type="radio" name="crop" value="drumstick " required=""></td>
				<td><input type="submit" name="submit" value="submit"></td></form>
			</tr>
				<tr>
				<td>09</td>
				<td>Ginger</td>
				<td>450</td>
					<?php
   
				
				$sql="SELECT remains FROM demandings WHERE crop='ginger'";
				$result=mysqli_query($conn,$sql);
				if($row=mysqli_fetch_assoc($result))
				?>
<form name="attempt" action="ginger2.php" method="POST" >
				<td><input type="text" name="text1" value="<?php echo $row['remains'];?>" readonly></td>

				<td><input type="radio" name="crop" value="ginger " required=""></td>
				<td><input type="submit" name="submit" value="submit"></td></form>
			</tr>
				<tr>
				<td>10</td>
				<td>bigonion</td>
				<td>550</td>
					<?php
   
				
				$sql="SELECT remains FROM demandings WHERE crop='bigonion'";
				$result=mysqli_query($conn,$sql);
				if($row=mysqli_fetch_assoc($result))
				?>
<form name="attempt" action="bigonion2.php" method="POST" >
				<td><input type="text" name="text1" value="<?php echo $row['remains'];?>" readonly></td>

				<td><input type="radio" name="crop" value="bigonion " required=""></td>
				<td><input type="submit" name="submit" value="submit"></td></form>
			</tr>
				<tr>
				<td>11</td>
				<td>Small garlic</td>
				<td>500</td>
					<?php
   
				
				$sql="SELECT remains FROM demandings WHERE crop='smallgarlic'";
				$result=mysqli_query($conn,$sql);
				if($row=mysqli_fetch_assoc($result))
				?>
<form name="attempt" action="smallgarlic2.php" method="POST" >
				<td><input type="text" name="text1" value="<?php echo $row['remains'];?>" readonly></td>

				<td><input type="radio" name="crop" value="smallgarlic " required=""></td>
				<td><input type="submit" name="submit" value="submit"></td></form>
			</tr>	
				<tr>
				<td>12</td>
				<td>Small onion</td>
				<td>800</td>
					<?php
   
				
				$sql="SELECT remains FROM demandings WHERE crop='smallonion'";
				$result=mysqli_query($conn,$sql);
				if($row=mysqli_fetch_assoc($result))
				?>
<form name="attempt" action="smallonion.php" method="POST" >
				<td><input type="text" name="text1" value="<?php echo $row['remains'];?>" readonly></td>

				<td><input type="radio" name="crop" value="smallonions" required=""></td>
				<td><input type="submit" name="submit" value="submit"></td></form>
			</tr>
			<tr>
				<td>13</td>
				<td>Tomato</td>
				<td>650</td>
					<?php
   
				
				$sql="SELECT remains FROM demandings WHERE crop='tomato'";
				$result=mysqli_query($conn,$sql);
				if($row=mysqli_fetch_assoc($result))
				?>
<form name="attempt" action="tomato2.php" method="POST" >
				<td><input type="text" name="text1" value="<?php echo $row['remains'];?>" readonly></td>

				<td><input type="radio" name="crop" value="tomato " required=""></td>
				<td><input type="submit" name="submit" value="submit"></td></form>
			</tr>
				<tr>
				<td>14</td>
				<td>Watermelon</td>
				<td>400</td>
					<?php
   
				
				$sql="SELECT remains FROM demandings WHERE crop='watermelon'";
				$result=mysqli_query($conn,$sql);
				if($row=mysqli_fetch_assoc($result))
				?>
<form name="attempt" action="watermelon2.php" method="POST" >
				<td><input type="text" name="text1" value="<?php echo $row['remains'];?>" readonly></td>

				<td><input type="radio" name="crop" value="watermelon " required=""></td>
				<td><input type="submit" name="submit" value="submit"></td></form>
			</tr>
				<tr>
				<td>15</td>
				<td>Wheat</td>
				<td>750</td>
					<?php
   
				
				$sql="SELECT remains FROM demandings WHERE crop='wheat'";
				$result=mysqli_query($conn,$sql);
				if($row=mysqli_fetch_assoc($result))
				?>
<form name="attempt" action="wheat2.php" method="POST" >
				<td><input type="text" name="text1" value="<?php echo $row['remains'];?>" readonly></td>

				<td><input type="radio" name="crop" value="wheat " required=""></td>
				<td><input type="submit" name="submit" value="submit"></td></form>
			</tr>
		</tbody>
	</table>
</div></form>
</body>
</html>