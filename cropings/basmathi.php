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
	<center><h1>BASMATHI RICE</h1></center>
<div class="rtr">
	<img class="yty" src="basmathi rice.jpg">
</div>
<div class="ptr">
	<pre class="attr">
		<ul><b><li>SOIL TYPE:clay loam PH RANGE-5.0-8.5</li>
		<li>SEASON:Rainfall throught its growth and 25-30 during cultivation.</li>
		<li>SEED REQ: 6 to 8 kg per acre of land</li>
		<li>IRRIGATION: 2 to 4 cm of water in the feild throughout the growing season. </li>
		<li>GROWING PERIOD:About 137 days</li></b>
	</ul>
	<form action="basmathi1.php" method="POST">
		<b>ENTER THE LAND AREA:</b><input type="text" name="basmathi"value="">  <input class="hhh" type="submit" name="submit" value="CLICK TO GET DETAILS">
	</form>
	</pre>
	
</div></div>

</body>
</html>
