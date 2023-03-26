		
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

		/*$zhmara = $_POST['zhmara'];
		$sqlWallam = "INSERT INTO webs (zhmara)
		VALUES ('$zhmara')";
		$result3 = mysqli_query ($connect2, $sqlWallam) or die(mysqli_error($connect2));
		********************************************************************/

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
		
		
		while($row3 = mysqli_fetch_array($result2)) {
			?>
			<h1> <?php echo $row3['webpages']; 
			//bzanin function esh aka wary grin la naw loopa ?
			?>
		</h1>
			<script>

			var mywin = null;

			 function myfun(){
				


			
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
