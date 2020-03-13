<!DOCTYPE html>
<html>
<head>
    <style>
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: Gold;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: green;
  color: white;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: lightgrey;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;
color: black;}

.dropdown:hover .dropdown-content {
  display: block;
  color: black;
}
.ram
{
  height:130px;
  width:100%;
  
}

  </style>
	<title></title>
	<style type="text/css">
		*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
  background: #f4f7f8;

}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background:lightblue;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}
	</style>
</head>
<body>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
<div class="ram"><ul>
  <li><a href="dash.php" class="active">Home</a></li>
  <li><a href="price.html">Market Price</a></li>
  <li><a href="display.php">Your Orders</a></li>
   <li><a href="display3.php">Order Taken</a></li>
  <li><a href="image.php">Crop List</a></li>
  <li><a href="attempt1.php">Demands</a></li >
  <li><a href="ragav.php">Place Orders</a></li>  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Forms</a>
    <div class="dropdown-content">
      <a href="kisan.php">Kisaan Registration</a>
      <a href="loan1.php">Loan Application</a>
     <li style="float: right;"><a  href="logout.php"> Log Out</a>
    
  </li>
</ul></div>
      <form action="loan2.php" method="post">
      
        <h1>Loan Application</h1>
        
        <fieldset>
          
          <label for="name">Name:</label>
          <input type="text" id="name" placeholder="Name" name="user_name" autofocus="" required="">
            <label for="name"> Loan Name:</label>
          <input type="text" id="name" placeholder="Loan name" name="loan" autofocus="" required="">
          
          <label for="father">Father's Name:</label>
          <input type="text" id="father" placeholder="Father's Name" name="user_father" autofocus="" required="">
          
          <label for="dob">Date of Bith:</label>
          <input type="date" id="dob" name="user_dob" required="">

          <label for="age">Age:</label>
          <input type="number" id="age"placeholder="Age" name="age" required="">

            <label for="email">E-mail:</label>
          <input type="email" id="email" placeholder="Email" name="email" autofocus="" required="">
          
            <label for="password">Password:</label>
          <input type="password" id="pass" placeholder="Password" name="password" autofocus="" required="">
          
          
          <label>Gender:</label>
          <input type="radio" id="under_13" value="male" name="gender" required=""><label for="under_13" class="light">Male</label><br>
          <input type="radio" id="over_13" value="female" name="gender"><label for="over_13" class="light">Female</label>
          <br><br>
        
        
        
          
          <label for="address">Address:</label>
          <textarea id="address" name="address" required=""></textarea>
      
        
        <label for="job">Community:</label>
        <select id="community" name="community" required="">
         
            <option value="BC">BC</option>
            <option value="OC">OC</option>
            <option value="MBC">MBC</option>
            <option value="others"> Others</option>
          
        </select>
         <label for="job">Category:</label>
        <select id="category" name="category" required="">
        	
			<option value="christian">Christian</option>
			<option value="hindu">Hindhu</option>
			<option value="muslim">Muslim</option>
			<option value="sikh">Sikh</option>
             <option value="zorastrian">Zorastrian</option>
             <option value="buddhist">Buddhist</option>
             
             
            
        </select>
        
          <label>Types of Farming:</label>
          <input type="checkbox" id="myself" value="extensive" name="check[]" required=""><label class="light" for="myself">Extensive farming</label><br>
            <input type="checkbox" id="wife" value="intensive" name="check[]"><label class="light" for="wife">Intensive Farming</label><br>
          <input type="checkbox" id="children" value="specialised" name="check[]"><label class="light" for="children">Specialised Farming</label>
         <br> <input type="checkbox" id="children" value="dry" name="check[]"><label class="light" for="children">Dry Farming</label>
        <br>  <input type="checkbox" id="children" value="cooperative" name="check[]"><label class="light" for="children">Cooperative Farming</label><br>
          <input type="text" id="name" placeholder="Name of Bank" name="user_bank" autofocus="" required="">
          <input type="text" id="name" placeholder="Branch Name" name="user_branch" autofocus="" required="">
          <input type="number" id="name" placeholder="Account number" name="user_acc" autofocus="" required="">
          <input type="text" id="name" placeholder="Amount Required" name="user_accno" autofocus="" required="">
          
        
        </fieldset>

        <button type="submit">Sign Up</button>
      </form>
      
    </body>
</html>
</body>
</html>