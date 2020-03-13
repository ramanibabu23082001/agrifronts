<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url(agrii.jpg);
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}

.header div span{
	color: #5379fa !important;
}
.login{
	position: absolute;
	top: calc(50% - 85px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=submit]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}
.login input[type=submit]:hover{
	opacity: 0.8;
}

.login input[type=submit]:active{
	opacity: 0.6;
}
.login input[type=submit]:focus{
	outline: none;
}


	</style>
</head>
<body>
<form name="loge" action="dash.php" method="POST">
	<div class="body"></div>
		<div class="grad"></div>

		<?php
$a=$_POST['user_name'];
$b=$_POST['user_father'];
$c=$_POST['user_dob'];
$d=$_POST['age'];
$e=$_POST['email'];
$f=$_POST['password'];
$g=$_POST['gender'];
$h=$_POST['address'];
$i=$_POST['community'];
$j=$_POST['category'];
$k=$_POST['user_bank'];
$l=$_POST['user_branch'];
$m=$_POST['user_acc'];
$n=$_POST['user_accno'];
$o=$_POST['loan'];



$check_msg = implode(", ", $_POST['check']);
$servername="localhost";
	$username="root";
	$password="";
$conn= new mysqli($servername,$username,$password);

if($conn->connect_error)
{
	die("connection failed".$conn->connect_error);}
mysqli_select_db($conn,"agrifronts");
$sql="INSERT INTO loan(name,father_name,dob,age,email,password,gender,address,community,category,farming,bank,branch,acc_no,amount,loan)VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$check_msg','$k','$l','$m','$n','$o')";
if(mysqli_query($conn,$sql))
{

	?>	<div class="header">
			<div>Your Record has been sucessfully submitted</div>
		</div>
		<div class="login">
			<input  type="submit" name="submit" value="Back to Home">
		</div>
		<?php } ?>
</body>
</html>