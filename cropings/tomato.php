<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
	body
	{
	   margin: 0;
	}
	
		.ram
		{
			background-color: red;
			width:100%;
			height: 100px;
		}
		
	.tty
	{
		height: 40px;
		text-shadow: 2px 2px 4px #FF0000;
		padding:10px;
		text-align: center;
		background-color: ;}
		.rtr
		{
			float: left;
			width: 30%;
			height: 100%;
			
		}
		.ptr
		{
           float: left;
           width: 67%;
           height: 100%;
          
           
		}
		.hyh:after
		{
			content: "";
			display: table;
			clear: both;

		}
		.hyh
		{
			background-color: lightgreen;
			box-shadow: 10px 10px 5px grey;
			padding: 10px;

		}
		.yty
		{
			padding-top: 125px;
			padding-left: 50px;
			height: 200px;
			width: 325px;
		}
		.attr
		{
			padding-top: 10px;
			font-family: algerian;
		}
		.hhh
		{
			cursor: pointer;
			background-color:orange;
			color: black;
		}
		
	</style>
</head>
<body>
<div class="ram">
</div>
<div class="hyh">
	<center><h1>TOMATO</h1></center>
<div class="rtr">
	<img class="yty" src="tomato.jpg">
</div>
<div class="ptr">
	<pre class="attr">
		<ul><b><li>SOIL TYPE:PH RANGE-5.5 TO 5.8;</li>
		<li>SEASON:FEBRUARY OR OCTOBER TO NOVEMBERS</li>
		<li>SEED RATE:400G/Ha</li>
		<li>IRRIGATION: DRIP IRRIGATION ONCE IN 5 DAYS</li>
		<li>GROWING PERIOD:70 DAYS</li></b>
	</ul>
	<form action="tomato1.php" method="POST">
		ENTER THE LAND AREA:<input type="text" name="tomato" value="">  <input class="hhh" type="submit" name="submit" value="CLICK TO GET DETAILS">
	</form>
	</pre>
	
</div></div>

</body>
</html>