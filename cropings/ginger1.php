<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$a=$_POST['ginger'];
?>
<form action="" method="POST">
	<center>
<table border="1">
	<tr>
		<td></td>
		<td>RAIN</td>
		<td>WELL</td>
	</tr>
	<tr>
		<td>PLOUGHING</td>
		<td><input type="text" name="ulu1" value="<?php echo($a*250)?>" readonly=""></td>
		<td><input type="text" name="ulu2" value="<?php echo($a*300)?>" readonly=""></td>
	</tr>
	<tr>
		<td>SEED</td>
		<td><input type="text" name="ulu3" value="<?php echo($a*200) ?>" readonly=""></td> 
		<td><input type="text" name="ulu4" value="<?php echo($a*200)?>" readonly=""></td>s
	</tr>
	<tr>
		<td>SOWING</td>
		<td><input type="text" name="ulu5" value="<?php echo($a*150) ?>" readonly=""></td> 
		<td><input type="text" name="ulu6" value="<?php echo($a*200) ?>" readonly=""></td> 
	</tr>
	<tr>
		<td>MANURE</td>
		<td><input type="text" name="ulu7" value="<?php echo($a*200) ?>" readonly=""></td>
		<td><input type="text" name="ulu8" value="<?php echo($a*200) ?>" readonly=""></td> 
	</tr>
	<tr>
		<td>IRRIGATION</td>
		<td><input type="text" name="ulu9" value="<?php echo($a*200) ?>" readonly=""></td> 
		<td><input type="text" name="ulu10" value="<?php echo($a*200) ?>" readonly=""></td> 
	</tr>
	<tr>
		<td>TRANSPORT</td>
		<td><input type="text" name="ulu11" value="<?php echo($a*200) ?>" readonly=""></td> 
		<td><input type="text" name="ulu12" value="<?php echo($a*200) ?>" readonly=""></td> 
	</tr>
	<tr>
		<td>TOTAL</td>
		<td><input type="text" name="ulu13" value="<?php echo($a*200+$a*250+$a*150+$a*200+$a*200+$a*200)?>" readonly=""></td> 
		<td><input type="text" name="ulu14" value="<?php echo($a*200+$a*300+$a*200+$a*200+$a*200+$a*200)?>" readonly=""></td> 
	</tr>
</table></center><br><br>
<center><table border="1">
	<tr>
		<td></td>
		<td>RAIN</td>
		<td>WELL</td>
	</tr>

	<tr><td>YEILD IN KG</td>
	<td><input type="text" name="ulu15" value="<?php echo($a*400) ?>" readonly=""></td>
<td><input type="text" name="ulu16" value="<?php echo($a*400) ?>" readonly=""></td></tr>
<tr>

	<td>
		EARNINGS
	</td>
	<td>
		<input type="text" name="ulu17" value="<?php echo($a*400*50) ?>" readonly="">
	</td>
	<td><input type="text" name="ulu18" value="<?php echo($a*400*50) ?>" readonly="">
	</td>
</tr>
<tr>
	<td>
		PROFIT
	</td>
	<td>
		<input type="text" name="ulu19" value="<?php echo($a*400*50)-($a*200+$a*250+$a*150+$a*200+$a*200+$a*200) ?>" readonly="">
	</td>
	<td>
<input type="text" name="ulu20" value="<?php echo($a*400*50)-($a*200+$a*300+$a*200+$a*200+$a*200+$a*200) ?>" readonly="">
	</td>
</tr></table></center>

</body>
</html>