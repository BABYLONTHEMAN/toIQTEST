<?php ?>
<!DOCTYPE html>
<html>
<head>
<body>
<link rel="stylesheet" type="text/css" href="c.css">
<!--  this is a div class tab . https://www.w3schools.com/howto/howto_js_vertical_tabs.asp  --> 
<!--///////////////ADD CSS///////// -->
<section class="dice">
</section>
<img src="g.jpg" id="g">GSD  
<form id="formy_rast_Xwarawa"  class="text">
 <div class="slidingVertical">
<span class="verticalFlip"> The Winners Are:
</span> 
<br> 
<font "34" color=" powderblue " >
<span> 
<?php 
///////////////////////////


      ##############################
      $connect = mysqli_connect("localhost","root","","kaplikaplu")or die("please connect");
      
      ##############################

    $sql = "SELECT * FROM name
          ORDER BY Rand() LIMIT 5"; 
    $result = mysqli_query($connect,$sql);
    while($row = mysqli_fetch_array($result)){
      
      ?> 
          <?php echo $row['logg'];   } 
      
     
///////////////////////////
?>
<?php 

////////////////////////////////
////////////////////////////////

?>
 
<script type="text/javascript"> 
   function eshka(){
  document.getElementById('test').innerHTML="namemmmmmm";

  }

   (function()
                    {
                        var title = document.getElementById('g').focus();
                        var height = title.clientHeight || title.offsetHeight;

                        if(height > 50) {
                            title.style.marginTop = 20;
                        }
                    })();

  
  </script>


<?php
////////////////////////// Halbzhardny Nawy Random

  
///////////////////Function inside function///////////////////////
function random2(){
	 function randomName() {
    $names = array(
        'Neo',
        'Morpheux',
        'program',
        // and so on
    );
    
return $names[rand ( 0 , count($names) -1)];
}
print randomName();

}
/////////////////End of function inside Function/////////////////////


?>


<?php ///////////////////
if(array_key_exists('generate',$_POST)){
	
}
//////////////////////////
?>
</span>
<br> <br><br><br><br><br><br>
<!-- Scripty formy_rast_Xwarawa -->
<script type="text/javascript">
function jvs(){
var item = document.getElementById("lera");
document.getElementById("lera").remove();


	var pdrwstka= document.createElement("p");
	var rsta = document.createTextNode("<?php print random2()?>");
pdrwstka.appendChild(rsta);

document.getElementById("york").remove();

document.getElementById("nYork").appendChild(pdrwstka).style.color = "Green";
 


}
</script>
<!--End formy_rast_Xwarawa-->
<form method="post">
</form>
<button id="jv" onclick ="jvs()">  
    <input type="submit" name="generate" id="id"  value="GENERATE"> 
 
     </button>
     
     <ul id="lera">
    <li > lera
    </li>
   
    <li>lera2
    </li>
    </ul>
    <p id = "york" >  <font color ="red"> york </font> </p>
    <p id = "nYork"> </p> 
</font>
   </div>
   
<div id="cryptex" value="cryptex">
	<div class="item1" style="background-color: #aaa" draggable="true"> 
		Jiu Jitsu Is A Real Superpower, Jujutsu also known as jujitsu, is a Japanese martial art and a method of close combat for ... Before the first half of the 20th century, however, jiu-Jitsu and ju-jitsu were preferred, even though the romanization of the second kanji as Jitsu is
	</div>
	<div class="item2" style="background-color: #bbb">
		div two
	</div>
	<div class="item3" style="background-color: #ccc">
		div three
	</div>

</div>
<!--ANIMAL-->
<form id="animal_form">
<div id="animal"> New Animal Here! </div> 
<div id="newAnimal" "></div>
</form>

<script>
// __CONSTRUCT ANIMALS

function __Animal (Jor ,Rang, Qabara){
this.Jor=Jor;
this.Rang=Rang;
this.Qabara=Qabara;
}

// creating random number
var max= 400;
var min = 50; 
var Q =[Math.floor(Math.random() * (+max - +min) + +min)];
var Qpx = Q +"px";
// creating random number FIN
var JoryAnimal = Array("karweshk","sag","pshila","rewi","dinasor");
var JoryAnimalRandom = JoryAnimal[Math.floor(Math.random() * JoryAnimal.length)];


var joryRang = Array("Green" , "Red" , " Yellow" , "black" , "Grey");
var joryRangRandom = joryRang[Math.floor(Math.random() * joryRang.length)]; 

/*
Probably you ainn't gonna need this but, anyway:-
-----------------------------------------
JoryAnimalRandom= new __Animal(Jor);     
joryRangRandom = new __Animal (Rang);
Qpx = new __Animal(Qabara);
-----------------------------------------
update: yea, you ain't gonna need it.  works
----------------------------------------
*/
var Animalaka = new __Animal(JoryAnimalRandom,joryRangRandom,Qpx);
var azhal = JSON.stringify(Animalaka);
/*
--------------------------
-then we create text from Json
-we create element <p>
-append the text into <p>
-then remove animal line
-then we appoint <p> to newAnimal id that we already have it up there 
--------------------------
*/

  var txtAzhal = document.createTextNode(azhal);
var pAnimal = document.createElement("p");
pAnimal.appendChild(txtAzhal);
  
   document.getElementById('animal').remove();
  
   

    document.getElementById('newAnimal').appendChild(pAnimal);
  





// __CONSTRUCT ANIMALS FIN

function testfast(age , color){
   this.age=age;
   this.color=color;
}
var haywan = new testfast("30", "red");
</script>


<style type="text/css">
#id{
   border: none;
  border-radius: 2px;
  padding: 12px 18px;
  font-size: 16px;
  text-transform: uppercase;
  cursor: pointer;
  color: white;
  background-color: #2196f3;
    background-position: center;
  transition: background 0.8s;
  box-shadow: 0 0 4px #999;
  outline: none;

}

#id:active{

  background-color: #6eb9f7;
  background-size: 100%;
  transition:background 0s;
}

#g{
  width: 10%;
  
  position: absolute;
  top: 130px;
}

#animal_form {
position: relative;
top: 450px;
left: -140px;
text:green;
}

#cryptex {
	position: absolute;
left: 800px;
top: 288px;
  height: 58px;
  width: 240px;
  overflow: hidden;
  border-color: green;
  border: 1px solid blue;

}

.item1, .item2,.item3 
 {
 	position: static;
	padding: 1px;
	height: 18px;
	width: 3000px;
	border-radius: 3px;
}

.item1:hover
{ position: static;
  padding: 1px;
  height: 18px;
  border-radius: 3px;
 -webkit-animation: jwla1 10s infinite;
 display: inline-grid;
}
.item2:hover
{ position: static;
  padding: 1px;
  height: 18px;
  width: 240px;
  border-radius: 3px;
 -webkit-animation: ticker 25s cubic-bezier(1, 0, 0.5, 0) infinite;
}
.item3:hover
{ position: static;
  padding: 1px;
  height: 18px;
  width: 240px;
  border-radius: 3px;
 -webkit-animation: jwla3 1s infinite;
}
@-webkit-keyframes jwla1 { 
  0% {-webkit-transform:  translate(0px, 0px)} /* atwany har yakekyan bnwsi  50%  {-webkit-transform:  translate(0px, 20px)} */
  25% {-webkit-transform:  translate(-25px, 0px)}
  50% {-webkit-transform:  translate(-50px, 0px)}
  75% {-webkit-transform:  translate(-75, 0px)}
  100% {-webkit-transform:  translate(-100px, 0px)}
}
@-webkit-keyframes jwla2 { 
  0% {-webkit-transform:  translate(0, 0)}

}
@-webkit-keyframes jwla3 { 
  0% {-webkit-transform:  translate(0, 0)}
    50%  {-webkit-transform:  translate(0px, -20px)} /* atwany har yakekyan bnwsi  50%  {-webkit-transform:  translate(0px, 20px)} */
    100% {-webkit-transform:  translate(0px, 0px)}
}

div.item1:hover
 {
  perspective: 60px;
  color:blue;
}



.item3:hover
{
  color: green;
  /* border: groove; 3d border */
}
  body {
  	background-color: grey;
    position: relative;
  }
  
  ul {
  	color: black;
  }
#formy_rast_Xwarawa {
position: relative;
left: -31px;
top: 230px;
 width:170px;
height: 250px;
transition: transform 1s;
border-radius: 26px;
border: 2px;
background-color: #f1f1f1;
border:  0.1px solid darkblue; /* css syntax
                                  border: 5px solid red;  */

}

#formy_rast_Xwarawa:hover {
	transform: scale(0.95); /* ZOOM IT*/
	border-radius: 28px;
	background-color: #ccc;
	border:  1px solid darkgreen;

}

.text span:hover {  /*syntax bam shewaya (((.class element:hover))) "boy rangish bgorit la hover*/
	background-color:rgba(43, 180, 32  ,20);
	 color: darkblue;
	font-size: 26px;

}

.slidingVertical {
	display: inline;
	text-indent: 8px;
	transition: visibility 0s 2s, opacity 2s linear;
}
.slidingVertical span {
	animation: fadeEffect 5s linear infinite 0s;
	-ms-animation: fadeEffect 5s linear infinite 0s;
	-webkit-animation: fadeEffect 5s linear infinite 0s;
	color: #00abe9;
	opacity: 0.5;
	animation-delay: 2s; /* animation starts after 2 second*/
	position: absolute;
}



@-webkit-keyframes fadeEffect {
  50% { opacity: 0.1; }
}

@keyframes fadeEffect {
  0% { opacity: 0.5; }
   15% { opacity: 1; }
  25% { opacity: 2; }
  50% { opacity: 3; }
  75% { opacity: 2; }
  90% { opacity: 1; }
  100% { opacity: 0.5; }
}



/*-----------------------------------------*/
section.dice {
  margin: 0 auto;
  height: 50px; width: 50px;
  position: relative;
  transform-style: preserve-3d;
  animation: turn 10s infinite linear;
}
@keyframes turn {
  0% {   transform: scale(2)  rotateY(0deg) rotateX(30deg) translateY(100px)}
  100% { transform: scale(2) rotateY(360deg) rotateX(30deg) translateY(100px)}
}
.dice div {
  position: absolute;
  top: 0; left: 0;
  font-size: 50px;
  background: white;
  width: 50px; height: 50px;
  text-align: center;
  box-shadow: inset 0 0 25px #aaa, 0 0 20px #fff;
  border-radius: 2px;
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
<div class="calc"> this is calc</div>

<style type="text/css">
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 20%;
    height: 250px;
}

.tab button { 
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
}

.tab button:hover {
    background-color: #ddd;
    border-radius: 25px;
}

.tab button.active {
    background-color: #ccc;
}




</style>
<!--///////////////////////End ADD CSS--> 

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">London</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
</div>

<style type="text/css">

  .tab {
    padding: 18px;
    max-height: 10;
    overflow: hidden;
    transition: max-height 0.2s ease-out;

}
/* change in tab divisions colors when hovered on*/
 .tab button:hover {
    background-color: #;
    color:#5F8F39;

}
/*^^^^^^^^^^*/



.tab1 button,form {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 40%;
    height: 30%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    border: 2px solid #4CAF50;
    background-color: #f1f1f1;
    float: right;

}
/* change login form color when hovered on*/
.tab1 form:hover{
  background-color: #ccc;
}
/*Trying ::after selector This has no related to the subject*/

.tab:after {
    content: '\002B';
    color: blue;
    font-weight: bold;
    float: right;
    margin-left: 5px;
    content: "Tjokusoooooooo";

}

/*change Text color above the login form when hoverd on it*/
.tab1 button:hover {
    background-color: #ddd;
    border-radius: 25px;
}

.B52 button {
  background-color: #ddd;
   border-radius: 25px;
   color: green;
   text-align: center;
}
.B52 button:hover {
  background-color: #ccc;
   border-radius: 25px;
   color: darkgreen;
   /* text-align: center;*/
   display: inline;
  text-indent: 0px;
  text-orientation: 80px;
   transform: scale(0.9); 
  /* cool stuff*/
   
}

/* #<<< bo id i */
#i {
transform: scale(1.1); 
}

.B52:hover #i {
transform: scale(1.6); 
}


input{
-webkit-border-radius: 50px;
-moz-border-radius: 50px;
border-radius: 50px;
}
/*this is how you do it the structure: .className:hover #Id {  }*/
.tab1:hover #textIntro
{
  background-color: none;
  
  color:green;
}



/* this is for testing class calc*/
  .calc {
      display: inline-block;
      position: absolute;
      background-color: darkgreen;
      width: 100px;
        height: 100px;
      left:290px;
      top:480px;  
      margin:-60px 0 0 -60px;
        -webkit-animation:spin 4s linear infinite;
      -moz-animation:spin 4s linear infinite;
      animation:spin 4s linear infinite;
      }
    
@-moz-keyframes spin { 100% { -moz-transform: rotate(360deg); } }
@-webkit-keyframes spin { 100% { -webkit-transform: rotate(360deg); } }
@keyframes spin { 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); } }

  
  .calc:hover{
    background-color: darkblue;
    width: calc(8% - 10px);

  }
  
  /* details viewing users stuff*/
  .detailId {
    color:orange;
    width: calc(23% - 10px);
    position: absolute;
    left:40px;
    top:380px;
  }
  
  
#Your_Email{
  top:80px;
  left: 40px;
  position:absolute;
}

  

</style>

<div class="tab1"> 
<form action="clients1.php" method="post">
  <font color="orange"> <span id="textIntro"> Enter Your Valid PayPal Email To Get Paid For The Lottery: 
  </span>
  </font> 
  
  <br>
  e
  <input size ="20" type="text" name="Email"> 
  p
  <input size ="20" type="password" name="password"> 
   <!--<input type="submit" name="submit" value="submit">-->
  <div class="B52"> 
  <button >
  <div id="i"> Submit </div>
  </button>
  </div>

</form>
<form id="Your_Email" action="clients1.php" method="post">
<div >
  <br> Your Email
  <input  size ="60" type="text" name="Payable">
  <button> Enter Email Only
  
  </button>
  </div>
</form>

<!-- SOME PICK OPTION COLORS-->
<p>
	fav color
<select name="color"> 
<option value=""> pick
</option>
<option value="green"> 1 
</option>
<option value="red">2
</option>
<option value="blue">3	
</option>

<input type="text" name="">
</p>
<p><input type="checkbox"
➝ name="terms" value="Yes">agreed </p>
</select>
<!-- END SOME PICK OPTION COLOR-->

  <title></title>
</head>
<body>
</div>
<details class= "detailId">
<summary> view users those registered before.</summary>
<p> here they are. . .
<!--PHP USERS HERE =========================== -->
<font color="yellow"> 
      <p> ....progress bar here :) .....</p>
      ...................
      <p>
      </font>


      <?php

      ##############################
      $connect = mysqli_connect("localhost","root","","kaplikaplu")or die("please connect");
      
      ##############################

    $sql = "SELECT * FROM name
          ORDER BY Rand() LIMIT 5"; 
    $result = mysqli_query($connect,$sql);
    while($row = mysqli_fetch_array($result)){
      
      ?> 
      
        <div class="horizontalFlip"> 
    <font color= 'darkgreen'> 
          <?php echo $row['logg'];   }  ?>
          </font>  
           

<!--PHP USERS END =========================== -->

<!--Creating Delete Button tttttttttttttttttttttttttttt-->

	<script type=""> 
<?php

      ##############################
      
      ##############################
      

     function bisrawa() {
      $connect = mysqli_connect("localhost","root","root","codes")or die("please connect");
      $sql2 = "DELETE FROM `name` WHERE logg='root' AND pass = 'root' OR logg = '' OR pass='' ";
      $checkName="SELECT FROM `name` WHERE logg='root' AND pass = 'root' OR logg = '' OR pass=''" ;
       mysqli_query($connect,$sql2);
       ////////////////////////////////////////////////////////// 
     }

function bisrawa2() {
      $connect = mysqli_connect("localhost","root","root","codes")or die("please connect");
      $sql2 = "DELETE FROM `name` WHERE logg='root' OR pass = 'root' ";
      $checkName="SELECT FROM `name` " ;
       mysqli_query($connect,$sql2);
       ////////////////////////////////////////////////////////// 
     }


     function bisrawa3() {
      $connect = mysqli_connect("localhost","root","root","codes")or die("please connect");
      $sql3 = "SELECT FROM `name` INSERT INTO logg ='BatMan' AND pass ='I AM BatMan' ";
      $checkName="SELECT FROM `name` ";
       mysqli_query($connect,$sql3);
       ////////////////////////////////////////////////////////// 
     }

     ?>
     /* //////////////////////////////////////
         set interval for bisrawa3() function
     */  



          setTimeout(function(){
          <?php 
          $connect = mysqli_connect("localhost","root","root","codes")or die("please connect");
      $sql3 = "INSERT INTO name ( logg , pass)  VALUES ('BatMan' , 'I AM BatMan' )";
       mysqli_query($connect,$sql3);
        ?>    
         },1000);
        

         set interval for bisrawa3() function FIN
     ////////////////////////////////////////////
     */

<?php
  function checkName(){

$checkName="SELECT FROM `name` WHERE logg='root' AND pass = 'root' " ;
              mysqli_query($connect,$checkName);
      $haya = mysqli_query($connect,$checkName);
     if ($haya) 
     {
     	$yes = "There is the name exists now you can delete is";
  					?>
  					<p>
  					<font color= 'darkblue'> 
  					<?php
  					echo $yes;
  					?>
  					
  					
  					
  					<?php
     }
     else 
     {
  						$No = "There Is Nothing to delete by that name.";
  						echo $No;
  						} 
  

       /*
        I Tried check deleted names myself :) like this if loop down here
       

       if($checkName){
  					$yes = "All DONE SHIT";
  					?>
  					<p>
  					<font color= 'darkblue'> 
  					<?php
  					echo $yes;
  					?>
  					</font>
  					<?php
  					}
  					else {
  						$No = "There Is Nothing to delete by that name.";
  						echo $No;
  						} 
  					

  					*/

     }


  

  ?> 





         
           function check(){

  			var a = "Nothing yet is here in this function.";

           }
          

</script>

 <font color= 'darkgreen'> 
    
<form method="post">
<button>  
    <input type="submit" name="test" id="test" value="Delete almost All" /><br/>
     </button>
     <button>
     	<input type="submit" name="test2" id="test" value="RUN2" /><br/>
     </button>
       <button>
      <input type="submit" name="test3" id="test" value="Empty" /><br/>
     </button>
</form>
<!--REGISTER EMAIL-->
<form id="REGISTER_EMAIL" method="post">

</form>
<!--REGISTER EMAIL FIN-->   
</font>



<?php
	

if(array_key_exists('test2',$_POST)){
	//$_POST is an array of variables passed to the current script via the HTTP POST method.
   bisrawa2();
}

if(array_key_exists('test',$_POST)){
	//$_POST is an array of variables passed to the current script via the HTTP POST method.
   bisrawa();
}

if(array_key_exists('test3',$_POST)){
  //$_POST is an array of variables passed to the current script via the HTTP POST method.
   bisrawa3();
}

?>





</details>
</body>
</head>
</html> 
