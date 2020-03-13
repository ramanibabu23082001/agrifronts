<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style >
		a{
			text-decoration: none;
		}
	body
	{
		margin:0;
	}
		.tt
		{
			background-color: red;
			height:150px;
			width: :100%;

		}
		input
		{width: 2cm;
		}
		img{
			
			height: 100px;
			width: 200px;

		}
		input{
			border:none;
		}
		td{
           width:25%;
		}
	
		
	</style>
</head>
<body>
	
<div class="tt">

</div>
<center> 
	<form action="market1.php" method="POST">
	<table border="1" class="rt" >
		<tr>
			<th>CROPS</th>
			<th>CROPNAME</th>
			<th>RUPEES</th>
			<th>DEMAND</th>
			<th>USER DATA</th>
			<th>PRODUCTIONSs</th>

		</tr>
		<tr >
			<td colspan="3">Type to search<input type="text" id="mySearch" find="onSearch()" placeholder="Search.." title="Type in a category"></td></tr>
 			<ul id="mine">
				<tr>
					<td ><center><img src="avarai.jpg" ></center></td>
					<td><a href="avarai.php" ><center><b>Avarai</b>(1kg)</center></a></td>
					 	<td><center><input type="text" name="a" value="25.00" readonly=""></center></td>
					<td><center><input type="text" name="a1" value="500" readonly=""></center></td>

						<td><center><input type="text" name="a2"  value=""  >
							<input type="submit" name="submit" value="press">  </center></td>
							
                                    

				 <td><div class="progress">
 
<?php  echo "<div class="progress-bar progress-bar-success" role="progressbar" width="$b2"px>";
?>
     Free Space
    </div>
						</td>
				</tr>
				
				<tr>
					<td><center><img src="big onion.jpg" ></center></td>
					<td><a href="bigonion.php" ><center><b>Big Onion</b>(1kg)</center></a></td>
						<td><center><input type="text" name="b" value="13.00" readonly=""></center></td>
						<td><center><input type="text" name=""  value=""  > </center></td>
						<td><center><input type="text" name="b2"  value=""  >
							<input type="submit" name="submit" value="press
						echo "<td>";">  </center></td>
						<?php 

	                 $b2=$_POST['b2'];
	                     
						 echo "$b2";  
						 ?>
						</td>
				</tr>
				<tr>
					<td><center><img src="small onion.jpg" ></center></td>
					<td><a href="smallonion.php" ><center><b>Small Onion</b>(1kg)</center></a></td>
						<td><center><input type="text" name="c" value="25.00" readonly=""></center></td>
						<td><center><input type="text" name=""  value=""  > </center></td>
						<td><center><input type="text" name="c2"  value=""  >
							<input type="submit" name="submit" value="press">  </center></td>
						<?php 

	                 $c2=$_POST['c2'];
	                     
						echo "<td>";
						 echo "$c2";  
						 ?>
						</td>
				</tr>
				<tr>
					<td><center><img src="tomato.jpg" ></center></td>
					<td><a href="tomato.php" ><center><b>Tomato</b>(1kg)</center></a></td>
						<td><center><input type="text" name="d" value="20.00" readonly=""></center></td>
						<td><center><input type="text" name=""  value=""  > </center></td>
						<td><center><input type="text" name="d2"  value=""  >
							<input type="submit" name="submit" value="press">  </center></td>
						<?php 

	                 $d2=$_POST['d2'];
	                     
						echo "<td>";
						 echo "$d2";  
						 ?>
						</td>
				</tr>
				<tr>
					<td><center><img src="genger.jpg" ></center></td>
					<td><a href=ginger.php" ><center><b>Ginger</b>(1kg)</center></a></td>
						<td><center><input type="text" name="e" value="90.00" readonly=""></center></td>
						<td><center><input type="text" name=""  value=""  > </center></td>
						<td><center><input type="text" name="e2"  value=""  >
							<input type="submit" name="submit" value="press">  </center></td>
						<?php 

	                 $e2=$_POST['e2'];
	                     
						echo "<td>";
						 echo "$e2";  
						 ?>
						</td>
				</tr>
				<tr>
					<td><center><img src="baby.jpg" ></center></td>
					<td><a href="baby.php" ><center><b>Baby Potato</b>(1kg)</center></a></td>
						<td><center><input type="text" name="f" value="55.00" readonly=""></center></td>
						<td><center><input type="text" name=""  value=""  > </center></td>
						<td><center><input type="text" name="f2"  value=""  >
							<input type="submit" name="submit" value="press">  </center></td>
						<?php 

	                 $f2=$_POST['f2'];
	                     
						echo "<td>";
						 echo "$f2";  
						 ?>
						</td>
				</tr>
				<tr>


					<td><center><img src="basmathi rice.jpg" ></center></td>
					<td><a href="basmathi.php" ><center><b>Basmathi Rice</b>(1kg)</center></a></td>
						<td><center><input type="text" name="g" value="175.00" readonly=""></center></td>
						<td><center><input type="text" name=""  value=""  > </center></td>
						<td><center><input type="text" name="g2"  value=""  >
							<input type="submit" name="submit" value="press">  </center></td>
						<?php 

	                 $g2=$_POST['g2'];
	                     
						echo "<td>";
						 echo "$g2";  
						 ?>
						</td>
				</tr>
				<tr>
					<td><center><img src="beans.jpg" ></center></td>
					<td><a href="beans.php" ><center><b>Beans</b>(1kg)</center></a></td>
						<td><center><input type="text" name="h" value="65.00" readonly=""></center></td>
						<td><center><input type="text" name=""  value=""  > </center></td>
						<td><center><input type="text" name="h2"  value=""  >
							<input type="submit" name="submit" value="press">  </center></td>
						<?php 

	                 $h2=$_POST['h2'];
	                     
						echo "<td>";
						 echo "$h2";  
						 ?>
						</td>

				</tr>
				<tr>
					<td><center><img src="beatroot.jpg" ></center></td>
					<td><a href="beetroot.php" ><center><b>Beatroot</b>(1kg)</center></a></td>
						<td><center><input type="text" name="i" value="17.00" readonly=""></center></td>
						<td><center><input type="text" name=""  value=""  > </center></td>
						<td><center><input type="text" name="i2"  value=""  >
							<input type="submit" name="submit" value="press">  </center></td>
						<?php 

	                 $i2=$_POST['i2'];
	                     
						echo "<td>";
						 echo "$i2";  
						 ?>
						</td>
				</tr>
				<tr>
					<td><center><img src="brinjal.jpg" ></center></td>
					<td><a href="brinjal.php" ><center><b>Brinjal</b>(1kg)</center></a></td>
						<td><center><input type="text" name="j" value="40.00" readonly=""></center></td>
						<td><center><input type="text" name=""  value=""  > </center></td>
						<td><center><input type="text" name="j2"  value=""  >
							<input type="submit" name="submit" value="press">  </center></td>
						<?php 

	                 $j2=$_POST['j2'];
	                     
						echo "<td>";
						 echo "$j2";  
						 ?>
						</td>
				</tr>
				<tr>
					<td><center><img src="cabbage.jpg" ></center></td>
					<td><a href="cabbage.php" ><center><b>Cabbage</b>(1kg)</center></a></td>
						<td><center><input type="text" name="k" value="15.00" readonly=""></center></td>
						<td><center><input type="text" name=""  value=""  > </center></td>
						<td><center><input type="text" name="k2"  value=""  >
							<input type="submit" name="submit" value="press">  </center></td>
						<?php 

	                 $k2=$_POST['k2'];
	                     
						echo "<td>";
						 echo "$k2";  
						 ?>
						</td>
				</tr>
				<tr>
					<td><center><img src="carrot.jpg" ></center></td>
					<td><a href="carrot.php" ><center><b>Carrot</b>(1kg)</center></a></td>
					
						<td><center><input type="text" name="l" value="18.00" readonly=""></center></td>
						<td><center><input type="text" name=""  value=""  > </center></td>
						<td><center><input type="text" name="l2"  value=""  >
							<input type="submit" name="submit" value="press">  </center></td>
						<?php 

	                 $l2=$_POST['l2'];
	                     
						echo "<td>";
						 echo "$l2";  
						 ?>
						</td>
				</tr>
				<tr>
					<td><center><img src="drumstick.jpg" ></center></td>
					<td><a href="drumstick.php"><center><b>Drumstick</b>(1kg)</center></a></td>
						<td><center><input type="text" name="m" value="18.00" readonly=""></center></td>
						<td><center><input type="text" name=""  value=""  > </center></td>
						<td><center><input type="text" name="m2"  value=""  >
							<input type="submit" name="submit" value="press">  </center></td>
						<?php 

	                 $m2=$_POST['m2'];
	                     
						echo "<td>";
						 echo "$m2";  
						 ?>
						</td>
				</tr>
				<tr>
					<td><center><img src="groundnut.jpg" ></center></td>
					<td><a href="groundnut.php" ><center><b>Groundnut</b>(1kg)</center></a></td>
					
						<td><center><input type="text" name="n" value="124.00" readonly=""></center></td>
						<td><center><input type="text" name=""  value=""  > </center></td>
						<td><center><input type="text" name="n2"  value=""  >
							<input type="submit" name="submit" value="press">  </center></td>
						<?php 

	                 $n2=$_POST['n2'];
	                     
						echo "<td>";
						 echo "$n2";  
						 ?>
						</td>
				</tr>
				<tr>
					<td><center><img src="lady finger.jpg" ></center></td>
					<td><a href="ladysfinger.php" ><center><b>Ladys Finger</b>(1kg)</center></a></td>					
						<td><center><input type="text" name="o" value="40.00" readonly=""></center></td>
						<td><center><input type="text" name=""  value=""  > </center></td>
						<td><center><input type="text" name="o2"  value=""  >
							<input type="submit" name="submit" value="press">  </center></td>
						<?php 

	                 $o2=$_POST['o2'];
	                     
						echo "<td>";
						 echo "$o2";  
						 ?>
						</td>
				</tr>
				<tr>
					<td><center><img src="pasiparupu.jpg" ></center></td>
					<td><a href="paasiparupu.php" ><center><b>Mooong Dhal</b>(1kg)</center></td></a></td>
						<td><center><input type="text" name="q" value="96.00" readonly=""></center></td>
						<td><center><input type="text" name=""  value=""  > </center></td>
						<td><center><input type="text" name="q2"  value=""  >
							<input type="submit" name="submit" value="press">  </center></td>
						<?php 

	                 $q2=$_POST['q2'];
	                     
						echo "<td>";
						 echo "$q2";  
						 ?>
						</td>
				</tr>
				<tr>
					<td><center><img src="podalankai.jpg" ></center></td>
					<td><a href="snake.php" ><center><b>Snakeguard</b>(1kg)</center></a></td>
						<td><center><input type="text" name="r" value="15.00" readonly=""></center></td>
						<td><center><input type="text" name=""  value=""  > </center></td>
						<td><center><input type="text" name="r2"  value=""  >
							<input type="submit" name="submit" value="press">  </center></td>
						<?php 

	                 $r2=$_POST['r2'];
	                     
						echo "<td>";
						 echo "$r2";  
						 ?>
						</td>
				</tr>
				<tr>
					<td><center><img src="potato.jpg" ></center></td>
					<td><a href="potato.php" ><center><b>Potato</b>(1kg)</center></a></td>
						<td><center><input type="text" name="s" value="15.00" readonly=""></center></td>
						<td><center><input type="text" name=""  value=""  > </center></td>
						<td><center><input type="text" name="s2"  value=""  >
							<input type="submit" name="submit" value="press">  </center></td>
						<?php 

	                 $s2=$_POST['s2'];
	                     
						echo "<td>";
						 echo "$s2";  
						 ?>
						</td>
				</tr>
				<tr>
					<td><center><img src="pundu.jpg" ></center></td>
					<td><a href="garlic.php" ><center><b>Garlic</b>(1kg)</center></a></td>
						<td><center><input type="text" name="t" value="120.00" readonly=""></center></td>
						<td><center><input type="text" name=""  value=""  > </center></td>
						<td><center><input type="text" name="t2"  value=""  >
							<input type="submit" name="submit" value="press">  </center></td>
						<?php 

	                 $t2=$_POST['t2'];
	                     
						echo "<td>";
						 echo "$t2";  
						 ?>
						</td>
				</tr>
				<tr>
					<td><center><img src="radish.jpg" ></center></td>
					<td><a href="raddish.php" ><center><b>Radish</b>(1kg)</center></a></td>
						<td><center><input type="text" name="u" value="15.00" readonly=""></center></td>
						<td><center><input type="text" name=""  value=""  > </center></td>
						<td><center><input type="text" name="u2"  value=""  >
							<input type="submit" name="submit" value="press">  </center></td>
						<?php 

	                 $u2=$_POST['u2'];
	                     
						echo "<td>";
						 echo "$u2";  
						 ?>
						</td>
				</tr>
				<tr>
					<td><center><img src="small pundu.jpg" ></center></td>
					<td><a href="smallgarlic.php" ><center><b>Small garlic</b>(1kg)</center></a></td>
						<td><center><input type="text" name="v" value="180.00" readonly=""></center></td>
						<td><center><input type="text" name=""  value=""  > </center></td>
						<td><center><input type="text" name="v2"  value=""  >
							<input type="submit" name="submit" value="press">  </center></td>
						<?php 

	                 $v2=$_POST['v2'];
	                     
						echo "<td>";
						 echo "$v2";  
						 ?>
						</td>
				</tr>
				<tr>
					<td><center><img src="sugercane.jpg" ></center></td>
					<td><a href="sugarcane.php" ><center><b>Sugarcane</b>(1kg)</center></a></td>
						<td><center><input type="text" name="w" value="" readonly=""></center></td>
						<td><center><input type="text" name=""  value=""  > </center></td>
						<td><center><input type="text" name="w2"  value=""  >
							<input type="submit" name="submit" value="press">  </center></td>
						<?php 

	                 $w2=$_POST['w2'];
	                     
						echo "<td>";
						 echo "$w2";  
						 ?>
						</td>
				</tr>
				<tr>
					<td><center><img src="thovarai.jpg" ></center></td>
					<td><a href="thovarai.php" ><center><b>Toor Dhal</b>(1kg)</center></a></td>
						<td><center><input type="text" name="x" value="95.00" readonly=""></center></td>
						<td><center><input type="text" name=""  value=""  > </center></td>
						<td><center><input type="text" name="x2"  value=""  >
							<input type="submit" name="submit" value="press">  </center></td>
						<?php 

	                 $x2=$_POST['x2'];
	                     
						echo "<td>";
						 echo "$x2";  
						 ?>
						</td>
				</tr>
				<tr>
					<td><center><img src="watermelon.jpg" ></center></td>
					<td><a href="watermelon.php" ><center><b>Watermelon</b>(1kg)</center></a></td>
						<td><center><input type="text" name="y" value=".00" readonly=""></center></td>
						<td><center><input type="text" name=""  value=""  > </center></td>
						<td><center><input type="text" name="y2"  value=""  >
							<input type="submit" name="submit" value="press">  </center></td>
						<?php 

	                 $y2=$_POST['y2'];
	                     
						echo "<td>";
						 echo "$y2";  
						 ?>
						</td>
			  </tr>
				<tr>
					<td><center><img src="uludhai.jpg" ></center></td>
					<td><a href="uludhai.php" ><center><b>Orid Dhal</b>(1kg)</center></a></td>
						<td><center><input type="text" name="z" value="94.00" readonly=""></center></td>
						<td><center><input type="text" name=""  value=""  > </center></td>
						<td><center><input type="text" name="z2"  value=""  >
							<input type="submit" name="submit" value="press">  </center></td>
						<?php 

	                 $z2=$_POST['z2'];
	                     
						echo "<td>";
						 echo "$z2";  
						 ?>
						</td>
				</tr>
				
				
			</ul>
			
		
	</table></center></form>
</body>
</html>