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
.active
{
  background-color: red;
  color: white;
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
<style>

@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:gold;
  background-color:#1F2739;
}

div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;

}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}




.blue { color: #185875; }
.yellow { color: #FFF842; }

.gallery:hover
{
   background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
     transition-duration: 0.4s;
     transition-property: all;
  transition-timing-function: line;
}
.rr
{
  height: 50px;
}
</style>
</head>
<body>
  <div class="ram"><ul>
  <li><a href="dash.php" >Home</a></li>
  <li><a href="price.html">Market Price</a></li>
  <li><a href="display.php">Your Orders</a></li>
   <li><a href="display3.php">Order Taken</a></li>
  <li><a href="image.php" class="active">Crop List</a></li>
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
  <h1><span class="blue"></span>Market<span class="blue"></span> <span class="yellow">Crop List</pan></h1>


<div class="gallery">
  <a target="_blank" href="avarai.php">
    <img src="avarai.jpg" width="600" height="400">
  </a>
  <div class="desc">AVARAI</div>
</div>

<div class="gallery">
  <a target="_blank" href="baby.php">
    <img src="baby.jpg" width="600" height="400">
  </a>
  <div class="desc">BABY POTATO</div>
</div>

<div class="gallery">
  <a target="_blank" href="beetroot.php">
    <img src="beatroot.jpg" width="600" height="300">
  </a>
  <div class="desc">BEETROOT</div>
</div>

<div class="gallery">
  <a target="_blank" href="beans.php">
    <img src="beans.jpg" width="600" height="300">
  </a>
  <div class="desc">BEANS</div>
</div>

<div class="gallery">
  <a target="_blank" href="bigonion.php">
    <img src="big onion.jpg" width="600" height="300">
  </a>
  <div class="desc">BIG ONION</div>
</div>

<div class="gallery">
  <a target="_blank" href="brinjal.php">
    <img src="brinjal.jpg" width="600" height="300">
  </a>
  <div class="desc">BRINJAL</div>
</div>
<div class="gallery">
  <a target="_blank" href="cabbage.php">
    <img src="cabbage.jpg" width="600" height="300">
  </a>
  <div class="desc">CABBAGE</div>
</div>

<div class="gallery">
  <a target="_blank" href="carrot.php">
    <img src="carrot.jpg" width="600" height="300">
  </a>
  <div class="desc">CARROT</div>
</div>
<div class="gallery">
  <a target="_blank" href="ginger.php">
    <img src="genger.jpg" width="600" height="300">
  </a>
  <div class="desc">GINGER</div>
</div>
<div class="gallery">
  <a target="_blank" href="drumstick.php">
    <img src="drumstick.jpg" width="600" height="300">
  </a>
  <div class="desc">DRUMSTICK</div>
</div>


<div class="gallery">
  <a target="_blank" href="smallonion.php">
    <img src="op.jpeg" width="600" height="300">
  </a>
  <div class="desc">SMALL ONION</div>
</div>
<div class="gallery">
  <a target="_blank" href="smallgarlic.php">
    <img src="pp.jpeg" width="600" height="300">
  </a>
  <div class="desc">SMALL GARLIC</div>
</div>

<div class="gallery">
  <a target="_blank" href="watemelon.php">
    <img src="watermelon.jpg" width="600" height="300">
  </a>
  <div class="desc">WATERMELON</div>
</div>
<div class="gallery">
  <a target="_blank" href="tomato.php">
    <img  src="tomato.jpg" width="600" height="300">
  </a>
  <div class="desc">TOMATO</div>
</div>
<div class="gallery">
  <a target="_blank" href="wheat.php">
    <img  src="wheat.jpeg" width="600" height="300">
  </a>
  <div class="desc">WHEAT</div>
</div>





</body>
</html>
