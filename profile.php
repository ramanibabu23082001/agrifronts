<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form name="op"  action="" method="POST" enctype="multipart/form-data">
		<input type="file" name="f1">
<input type="submit" name="submit1" value="upload">
<input type="submit" name="submit2" value="display">

	</form>
<?php
$servername="localhost";
  $username="root";
  $password="";


  $conn= new mysqli($servername,$username,$password);
  mysqli_select_db($conn,'agrifronts');
if(isset($_POST["submit1"]))
{
	$image=addslashes(file_get_contents($_FILES['f1']['tmp_name']));
	mysqli_query($conn,"INSERT INTO table2 (images) VALUES('$image')");
}
if(isset($_POST["submit2"]))
{
	$res=mysqli_query($conn,"SELECT * FROM table2");
	while($row=mysqli_fetch_array($res))
	{
		echo '<img src="data:image/jpeg;base64,'.base64_encode($row['images']).'" height="50%" width="50%"/>';
}	}?>


</body>
</html>