<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
		
		
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
.active
{
	background-color: red;
	color: white;
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
<body><div class="ram"><ul>
  <li><a href="dash1.php" >Home</a></li>
  <li><a href="recieve.php">Place Orders</a></li>
   <li><a href="query.php" class="active">Order Status</a></li>
    <li><a href="uzhavar.html">Uzhavar Santhai</a></li>
    
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Forms</a>
    <div class="dropdown-content">
      <a href="ravi.php">Employee Feedback</a>

      
    
    
  </li>
  <li style="float: right;"><a href="logout1.php">Log Out</a></li>
</ul></div>

<h1>Crop Products</h1>
<table id="racetimes">
	

	</tr>
<tr id="firstrow"><th>Serial No</th><th colspan="3">Order Messages</th></tr>


     <?php

session_start();
  $servername="localhost";
  $username="root";
  $password="";
  $a=$_SESSION['v'];

  $conn= new mysqli($servername,$username,$password);
  mysqli_select_db($conn,'agrifronts'); 
	$sql="SELECT * FROM products WHERE customer ='$a' ";
	$result=mysqli_query($conn,$sql);
	$i=1;
	while($row=mysqli_fetch_assoc($result)){

		?><tr><td>*</td>
		<td colspan="3">The status of order of your crop<b> <?php echo $row['crop']; ?></b> to <b><?php echo $row['farmer'];?></b> is<b><u> <?php echo $row['message'] ;?></b></u></td></tr>


	


<?php }
 ?>
<input type="submit" name="submit" value="submit">
</table>
</body>
</html>