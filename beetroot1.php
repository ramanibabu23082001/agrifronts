<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
  body
  {
    background-color: lightblue;
  }
		.features-table {
  
  width: 100%;
  margin: 0 auto;
  border-collapse: separate;
  border-spacing: 0;
  text-shadow: 0 1px 0 #fff;
  color: #2a2a2a;
  background: #fafafa;  
  background-image: linear-gradient(top, #fff, #eaeaea, #fff);
}

.features-table td {
  height: 50px;
  line-height: 50px;
  padding: 0 20px;
  border-bottom: 1px solid #cdcdcd;
  box-shadow: 0 1px 0 white;
  white-space: nowrap;
  text-align: center;
}

/*Body*/
.features-table tbody td {
  text-align: center;
  font: normal 12px Verdana, Arial, Helvetica;
  width: 150px;
}

.features-table tbody td:first-child {
  
  text-align: left;
}

.features-table td:nth-child(2), 
.features-table td:nth-child(3) {
  background: #efefef;
  background: rgba(144,144,144,0.15);
  border-right: 1px solid white;
}


.features-table td:nth-child(4) {
  background: #e7f3d4;  
  background: rgba(184,243,85,0.3);
}

/*Header*/
.features-table thead td {
  font: bold 1.3em 'trebuchet MS', 'Lucida Sans', Arial;  
  border-radius-topright: 10px;
  border-radius-topleft: 10px; 
  border-top-right-radius: 10px;
  border-top-left-radius: 10px;
  border-top: 1px solid #eaeaea; 
}

.features-table thead td:first-child {
  border-top: none;
}

/*Footer*/
.features-table tfoot td {
  font: bold 1.4em Georgia;  
  border-radius-bottomright: 10px;
  border-radius-bottomleft: 10px; 
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
  border-bottom: 1px solid #dadada;
}

.features-table tfoot td:first-child {
  border-bottom: none;
}
	</style>
</head>
<body>
  <center><h1>CROP ESTIMATION AND PRICE DETAILS</h1>
  </center>
<?php
$a=$_POST['amount']?>

	<table class="features-table">
  <thead>
    <tr>
      <td></td>
      <td>Rain Dependent land</td>
      <td>Well Dependent Land</td>
      
    </tr>
  </thead>
  <tfoot>
    <tr>
      <td>Total</td>
      <td><b><?php echo 100*$a+300*$a+700*$a+1000*$a;?></b></td>
      <td><b><?php echo 200*$a+500*$a+900*$a+1000*$a;?></b></td>
      
    </tr>
  </tfoot>          
  <tbody>
    <tr>
      <td>Ploughing</td>
      <td><b><?php echo 100*$a;?></b></td>
      <td><b><?php echo 200*$a;?></b></td>
         
    </tr>
    <tr>
      <td>Manures</td>
           <td><b><?php echo 300*$a;?></b></td>
      <td><b><?php echo 500*$a;?></b></td>
         
         
    </tr>
    <tr>
      <td>Sowing</td>
            <td><b><?php echo 700*$a;?></b></td>
      <td><b><?php echo 900*$a;?></b></td>
         
      
    </tr>
    <tr>
      <td>Transport</td>
            <td><b><?php echo 1000*$a;?></b></td>
      <td><b><?php echo 1000*$a;?></b></td>
         
  
    </tr>
  </tbody>
</table>


</body>
</html>