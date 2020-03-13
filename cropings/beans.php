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
	<center><h1>BEANS</h1></center>
<div class="rtr">
	<img class="yty" src="beans.jpg">
</div>
<div class="ptr">
	<pre class="attr">
		<ul><b><li>SOIL TYPE:well-drained soil (but consistently moist),PH RANGE-6 to 6.8</li>
		<li>SEASON:annual rainfall between 400 mm and 1,200 mm.</li>
                <li>TEMPERATURE: Ideally between 15-23°C,</li>
		<li>SEED RATE: 8-10 kg / ha</li>
		<li>IRRIGATION: 2-20 lit/hour(Drip Irrigation).</li>
		<li>GROWING PERIOD:around 70 days for short duration varieties, and 110 days for long duration varieties.</li></b>
	</ul>
	<form action="beans1.php" method="POST">
		<b>ENTER THE LAND AREA:</b><input type="text" name="bean"value="">  <input class="hhh" type="submit" name="submit" value="CLICK TO GET DETAILS">
	</form>
	</pre>
	
</div></div>

</body>
</html>
