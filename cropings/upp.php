<!DOCTYPE html>
<html>
<head>
	<title>PROOJECT 1</title>

	<style >
	  
 
		body
		{
			margin: 0;
		}
		
		ul
		{
			list-style-type: none;
			margin: 0px;
			padding: 0px;
			overflow: hidden;
			background-color:green;
		}
		li
		{
			float:left;
		}
		li a
		{
			display: block;
			text-align: center;
			color:white;
			text-decoration: none;
			padding: 14px 16px;
		}

		.part1
	{
		
		text-align: center;
		margin: 0px;
		padding: 0px;
		height:200px;


	}
	.tt
	{
		margin: 0px;
		padding: 0px;
		float: center;
	}
	.row:after
	{
		content: "";
		display:table;
		clear:both;
	}
	li a:hover:not(.active)
	{
		background-color: orange;
		color:grey;
	}
	.active
	{
		background-color: red;
}
	
	</style>
</head>

<body> 

	<div class="row">
	<div class="part1">
		<img class="tt" src="logo.PNG" width="25%" height="200px">
		
	</div>
	<ul>
		<li><a href="mypage.php">CROPS</a></li>
		<li><a href="market.php">DEMANDS</a></li>
		<li><a class="active" href="jick.php">MESSAGES</a></li>
		<li><a href="product.php">SALE</a></li>
		<li style="float:right"><a href="next.html">LOGOUT</a></li>
	</ul>
	
	



</div>
</body>
</html>v