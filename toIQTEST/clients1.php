<?php
$connect = mysqli_connect("localhost","root","","kaplikaplu")or die("please connect");
$email_address = $_POST['Email'];
$password = $_POST['password'];
$Payable = $_POST['Payable'];
$sql = "INSERT INTO name (logg,pass,email)
		VALUES ('$email_address','$password','$Payable')";

		$result = mysqli_query ($connect,$sql) or die(mysqli_error($connect));
		
		if ($result)
		{
			?>
<body>

	////
	Image
	<img src="1.jpg" width=200 height=200>
	////
<section class="dice">
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
</section>


<style type="text/css">
  


section.dice {
  margin: 0 auto;
  height: 10px; width: 10px;
  position: relative;
  transform-style: preserve-3d;
  animation: turn 9s infinite linear;
  left: 320px;
  top: 280px;
}
@keyframes turn{
  0% {   transform: scale(2)  rotateY(0deg) rotateX(30deg) translateY(100px)}
  100% { transform: scale(2) rotateY(360deg) rotateX(30deg) translateY(100px)}
}
.dice div {
  position: absolute;
  font-size: 50px;
  background: white;
  width: 50px; height: 50px;
  text-align: center;
  box-shadow: inset 0 0 25px #aaa, 0 0 20px #fff;
  border-radius: 2px;
  left: 1px;
  top: 1px;

}
.dice div:after, .dice div:before {
  position: relative;
  display: block;
  transform: rotate(0.1deg);  
}
.dice div:nth-child(1):after{
  content: ".";  
  bottom: 20px;  
}
.dice div:nth-child(2) {
  transform: 
    translateX(50%)
    rotateY(90deg) 
    translateX(50%);
}
.dice div:nth-child(2):after{
  content: ". .";
  transform: rotate(45deg);  
  left: 10px; bottom: 15px;
}
.dice div:nth-child(3) {
  transform: 
    translateY(50%)
    rotateX(90deg) 
    translateY(-50%);
}
.dice div:nth-child(3):after{
  content: "...";
  transform: rotate(45deg);  
  left: 10px; bottom: 15px;
}
.dice div:nth-child(4) {
  transform: 
    translateY(-50%)
    rotateX(90deg) 
    translateY(-50%);
}
.dice div:nth-child(4):before{
  content: ". .";
  bottom: 35px;
}
.dice div:nth-child(4):after{
  content: ". .";
  bottom: 65px;
}
.dice div:nth-child(5) {
  transform: 
    translateX(-50%)
    rotateY(-90deg) 
    translateX(-50%);
}
.dice div:nth-child(5):before{
  content: ". . .";
  line-height: 14px;
  bottom: 10px;
}
.dice div:nth-child(5):after{
  content: ". .";
  bottom: 33px;
}
.dice div:nth-child(6) {
  transform: 
    rotateY(-90deg) 
    translateX(-100%)
    rotateY(-90deg);
}
.dice div:nth-child(6):before{
  content: "...";
  bottom: 35px;
}
.dice div:nth-child(6):after{
  content: "...";
  bottom: 60px;
}

</style>
			<section class="wrapper">
			<h2 class="sentence">
			<p> barez,</p>
			<font color="green">
			<div class="slidingHorizontal">

			<span> 
			 <?php
			 echo $email_address ;?>
			 </span>

			 <span> 
			 <?php
			 echo $email_address ;?>
			 </span>

			 <span> 
			 <?php
			 echo $email_address ;?>
			 </span>

			 <span> 
			 <?php
			 echo $email_address ;?>
			 </span>

			 <span> 
			 <?php
			 echo $email_address ;?>
			 </span>
			 </font> 
			 </div>
			 <br>
			 
			 nawakaw nwsrawa, sarkawtw choita tirw pshkawa,...
			 
			 <br>
			 	 "your account has been created, good luck" 
			 <br>
			 </h2>

			 <h2 class="sentence">
			 <div class="slidingVertical">
			 <font color="green">
			 	<span>
			 		<?php
			 		echo $email_address ;
			 		?>
			 	</span>

			 	<span>
			 		<?php
			 		echo $email_address ;
			 		?>
			 	</span>
			 	 	<span>
			 		<?php
			 		echo $email_address ;
			 		?>
			 	</span>

			 	<span>
			 		<?php
			 		echo $email_address ;
			 		?>
			 	</span>
 
			 </font>
			 </div>
			 </h2>
			 </section>
			}

<?php
}
else

{
 echo "keshayak haya " ;
}



/*
New Users
*/
		
		$N_Usr = mysqli_query($connect,'select * from name');  // yakam jar connection enja , awitr anwsi

		//////////////////////////////////////////////////////////////////////////////// YAAAKK
		//<bajya>  LAM linkawa https://stackoverflow.com/questions/4165195/mysql-query-to-get-column-names
		//nawi columnakan pshan ayat ka logg w pass a la db
		//$sql = "SHOW COLUMNS FROM name"; <---- ama bo darxstni nawi colomakana 
echo " <font color='yellow'> Our last 50 Users For The Lottery Are:--...<br> </font";	
echo "<br>";
echo "<br>";

?> 
<font color="yellow"> 
			Here is the winner/s
			...................
			</font>
			<?php

		$sql = "SELECT * FROM name
  				ORDER BY Rand() LIMIT 5"; 
		$result = mysqli_query($connect,$sql);
		while($row = mysqli_fetch_array($result)){
			
			?> 
			
   		  <div class="horizontalFlip"> 
		<font color= 'darkgreen'> 
          <?php echo $row['logg'];?>
          </font>  
            
			 <span> <font color= 'darkgreen'>*****  </font> </span> 
			 <span> <font color= 'darkblue'>*****  </font> </span> 
			<span> <font color= 'yellow'>*****  </font> </span> 
			<span> <font color= 'orange'>*****  </font> </span> 
			 
			 <?php echo " ........";
			
				}







			?>
<br>
<font color="orange"> WINNER WINNER ANNOUNCED... $$ </font>
	<font color="Red"> <?php 
		//this 138 to 146 is golden code
	$s= "SELECT logg FROM name ORDER BY rand() LIMIT 1 ";
	$res=mysqli_query($connect,$s);




	while ($xat = mysqli_fetch_array($res)) {
		echo $xat[0];
		

	}

	
		?> </font> 
		<font color="orange"> $$$</font>
		
		</div> 	


		<style type="text/css">
   		
   		 body{
	background-color: #000000;
	font-family: 'Raleway', sans-serif;
}
/*Heading1*/
h1{
	color: #fff;
	font-size: 44px;
	margin-top: 40px;
	text-align: center;
}
/*Sentence*/
.sentence{
     color: #222;
     font-size: 30px;
     text-align: left;
}
/*Wrapper*/
.wrapper{
    background-color: #f5f5f5;
    opacity: 0.9; 
    font-family: 'Raleway', sans-serif;
    margin: 100px auto;
    padding: 40px 40px;
    position: relative;
    width: 70%;
}

/*Vertical Sliding*/
.slidingVertical{
	display: inline;
	text-indent: 8px;
}
.slidingVertical span{
	animation: topToBottom 12.5s linear infinite 0s;
	-ms-animation: topToBottom 12.5s linear infinite 0s;
	-webkit-animation: topToBottom 12.5s linear infinite 0s;
	color: #00abe9;
	opacity: 0;
	overflow: hidden;
	position: absolute;
}
.slidingVertical span:nth-child(2){
	animation-delay: 2.5s;
	-ms-animation-delay: 2.5s;
	-webkit-animation-delay: 2.5s;
}
.slidingVertical span:nth-child(3){
	animation-delay: 5s;
	-ms-animation-delay: 5s;
	-webkit-animation-delay: 5s;
}
.slidingVertical span:nth-child(4){
	animation-delay: 7.5s;
	-ms-animation-delay: 7.5s;
	-webkit-animation-delay: 7.5s;
}
.slidingVertical span:nth-child(5){
	animation-delay: 10s;
	-ms-animation-delay: 10s;
	-webkit-animation-delay: 10s;
}

/*topToBottom Animation*/
@-moz-keyframes topToBottom{
	0% { opacity: 0; }
	5% { opacity: 0; -moz-transform: translateY(-50px); }
	10% { opacity: 1; -moz-transform: translateY(0px); }
	25% { opacity: 1; -moz-transform: translateY(0px); }
	30% { opacity: 0; -moz-transform: translateY(50px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}
@-webkit-keyframes topToBottom{
	0% { opacity: 0; }
	5% { opacity: 0; -webkit-transform: translateY(-50px); }
	10% { opacity: 1; -webkit-transform: translateY(0px); }
	25% { opacity: 1; -webkit-transform: translateY(0px); }
	30% { opacity: 0; -webkit-transform: translateY(50px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}
@-ms-keyframes topToBottom{
	0% { opacity: 0; }
	5% { opacity: 0; -ms-transform: translateY(-50px); }
	10% { opacity: 1; -ms-transform: translateY(0px); }
	25% { opacity: 1; -ms-transform: translateY(0px); }
	30% { opacity: 0; -ms-transform: translateY(50px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}

/*Horizontal Sliding*/
.slidingHorizontal{
	display: inline;
	text-indent: 8px;
}
.slidingHorizontal span{
	animation: leftToRight 12.5s linear infinite 0s;
	-ms-animation: leftToRight 12.5s linear infinite 0s;
	-webkit-animation: leftToRight 12.5s linear infinite 0s;
	color: #00abe9;
	opacity: 0;
	overflow: hidden;
	position: absolute;
}
.slidingHorizontal span:nth-child(2){
	animation-delay: 2.5s;
	-ms-animation-delay: 2.5s;
	-webkit-animation-delay: 2.5s;
}
.slidingHorizontal span:nth-child(3){
	animation-delay: 5s;
	-ms-animation-delay: 5s;
	-webkit-animation-delay: 5s;
}
.slidingHorizontal span:nth-child(4){
	animation-delay: 7.5s;
	-ms-animation-delay: 7.5s;
	-webkit-animation-delay: 7.5s;
}
.slidingHorizontal span:nth-child(5){
	animation-delay: 10s;
	-ms-animation-delay: 10s;
	-webkit-animation-delay: 10s;
}

/*leftToRight Animation*/
@-moz-keyframes leftToRight{
	0% { opacity: 0; }
	5% { opacity: 0; -moz-transform: translateX(-50px); }
	10% { opacity: 1; -moz-transform: translateX(0px); }
	25% { opacity: 1; -moz-transform: translateX(0px); }
	30% { opacity: 0; -moz-transform: translateX(50px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}
@-webkit-keyframes leftToRight{
	0% { opacity: 0; }
	5% { opacity: 0; -webkit-transform: translateX(-50px); }
	10% { opacity: 1; -webkit-transform: translateX(0px); }
	25% { opacity: 1; -webkit-transform: translateX(0px); }
	30% { opacity: 0; -webkit-transform: translateX(50px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}
@-ms-keyframes leftToRight{
	0% { opacity: 0; }
	5% { opacity: 0; -ms-transform: translateX(-50px); }
	10% { opacity: 1; -ms-transform: translateX(0px); }
	25% { opacity: 1; -ms-transform: translateX(0px); }
	30% { opacity: 0; -ms-transform: translateX(50px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}

/*FadeIn*/
.fadeIn{
	display: inline;
	text-indent: 8px;
}
.fadeIn span{
	animation: fadeEffect 12.5s linear infinite 0s;
	-ms-animation: fadeEffect 12.5s linear infinite 0s;
	-webkit-animation: fadeEffect 12.5s linear infinite 0s;
	color: #00abe9;
	opacity: 0;
	overflow: hidden;
	position: absolute;
}
.fadeIn span:nth-child(2){
	animation-delay: 2.5s;
	-ms-animation-delay: 2.5s;
	-webkit-animation-delay: 2.5s;
}
.fadeIn span:nth-child(3){
	animation-delay: 5s;
	-ms-animation-delay: 5s;
	-webkit-animation-delay: 5s;
}
.fadeIn span:nth-child(4){
	animation-delay: 7.5s;
	-ms-animation-delay: 7.5s;
	-webkit-animation-delay: 7.5s;
}
.fadeIn span:nth-child(5){
	animation-delay: 10s;
	-ms-animation-delay: 10s;
	-webkit-animation-delay: 10s;
}

/*FadeIn Animation*/
@-moz-keyframes fadeEffect{
	0% { opacity: 0; }
	5% { opacity: 0; -moz-transform: translateY(0px); }
	10% { opacity: 1; -moz-transform: translateY(0px); }
	25% { opacity: 1; -moz-transform: translateY(0px); }
	30% { opacity: 0; -moz-transform: translateY(0px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}
@-webkit-keyframes fadeEffect{
	0% { opacity: 0; }
	5% { opacity: 0; -webkit-transform: translateY(0px); }
	10% { opacity: 1; -webkit-transform: translateY(0px); }
	25% { opacity: 1; -webkit-transform: translateY(0px); }
	30% { opacity: 0; -webkit-transform: translateY(0px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}
@-ms-keyframes fadeEffect{
	0% { opacity: 0; }
	5% { opacity: 0; -ms-transform: translateY(0px); }
	10% { opacity: 1; -ms-transform: translateY(0px); }
	25% { opacity: 1; -ms-transform: translateY(0px); }
	30% { opacity: 0; -ms-transform: translateY(0px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}

/*Vertical Flip*/
.verticalFlip{
	display: inline;
	text-indent: 8px;
}
.verticalFlip span{
	animation: vertical 12.5s linear infinite 0s;
	-ms-animation: vertical 12.5s linear infinite 0s;
	-webkit-animation: vertical 12.5s linear infinite 0s;
	color: #00abe9;
	opacity: 0;
	overflow: hidden;
	position: absolute;
}
.verticalFlip span:nth-child(2){
	animation-delay: 2.5s;
	-ms-animation-delay: 2.5s;
	-webkit-animation-delay: 2.5s;
}
.verticalFlip span:nth-child(3){
	animation-delay: 5s;
	-ms-animation-delay: 5s;
	-webkit-animation-delay: 5s;
}
.verticalFlip span:nth-child(4){
	animation-delay: 7.5s;
	-ms-animation-delay: 7.5s;
	-webkit-animation-delay: 7.5s;
}
.verticalFlip span:nth-child(5){
	animation-delay: 10s;
	-ms-animation-delay: 10s;
	-webkit-animation-delay: 10s;
}

/*Vertical Flip Animation*/
@-moz-keyframes vertical{
	0% { opacity: 0; }
	5% { opacity: 0; -moz-transform: rotateX(180deg); }
	10% { opacity: 1; -moz-transform: translateY(0px); }
	25% { opacity: 1; -moz-transform: translateY(0px); }
	30% { opacity: 0; -moz-transform: translateY(0px); }
	80% { opacity: 0; }
	100% { opacity: 0;}
}
@-webkit-keyframes vertical{
	0% { opacity: 0; }
	5% { opacity: 0; -webkit-transform: rotateX(180deg); }
	10% { opacity: 1; -webkit-transform: translateY(0px); }
	25% { opacity: 1; -webkit-transform: translateY(0px); }
	30% { opacity: 0; -webkit-transform: translateY(0px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}
@-ms-keyframes vertical{
	0% { opacity: 0; }
	5% { opacity: 0; -ms-transform: rotateX(180deg); }
	10% { opacity: 1; -ms-transform: translateY(0px); }
	25% { opacity: 1; -ms-transform: translateY(0px); }
	30% { opacity: 0; -ms-transform: translateY(0px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}

/*Horizontal Flip*/
.horizontalFlip{
	display: inline;
	text-indent: 8px;
}
.horizontalFlip span{
	animation: horizontal 12.5s linear infinite 0s;
	-ms-animation: horizontal 12.5s linear infinite 0s;
	-webkit-animation: horizontal 12.5s linear infinite 0s;
	color: #00abe9;
	opacity: 0;
	overflow: hidden;
	position: absolute;
}
.horizontalFlip span:nth-child(2){
	animation-delay: 2.5s;
	-ms-animation-delay: 2.5s;
	-webkit-animation-delay: 2.5s;
}
.horizontalFlip span:nth-child(3){
	animation-delay: 5s;
	-ms-animation-delay: 5s;
	-webkit-animation-delay: 5s;
}
.horizontalFlip span:nth-child(4){
	animation-delay: 7.5s;
	-ms-animation-delay: 7.5s;
	-webkit-animation-delay: 7.5s;
}
.horizontalFlip span:nth-child(5){
	animation-delay: 10s;
	-ms-animation-delay: 10s;
	-webkit-animation-delay: 10s;
}

/*Horizontal Flip Animation*/
@-moz-keyframes horizontal{
	0% { opacity: 0; }
	5% { opacity: 0; -moz-transform: rotateY(180deg); }
	10% { opacity: 1; -moz-transform: translateX(0px); }
	25% { opacity: 1; -moz-transform: translateX(0px); }
	30% { opacity: 0; -moz-transform: translateX(0px); }
	80% { opacity: 0; }
	100% { opacity: 0;}
}
@-webkit-keyframes horizontal{
	0% { opacity: 0; }
	5% { opacity: 0; -webkit-transform: rotateY(180deg); }
	10% { opacity: 1; -webkit-transform: translateX(0px); }
	25% { opacity: 1; -webkit-transform: translateX(0px); }
	30% { opacity: 0; -webkit-transform: translateX(0px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}
@-ms-keyframes horizontal{
	0% { opacity: 0; }
	5% { opacity: 0; -ms-transform: rotateY(180deg); }
	10% { opacity: 1; -ms-transform: translateX(0px); }
	25% { opacity: 1; -ms-transform: translateX(0px); }
	30% { opacity: 0; -ms-transform: translateX(0px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}

/*AntiClockWise Effect*/
.antiClock{
	display: inline;
	text-indent: 8px;
}
.antiClock span{
	animation: anti 12.5s linear infinite 0s;
	-ms-animation: anti 12.5s linear infinite 0s;
	-webkit-animation: anti 12.5s linear infinite 0s;
	color: #00abe9;
	opacity: 0;
	overflow: hidden;
	position: absolute;
}
.antiClock span:nth-child(2){
	animation-delay: 2.5s;
	-ms-animation-delay: 2.5s;
	-webkit-animation-delay: 2.5s;
}
.antiClock span:nth-child(3){
	animation-delay: 5s;
	-ms-animation-delay: 5s;
	-webkit-animation-delay: 5s;
}
.antiClock span:nth-child(4){
	animation-delay: 7.5s;
	-ms-animation-delay: 7.5s;
	-webkit-animation-delay: 7.5s;
}
.antiClock span:nth-child(5){
	animation-delay: 10s;
	-ms-animation-delay: 10s;
	-webkit-animation-delay: 10s;
}

/*AntiClockWise Effect Animation*/
@-moz-keyframes anti{
	0% { opacity: 0; }
	5% { opacity: 0; -moz-transform: rotateX(180deg); }
	10% { opacity: 1; -moz-transform: translateY(0px); }
	25% { opacity: 1; -moz-transform: translateY(0px); }
	30% { opacity: 0; -moz-transform: translateY(0px); }
	80% { opacity: 0; }
	100% { opacity: 0;}
}
@-webkit-keyframes anti{
	0% { opacity: 0; }
	5% { opacity: 0; -webkit-transform: rotate(180deg); }
	10% { opacity: 1; -webkit-transform: translateY(0px); }
	25% { opacity: 1; -webkit-transform: translateY(0px); }
	30% { opacity: 0; -webkit-transform: translateY(0px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}
@-ms-keyframes anti{
	0% { opacity: 0; }
	5% { opacity: 0; -ms-transform: rotate(180deg); }
	10% { opacity: 1; -ms-transform: translateY(0px); }
	25% { opacity: 1; -ms-transform: translateY(0px); }
	30% { opacity: 0; -ms-transform: translateY(0px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}

/*ClockWise Effect*/
.clockWise{
	display: inline;
	text-indent: 8px;
}
.clockWise span{
	animation: clock 12.5s linear infinite 0s;
	-ms-animation: clock 12.5s linear infinite 0s;
	-webkit-animation: clock 12.5s linear infinite 0s;
	color: #00abe9;
	opacity: 0;
	overflow: hidden;
	position: absolute;
}
.clockWise span:nth-child(2){
	animation-delay: 2.5s;
	-ms-animation-delay: 2.5s;
	-webkit-animation-delay: 2.5s;
}
.clockWise span:nth-child(3){
	animation-delay: 5s;
	-ms-animation-delay: 5s;
	-webkit-animation-delay: 5s;
}
.clockWise span:nth-child(4){
	animation-delay: 7.5s;
	-ms-animation-delay: 7.5s;
	-webkit-animation-delay: 7.5s;
}
.clockWise span:nth-child(5){
	animation-delay: 10s;
	-ms-animation-delay: 10s;
	-webkit-animation-delay: 10s;
}

/*ClockWise Effect Animation*/
@-moz-keyframes clock{
	0% { opacity: 0; }
	5% { opacity: 0; -moz-transform: rotate(-180deg); }
	10% { opacity: 1; -moz-transform: translateX(0px); }
	25% { opacity: 1; -moz-transform: translateX(0px); }
	30% { opacity: 0; -moz-transform: translateX(0px); }
	80% { opacity: 0; }
	100% { opacity: 0;}
}
@-webkit-keyframes clock{
	0% { opacity: 0; }
	5% { opacity: 0; -webkit-transform: rotate(-180deg); }
	10% { opacity: 1; -webkit-transform: translateX(0px); }
	25% { opacity: 1; -webkit-transform: translateX(0px); }
	30% { opacity: 0; -webkit-transform: translateX(0px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}
@-ms-keyframes clock{
	0% { opacity: 0; }
	5% { opacity: 0; -ms-transform: rotate(-180deg); }
	10% { opacity: 1; -ms-transform: translateX(0px); }
	25% { opacity: 1; -ms-transform: translateX(0px); }
	30% { opacity: 0; -ms-transform: translateX(0px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}

/*Pop Effect*/
.popEffect{
	display: inline;
	text-indent: 8px;
}
.popEffect span{
	animation: pop 12.5s linear infinite 0s;
	-ms-animation: pop 12.5s linear infinite 0s;
	-webkit-animation: pop 12.5s linear infinite 0s;
	color: #00abe9;
	opacity: 0;
	overflow: hidden;
	position: absolute;
}
.popEffect span:nth-child(2){
	animation-delay: 2.5s;
	-ms-animation-delay: 2.5s;
	-webkit-animation-delay: 2.5s;
}
.popEffect span:nth-child(3){
	animation-delay: 5s;
	-ms-animation-delay: 5s;
	-webkit-animation-delay: 5s;
}
.popEffect span:nth-child(4){
	animation-delay: 7.5s;
	-ms-animation-delay: 7.5s;
	-webkit-animation-delay: 7.5s;
}
.popEffect span:nth-child(5){
	animation-delay: 10s;
	-ms-animation-delay: 10s;
	-webkit-animation-delay: 10s;
}

/*Pop Effect Animation*/
@-moz-keyframes pop{
	0% { opacity: 0; }
	5% { opacity: 0; -moz-transform: rotate(0deg) scale(0.10) skew(0deg) translate(0px); }
	10% { opacity: 1; -moz-transform: translateY(0px); }
	25% { opacity: 1; -moz-transform: translateY(0px); }
	30% { opacity: 0; -moz-transform: translateY(0px); }
	80% { opacity: 0; }
	100% { opacity: 0;}
}
@-webkit-keyframes pop{
	0% { opacity: 0; }
	5% { opacity: 0; -webkit-transform: rotate(0deg) scale(0.10) skew(0deg) translate(0px);}
	10% { opacity: 1; -webkit-transform: translateY(0px); }
	25% { opacity: 1; -webkit-transform: translateY(0px); }
	30% { opacity: 0; -webkit-transform: translateY(0px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}
@-ms-keyframes pop{
	0% { opacity: 0; }
	5% { opacity: 0; -ms-transform: rotate(0deg) scale(0.10) skew(0deg) translate(0px); }
	10% { opacity: 1; -ms-transform: translateY(0px); }
	25% { opacity: 1; -ms-transform: translateY(0px); }
	30% { opacity: 0; -ms-transform: translateY(0px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}

/*Push Effect*/
.pushEffect{
	display: inline;
	text-indent: 8px;
}
.pushEffect span{
	animation: push 12.5s linear infinite 0s;
	-ms-animation: push 12.5s linear infinite 0s;
	-webkit-animation: push 12.5s linear infinite 0s;
	color: #00abe9;
	opacity: 0;
	overflow: hidden;
	position: absolute;
}
.pushEffect span:nth-child(2){
	animation-delay: 2.5s;
	-ms-animation-delay: 2.5s;
	-webkit-animation-delay: 2.5s;
}
.pushEffect span:nth-child(3){
	animation-delay: 5s;
	-ms-animation-delay: 5s;
	-webkit-animation-delay: 5s;
}
.pushEffect span:nth-child(4){
	animation-delay: 7.5s;
	-ms-animation-delay: 7.5s;
	-webkit-animation-delay: 7.5s;
}
.pushEffect span:nth-child(5){
	animation-delay: 10s;
	-ms-animation-delay: 10s;
	-webkit-animation-delay: 10s;
}

/*Push Effect Animation*/
@-moz-keyframes push{
	0% { opacity: 0; }
	5% { opacity: 0; -moz-transform: rotate(0deg) scale(2) skew(0deg) translate(0px); }
	10% { opacity: 1; -moz-transform: translateX(0px); }
	25% { opacity: 1; -moz-transform: translateX(0px); }
	30% { opacity: 0; -moz-transform: translateX(0px); }
	80% { opacity: 0; }
	100% { opacity: 0;}
}
@-webkit-keyframes push{
	0% { opacity: 0; }
	5% { opacity: 0; -webkit-transform:rotate(0deg) scale(2) skew(0deg) translate(0px);}
		10% { opacity: 1; -webkit-transform: translateX(0px); }
	25% { opacity: 1; -webkit-transform: translateX(0px); }
	30% { opacity: 0; -webkit-transform: translateX(0px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}
@-ms-keyframes push{
	0% { opacity: 0; }
	5% { opacity: 0; -ms-transform: rotate(0deg) scale(2) skew(0deg) translate(0px); }
	10% { opacity: 1; -ms-transform: translateX(0px); }
	25% { opacity: 1; -ms-transform: translateX(0px); }
	30% { opacity: 0; -ms-transform: translateX(0px); }
	80% { opacity: 0; }
	100% { opacity: 0; }
}
/*Footer*/
h3{
	color: #fff;
	font-size: 30px;
	margin-top: 20px;
	text-align: center;
}

	
#breaking-news-container {
  height: 30px;
  width: 694px;
  overflow: hidden;
  position: absolute;
  &:before {
    content: "";
    width: 30px;
    height: 30px;
    background-color: #3399FF;
    position: absolute;
    z-index: 2;
  }
}


</style>

		</body>
			
			<?php
			
 
			
		//</bajya>
			///////////////////************************///////////////////////////////// 

			//<bajya2>
			
			//</bajya2>
		

		
?>
