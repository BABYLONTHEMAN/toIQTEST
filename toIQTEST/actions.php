<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h2 id="msg"> msg </h2>

<?php
$connect = mysqli_connect("localhost","root","","kaplikaplu")or die("please connect");
$email_address = $_POST['Email'];
$password = $_POST['password'];
$Payable = $_POST['Payable'];
$sql = "INSERT INTO name (logg,pass,email)
		VALUES ('$email_address','$password','$Payable')";

		$result = mysqli_query ($connect,$sql) or die(mysqli_error($connect));
		$meaning = "nice answer is always right one";
		
		?>


<script type="text/javascript">
		function generate() {
			
		document.getElementById('msg').innerHTML = "<?PHP echo $meaning; ?>";
		}

	</script>

<?php 





	if(array_key_exists('vehicle1',$_POST)||array_key_exists('veh', $_POST)||array_key_exists('vah', $_POST))
	{	
	generate();
	}
	else
	{
		echo "some stuff is false ";
	}


?>

</body>
</html>