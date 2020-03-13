<!DOCTYPE html>
<html>
<head>
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
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
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
#text{display:none;color:red}
	</style>
}
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
      <script>
var input = document.getElementById("myInput");
var text = document.getElementById("text");
input.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
;
</script>

      <form name="new.php" action="new1.php" method="post" enctype="multipart/form-data">
      
        <h1>Sign Up</h1>
        
        <fieldset>
          
          <label for="name">Name:</label>
          <input type="text" id="myInput" placeholder="Name" name="user_name" autofocus="" required="">
          <p id="text"></p>
          
          <label for="father">Father's Name:</label>
          <input type="text" id="father" placeholder="Father's Name" name="user_father" autofocus="" required="">
          
          <label for="dob">Date of Bith:</label>
          <input type="date" id="dob" name="dob" required="">

          <label for="age">Age:</label>
          <input type="number" id="age"placeholder="Age" name="age" required="">

            <label for="email">E-mail:</label>
          <input type="email" id="email" placeholder="Email" name="email" autofocus="" required="">
          
            <label for="password">Password:</label>
          <input type="password" id="pass" placeholder="Password" name="password" autofocus="" required="">
          
          
          <label>Gender:</label>
          <input type="radio" id="under_13" value="male" name="user_age" required=""><label for="under_13" class="light">Male</label><br>
          <input type="radio" id="over_13" value="female" name="user_age"><label for="over_13" class="light">Female</label>
          <br><br>Photo  :<br>
          <input type="file" id="file"  name="f1" required=""><label for="file" class="file">
        </fieldset>
        
        
          
          <label for="address">Address:</label>
          <textarea id="address" name="address" required=""></textarea>
        </fieldset>
        
        <label for="job">Community:</label>
        <select id="community" name="community" required="">
         
            <option value="BC">BC</option>
            <option value="OC">OC</option>
            <option value="MBC">MBC</option>
            <option value="others"> Others</option>
          
        </select>
         <label for="job">District:</label>
        <select id="district" name="district" required="">
        	
			<option value="chennai">CHENNAI</option>
			<option value="trichy">TRICHY</option>
			<option value="vellore">VELLORE</option>
			<option value="krishnagiri">KRISHNAGIRI</option>
             <option value="thanjavur">THANJAVUR</option>
             <option value="thiruvallur">THIRUVALLUR</option>
             <option value="kanchipuram">KANCHIPURAM</option>
             <option value="thiruvannamalai">THIRUVANNAMALAI</option>
             <option value="dharmapuri">DHARMAPURI</option>
             <option value="villupuram">VILLUPURM</option>
             <option value="salem">SALEM</option>
             <option value="cuddalore">CUDDALORE</option>
             <option value="erode">ERODE</option>
             <option value="nilgiris">NILGIRIS</option>
             <option value="namakkal">NAMAKKAL</option>
             <option value="parembalur">PAREMBALUR</option>
             <option value="ariyalur">ARIYALUR</option>
             <option value="tiruchirappali">TIRUCHIRAPPALI</option>
             <option value="nagapattinam">NAGAPATTINAM</option>
             <option value="kanniyakumari">KANNIYAKUMARI</option>
             <option value="thirunelveli">THIRUNELVELI</option>
             <option value="ramanathapuram">RAMANATHAPURAM</option>
             <option value="virudhunagar">VIRUDHUNAGAR</option>
             <option value="sivagangai">SIVAGANGAI</option>
             <option value="dindigul">DINDIGUL</option>
             <option value="coimbatore">COIMBATORE</option>
             <option value="tiruppur">TIRUPPUR</option>
             <option value="karur">KARUR</option>
             <option value="nagapattinam">NAGAPATTINAM</option>
             <option value="cuddalore">CUDDALORE</option>
             <option value="madurai">MADURAI</option>
             <option value="theni">THENI</option>
            
        </select>
        
          <label>Members Involved in Farming:</label>
          <input type="checkbox" id="myself" value="myself" name="check[]" required=""><label class="light" for="myself">Myself</label><br>
            <input type="checkbox" id="wife" value="wife" name="check[]"><label class="light" for="wife">Wife</label><br>
          <input type="checkbox" id="children" value="children" name="check[]"><label class="light" for="children">Children</label>
        
        </fieldset>
        <button type="submit">Sign Up</button>
      </form>
      
    </body>
</html>
</body>
</html>