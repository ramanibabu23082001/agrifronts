<!DOCTYPE html>
<html>
<head>
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
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
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

	
	
<div class="container">
	<table>
		<thead>
			<tr>
				<th>Serial No</th>
				<th>Crops</th>
				
			</tr>
		</thead>
		<tbody>
		<tr>	
			<td>01</td>
			<td colspan="5">SOIL TYPE: Deep loose loamy soil</td>

			</tr>
			<tr>	
			<td>02</td>
			<td colspan="5">PH: 6.0 - 7.0</td>

			</tr>
			<tr>	
			<td>03</td>
			<td colspan="5">SEASON: cool season</td>

			</tr>
			<tr>	
			<td>04</td>
			<td colspan="5">SEED RATE: About 4 kg/ha</td>

			</tr>
			<tr>	
			<td>05</td>
			<td colspan="5">IRRIGATION: 3.5 - 4.5 ML/ha</td>

			</tr>
			<tr>	
			<td>06</td>
			<td colspan="5">GROWING PERIOD: 100 - 120 days</td>

			</tr>
			
			</tr>
		</tbody>
	</table><br><br><form action="carrot1.php" method="POST">
	ENTER THE LAND AREA  :<input type="text" name="amount" required="">
<br><br>
<center><input type="submit" name="submit" value="Submit"></center></form>
</div>
</body>
</html>