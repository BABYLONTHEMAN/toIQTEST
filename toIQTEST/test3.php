<!DOCTYPE html>
<head>

<body>
	<link rel="stylesheet" type="text/css" href="c.css">
	<script> var a;</script>

	<!-- --> 
		
<?php
$connect = mysqli_connect("localhost","root","","kaplikaplu")or die("please connect");
$wallam = $_POST['wallam'];
$email_address = $_POST['Email'];
$password = $_POST['password'];
$Payable = $_POST['Payable'];
//$webs = $_POST['webs'];
$sql = "INSERT INTO name (logg,pass,email,wallam)
		VALUES ('$email_address','$password','$Payable','$wallam')";
		$result = mysqli_query ($connect,$sql) or die(mysqli_error($connect));


		$connect2 = mysqli_connect("localhost","root","","websites")or die("please connect");
//$webs = $_POST['webs'];
//$webs = $_POST['wallam'];
$sql2 = "SELECT * FROM webs
  				ORDER BY Rand() LIMIT 1";
		$result2 = mysqli_query ($connect2,$sql2) or die(mysqli_error($connect2));
		
		//*****************************************************************
		//*****************************************************************
		//create arrays for our pages to get redirected randomly
		/*<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< 
		$websitesThatWeDontNeedRightNow=array('http://localhost/WEB/webalizer/toIQTEST/test3.php',
					,'http://localhost/WEB/webalizer/toIQTEST/test4.php',
					'http://localhost/WEB/webalizer/toIQTEST/test5.php',
					'http://localhost/WEB/webalizer/toIQTEST/test6.php',
					'http://localhost/WEB/webalizer/toIQTEST/test7.php',
					'http://localhost/WEB/webalizer/toIQTEST/test8.php',
					'http://localhost/WEB/webalizer/toIQTEST/test9.php',
					'http://localhost/WEB/webalizer/toIQTEST/test10.php');
		>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>*/
		

		$someR;
		while($row3 = mysqli_fetch_array($result2)) {
			?>
			<h1> <?php echo $row3['webpages']; 
			//bzanin function esh aka wary grin la naw loopa ?
			?>
		</h1>
			<script>

			var mywin = null;

			 function myfun(){
				window.close();
			 mywin =  window.open("<?php echo $row3['webpages'] ?>");	

alert(mywin);
			 	
			}

	

			/*
								chrome.tabs.query({}, function (tabs) {
    for (var i = 0; i < tabs.length; i++) {
        chrome.tabs.remove(tabs[i].id);
    }

    */

		</script>
			<?php

			
		};

		/*	
		*/
		//*****************************************************************
		//*****************************************************************
		
			?>

	
	<img src="03.jpg" width=200 height=200>
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
<!--<script src="jquery-3.5.1.min.js"></script> -->
<script src="javascriptIQ.js"></script>
*****************************************
<script>
	var t;
//window.onload = myfun();

	
/*
function formSubmit(element){
  var url = $("#test").attr("action", r());
  url += "?sjajsj" + element.name + "=uuu" + element.value;
  $("#test").attr("action", url);
  $("#test")[0].submit();
}
*/





	/*function kwraBgora()
	{ window.location="stuff";}
document.getElementById("button").addEventListener("submit", myfun);
	*/


/*var button = document.getElementById("button");
button.onclick = window.location = bigoraSite;
 FUNCTION MANUAL REDIRECT NOT WORKING PROPERLY JUST LOAD BY ITSELF ON PAGE LOAD AT THE BEGINNING .   */ 
</script>
<form  method="post">
  <label name="username">ژمارەکە چەندە ؟ : </label>
  <input type="text" id="username" name="wallam" value=''> <br>
  <input onclick = "myfun();" type="submit" value="Submit" id="button" style="background-color: rgb(240, 6, 80);">


</form>


</body>
</head>
</html>