<!DOCTYPE html>
<head>

<link rel="stylesheet" type="text/css" href="c.css">        
<script type='text/javascript' src='https://widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js?ver=6.1.1' id='trustpilot-js'></script>
<body>

	<div class="phpconnectandStuff"> <?php include 'myphp.php';?>  </div>

<!--*************************************************************************-->

<font color= 'darkgreen'> 
	<div class="mfk"> 
Mazafaka
</div>
</font> 
////////////////
<?php
$mysqli = new mysqli("localhost","root","","zhmaraDB");
$result = $mysqli->query("SELECT zhmara FROM zhmara WHERE zhmara =''");
if (($result)&&(!empty($_POST))){ 
	$number = $_POST['nameId'];
	$sql3 = "SELECT zhmara FROM zhmara WHERE zhmara ='126'";
		$result3= mysqli_query ($mysqli,$sql3) or die(mysqli_error($mysqli));

		while($row4 = mysqli_fetch_array($result3)) {
	
	/*if (($result->num_rows == 0)||($nameId==$result)){*/
     $rowEq= $row4['zhmara'];
     if($rowEq =="$number"){

     	echo "Right One choosen";
     }
     	else
     	{
     		echo "not equal";
     	}

     } 
  		
}

?>
 
<!--*************************************************************************-->
<div class="html"> <?php include 'myhtmlAndJs.php';?> </div>



</body>
</head>
</html>