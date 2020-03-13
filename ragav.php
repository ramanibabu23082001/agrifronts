<!DOCTYPE html>
<html>
<head><style>
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
.active
{
  background-color: red;
  color: white;
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
		@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500);
*:focus {
  outline: none;
}

body {
  margin: 0;
  padding: 0;
  background: #DDD;
  font-size: 16px;
  color: #222;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
}

#login-box {
  position: relative;
  margin: 5% auto;
  width: 600px;
  height: 600px;
  background: #FFF;
  border-radius: 2px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
}

.left {
  position: absolute;
  top: 0;
  left: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 600px;
}

h1 {
  margin: 0 0 20px 0;
  font-weight: 300;
  font-size: 28px;
}

input[type="text"],
input[type="password"] {
  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 220px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;
}

input[type="text"]:focus,
input[type="password"]:focus {
  border-bottom: 2px solid #16a085;
  color: #16a085;
  transition: 0.2s ease;
}

input[type="submit"] {
  margin-top: 28px;
  width: 120px;
  height: 32px;
  background: #16a085;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  text-transform: uppercase;
  transition: 0.1s ease;
  cursor: pointer;
}

input[type="submit"]:hover,
input[type="submit"]:focus {
  opacity: 0.8;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}

input[type="submit"]:active {
  opacity: 1;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}

.or {
  position: absolute;
  top: 180px;
  left: 280px;
  width: 40px;
  height: 40px;
  background: #DDD;
  border-radius: 50%;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  line-height: 40px;
  text-align: center;
}

.right {
  position: absolute;
  top: 0;
  right: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 600px;
  background: url('oop.jpeg');
  background-size: cover;
  background-position: center;
  border-radius: 0 2px 2px 0;
}

.right .loginwith {
  display: block;
  margin-bottom: 40px;
  font-size: 28px;
  color:white;
  text-align: center;
}

button.social-signin {
  margin-bottom: 20px;
  width: 220px;
  height: 36px;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  transition: 0.2s ease;
  cursor: pointer;
}

button.social-signin:hover,
button.social-signin:focus {
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.2s ease;
}

button.social-signin:active {
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.2s ease;
}

button.social-signin.facebook {
  background: blue;
}

button.social-signin.twitter {
  background: gold;
}

button.social-signin.google {
  background: green;
}
	</style>
</head>
<body>
  <div class="ram"><ul>
  <li><a href="dash.php">Home</a></li>
  <li><a href="price.html">Market Price</a></li>
  <li><a href="display.php">Your Orders</a></li>
   <li><a href="display3.php">Order Taken</a></li>
  <li><a href="image.php">Crop List</a></li>
  <li><a href="attempt1.php">Demands</a></li >
  <li><a href="ragav.php" class="active">Place Orders</a></li>  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Forms</a>
    <div class="dropdown-content">
      <a href="kisan.php">Kisaan Registration</a>
      <a href="loan1.php">Loan Application</a>
     <li style="float: right;"><a  href="logout.php"> Log Out</a>
    
  </li>
</ul></div>
<div id="login-box">
  <div class="left">
    <h1>Sell at Best Price</h1>
    <form action="ragav1.php" method="POST">
    
   <input type="text" name="name" placeholder="Username" required="" />
    Product Name:<select name="crop">
        <option value="avarai">Avarai</option>
        <option value="bigonion">Bigonion</option>
        <option value="beans">Beans</option>
        <option value="brinjal">Brinjal</option>
        <option value="beetroot">Beetroot</option>
        <option value="babypotato">Baby Potato</option>
<option value="drumstick">Drumstick</option>
<option value="ginger">Ginger</option>
<option value="smallgarlic">Small Garlic</option>
<option value="smallonion">Small Onion</option>
<option value="tomato">Tomato</option>
<option value="wheat">Wheat</option>
<option value="watermelon">Watermelon</option>
<option value="cabbage">Cabbage</option>
<option value="carrot">Carrot</option>
      </select><br><br>
    
    <input type="password" name="password" placeholder="Password" required="" />
    <input type="text" name="location" placeholder="Location" required="" />
     <input type="text" name="quantity" placeholder="Quantity" required="" />
      Measure in:<br><input type="radio" name="measure" value="grams" required="" />Grams
       <input type="radio" name="measure" value="kilo" required="" />Kilograms<br><br>
       Category   :<select name="category" required="">
          <option value="1"> cereals </option><br>
          <option value="2"> pulses </option><br>
          <option value="3"> dairies</option><br></select>
          <br><br>
          Market :<br>
          <input type="checkbox" name="check[]" value="local market" required="">Local Market<br>
           <input type="checkbox" name="check[]" value="state market">State Market<br>
            <input type="checkbox" name="check[]" value="national market">National Market<br>
            
    
    <input type="submit" name="submit" value="Submit" />
  </div>
  
  <div class="right">
    <span class="loginwith">Sell via<br />other site</span>
    
    <button class="social-signin facebook">Sell  on Kisaan Mandi</button>
    <button class="social-signin twitter">Sell on Big Basket</button>
    <button class="social-signin google">Sell on Fruit Commerce</button>
  </div></form>
  <div class="or">OR</div>
</div>
</body>
</html>