<!DOCTYPE html>
<head>
<body>
	
	<link rel="stylesheet" type="text/css" href="c.css">
	

	<!-- --> 
<?php
$connect = mysqli_connect("localhost","root","","kaplikaplu")or die("please connect");
$wallam = $_POST['wallam'];
$email_address = $_POST['Email'];
$password = $_POST['password'];
$Payable = $_POST['Payable'];
$sql = "INSERT INTO name (logg,pass,email,wallam)
		VALUES ('$email_address','$password','$Payable','$wallam')";

		$result = mysqli_query ($connect,$sql) or die(mysqli_error($connect));
		
		if ($result)
		{

		}
			?>

			<?php ///////////////////

//////////////////////////
?>

	
	<img src="02.jpg" width=200 height=200>
<label for="cars">Choose a car:</label>
<h1>Show Checkboxes</h1>
<h2 id="msg"> msg</h2>
**********************************
progress bar
<div id="progressBar">
  <div class="bar"></div>
</div>
<!---->
<!--agar baraka tawaw bw bro bo paigy dway aw-->

<!--include or Reference to jQuery and javascript file inside our page-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="jquery-3.5.1.min.js"></script>
<script src="javascriptIQ.js"></script>
*****************************************

<form action="http://localhost/WEB/webalizer/toIQTEST/test2.php" method="post">
  <input type="radio" id="vehicle1" name="wallam" value="Bike">
  <label for="vehicle1"> دڕۆن</label><br>
  <input type="radio" id="vehicle2" name="wallam" value="Car">
  <label for="vehicle2"> ڕۆبۆت</label><br>
  <input type="radio" id="vehicle3" name="wallam" value="Boat">
  <label for="vehicle3"> تەیارە</label><br><br>
  <input type="submit" value="Submit">
</form>


</body>
</head>
</html>