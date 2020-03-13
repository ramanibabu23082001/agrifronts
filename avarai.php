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
			<td colspan="5"> SOIL TYPE:PH RANGE-6.5 TO 7.5</td>

			</tr>
			<tr>	
			<td>02</td>
			<td colspan="5">SEASON:JULY OR OCTOBER TO NOVEMBER </td>

			</tr>
			<tr>	
			<td>03</td>
			<td colspan="5">TEMPERATURE:60-65 DEGREE FAHRENHEIT</td>

			</tr>
			<tr>	
			<td>04</td>
			<td colspan="5">IRRIGATION: ONCE IN 5 DAYS</td>

			</tr>
			<tr>	
			<td>05</td>
			<td colspan="5">GROWING PERIOD:10 MONTHS</td>

			</tr>
			<tr>	
			<td>06</td>
			<td colspan="5">MANURE:25t/ha of FYM BETWEEN 40 TO 45 DAYS</td>

			</tr>
			<tr>	
			<td>07</td>
			<td colspan="5">RAINFALL:750 TO 2000MM ANUALLY</td>

			</tr>
			<tr>	
			<td>08</td>
			<td colspan="5">SEED REQ:25KG  /Ha,MANURE REQ:7TONES</td>

			</tr>
		</tbody>
	</table><br>
	<br>

	<form action="avarai1.php" method="POST">
	ENTER THE LAND AREA  :<input type="text" name="amount" required="">
<br><br>
<center><input type="submit" name="submit" value="Submit"></center></form>
</div>
</body>
</html>