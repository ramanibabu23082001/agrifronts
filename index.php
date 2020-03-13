<!DOCTYPE html>
<html>
<head>
  <style>
  
  </style>
<style>

@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:gold;
  
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
.rahul
{
  border:solid 5px white ;
  color:white;
}

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
.image
{
  background-image: url("na.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.sd
{
  color: white;
  border:solid 2px red;
  font-size: 20px;
}
.container {
  position: relative;
  text-align: center;
  color: white;
}

.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 16px;
}

.top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}

.top-right {
  position: absolute;
  top: 8px;
  right: 16px;
}

.bottom-right {
  position: absolute;
  bottom: 8px;
  right: 16px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
a:hover
{
    background-color:light blue;
}
</style>
</head>
<body class="image" >
  <center><img src="logo.png" height="200px" width="300px"></center>
 <marquee>  <h1><span class="blue"></span>Farmers determine the nations wealth <span class="blue"></span> <span class="yellow">Farming practice enhances nation's pride</span></h1></marquee>
<p> 
 <div class="rahul">                
 <b>Farmers are the nations pride.Their role plays a significant contribution to the nations economy.But in other hahnd they are not getting the returns in favour of them.Such as
 <ul>
 <li>They are not paid enough.The middle man affects the payment gateway </li>  
 <li> They suffer from sudden fall in crop prices </li>
 <li>Financial assistance are not enough for their cultivation</li>
</ul>
Thus this website helps in rendering the farmers by all means to a greater extent.</div>
<div class="container">
<a href="new.php"><img src="farmer.jpg" style="width: 400px;height: 250px;  " hspace="120" vspace=""></a>
  <div class="centered" class="sd"><font size="7px" color="black"><b><i>FARMER SIGNUP</i></b></font></div> </div>
  <div  class="container"> <a href="log.php"><img src="farmer1.jpg" style="width: 400px;height: 250px;" hspace="420" ><br> <div class="centered"><font size="7px" color="black"><b><i>FARMER LOGIN</i></b></font></div></div> 
<div class="container" class="sd"><a href="emp.php"><img src="customer2.jpg" hspace="320"  style="width: 400px;height: 250px;" ></a>
 <div class="centered" class="sd"><font size="7px" color="black"><b><i>CUSTOMERS SIGNUP</i></b></font></div></div>
<div class="container">   <a href="loge.php"><img src="customer1.jpg" hspace="225" style="width: 400px;height: 250px;"></a>  
 <div class="centered" class="sd"><font size="7px" color="black"><b><i>CUSTOMERS LOGIN</i></b></font></div> <br></div>

<div class="container">   <a href="sample.php"><img src="ko.jpg" hspace="225" style="width: 400px;height: 250px;"></a>  
 <div class="centered" class="sd"><font size="7px" color="black"><b><i>KONWLEDGE</i></b></font></div> <br></div>
</p></b>
</div>
</body>
</html>
