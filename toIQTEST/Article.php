<?php ?>
<!DOCTYPE html>
<html>

<head>
  <title>Create Article</title>
</head>
<?php
// Change these values to your MySQL server settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "infoyzooooornayab";

// Create a connection to MySQL server
$conn = mysqli_connect($servername, $username, $password, $dbname);
$connect = mysqli_connect("localhost", "root", "", "infoyzooooornayab") or die("please connect"); //pewist nia
// Check if the connection is successful
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the article title and content from a form or API request


//echo("" . $_POST['Nawnishan'] . "<br />\\n");
// echo("" . $_POST['Nawarok'] . "<br />\\n");
$title = mysqli_real_escape_string($conn, $_POST['title']);
$content = mysqli_real_escape_string($conn, $_POST['content']);

// Create a new SQL statement to insert the article into the "articles" table
$sql = "INSERT INTO Nwsin (Nawnishan, Nawarok) VALUES ('$title', '$content')";

// Execute the SQL statement and check if it's successful
if (mysqli_query($conn, $sql)) {
  echo "Article created successfully";
} else {
  echo "Error creating article: " . mysqli_error($conn);
}

// Close the connection to MySQL server
mysqli_close($conn);
?>

<body>
  <h1>Create a new article</h1>
  <form class="articleForm" method="post" action="">
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title"><br>
    <label for="content">Content:</label><br>
    <textarea id="ArticleText" name="content"></textarea><br>
    <input type="submit" value="Create">
  </form>

  <div class="detailId">


    here they are. . .




    <?php

    ##############################
    $connect = mysqli_connect("localhost", "root", "", "kaplikaplu") or die("please connect");

    ##############################
    
    $sql = "SELECT * FROM name
          ORDER BY Rand() LIMIT 5";
    $result = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($result)) {

      ?>

      ?>
      <?php echo $row['logg'];
    }
    ?>


    <!--PHP USERS END =========================== -->

    <!--Creating Delete Button tttttttttttttttttttttttttttt-->

    <script type="">
<?php

##############################

##############################


function bisrawa()
{
  $connect = mysqli_connect("localhost", "root", "", "infoyzooooornayab") or die("please connect");
  $sql2 = "DELETE FROM `nwsin` WHERE Nawnishan ='' OR Nawarok = ''
       OR Nawnishan = ' ' OR Nawarok=' ' ";
  $checkName = "SELECT FROM `name` WHERE logg='root' AND pass = 'root' OR logg = '' OR pass=''";
  mysqli_query($connect, $sql2);
  ////////////////////////////////////////////////////////// 
}

function bisrawa2()
{

  //select and show results oif duplicated stuff
  $connect = mysqli_connect("localhost", "root", "", "infoyzooooornayab") or die("please connect");
  $sql2 = "SELECT DISTINCT Nawnishan , Nawarok FROM nwsin";
  $mysqli = new mysqli("localhost", "root", "", "infoyzooooornayab");
  $result2 = $mysqli->query($sql2);
  mysqli_query($connect, $sql2);
  if ($result2->num_rows > 0) {
    while ($row = $result2->fetch_assoc()) {
      echo "Nawnishan: " . $row["Nawnishan"] . " - Nawarok: " . $row["Nawarok"] . "<br>";
    }
  } else {
    echo "No results found.";
  }

  // close database connection
  $mysqli->close();

  ////////////////////////////////////////////////////////// 
}


function bisrawa3()
{
  $connect = mysqli_connect("localhost", "root", "", "infoyzooooornayab") or die("please connect");
  $sql3 = "SELECT DISTINCT Nawnishan , Nawarok FROM nwsin";
  mysqli_query($connect, $sql3);
  $mysqli = new mysqli("localhost", "root", "", "infoyzooooornayab");
  /*  Write a SQL query to identify the duplicate rows in the table. In this case, we want 
  /  to remove rows that have the same values for both the "Nawnishan" and "Nawarok" columns:*/
  $del = "SELECT Nawnishan, Nawarok, COUNT(*) as count 
            FROM nwsin 
            GROUP BY Nawnishan, Nawarok 
            HAVING count > 1";
  ////Execute the query and store the results in an array:
  $result = $mysqli->query($del);
  $rows = array();
  while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
  }

  /////Loop through the array of duplicate rows and delete all but one of each set of duplicates:
  foreach ($rows as $row) {
    $limit = $row['count'] - 1;
    $delete_query = "DELETE FROM infoyzooooornayab.nwsin 
            WHERE CONCAT(Nawnishan, '|', Nawarok) NOT IN (
                SELECT CONCAT(MIN(Nawnishan), '|', MIN(Nawarok))
                FROM infoyzooooornayab.nwsin
                GROUP BY Nawnishan, Nawarok)";
    $mysqli->query($delete_query);
  }
  ////_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_- WORKS LIKE CHARM
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "infoyzooooornayab";
  $sql3_show = "SELECT Nawnishan, Nawarok, COUNT(*) as count FROM nwsin GROUP BY Nawnishan, Nawarok HAVING COUNT(*) > 1"; 
  $delete_query = "DELETE FROM nwsin WHERE Nawnishan='" . $row['Nawnishan'] . "' AND Nawarok='" . $row['Nawarok'] . "' LIMIT 2";
  //this will delete 2 only of duplicated rows, I tried 6 and did not work!...? I dunno...
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  $Anjam = mysqli_query($conn, $sql3_show);
  while ($row = mysqli_fetch_assoc($Anjam)) {

    ?> 
                      <?php //echo $nawarokShowing['Nawnishan'];
                          // $delete_query = "DELETE FROM nwsin WHERE Nawnishan='" . $row['Nawnishan'] . "' AND Nawarok='" . $row['Nawarok'] . "'"; //this deletes ALL duplicated
                          //to delete one duplicated only ... //$delete_query = "DELETE FROM nwsin WHERE Nawnishan='" . $row['Nawnishan'] . "' AND Nawarok='" . $row['Nawarok'] . "' LIMIT 1";
                          //to delete ALL BUT KEEP 1 row, (1 dana bhelarawa obviously ...)

                                          /* ALSO DELETES ALL DUPLICATED
                                         while ($row = mysqli_fetch_assoc($Anjam)) {
                                        $delete_query = "DELETE FROM nwsin WHERE Nawnishan='" . $row['Nawnishan'] . "' AND Nawarok='" . $row['Nawarok'] . "'";
                                        if (isset($row['min_id'])) {
                                          $delete_query .= " AND id != " . $row['min_id'];
                                        }
                                        mysqli_query($conn, $delete_query);
                                      }
                                         */
                          //to delete ALL BUT KEEP 1 row, (1 dana bhelarawa obviously ...) ITS A TRICKY CHALLENGE 
                           

                          mysqli_query($conn, $delete_query);
  }


  if ($mysqli->query($delete_query) === TRUE) {
    echo "Duplicated rows deleted successfully.";
  } else {
    echo "There were No deletion, no rows found .";
    $mysqli->close();
  }

  ////_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-

  ////_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-

}

?>
     /* //////////////////////////////////////
         set interval for bisrawa3() function
     */  
    


          setTimeout(function(){
          <?php
          //$connect = mysqli_connect("localhost","root","root","codes")or die("please connect");
          $sql3 = "INSERT INTO name ( logg , pass)  VALUES ('BatMan' , 'I AM BatMan' )";
          mysqli_query($connect, $sql3);
          ?>    
         },1000);
        

         //set interval for bisrawa3() function FIN
   

<?php
function checkName()
{

  $checkName = "SELECT FROM `nwsin` WHERE logg='root' AND pass = '' ";
  $connect = mysqli_connect("localhost", "root", "root", "codes") or die("please connect");

  mysqli_query($connect, $checkName);
  $haya = mysqli_query($connect, $checkName);
  if ($haya) {
    $yes = "There is the name exists now you can delete is";
    ?>
                <p>
                <font color= 'darkblue'> 
                <?php
                echo $yes;
                ?>
            
            
            
                <?php
  } else {
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

    <font color='darkgreen'>

      <form method="post" class="deleteFormButtons">
        <button>
          <input type="submit" name="test" id="test" value="Delete almost All" /><br />
        </button>
        <button>
          <input type="submit" name="test2" id="test" value="fetchdublicated" /><br />
        </button>
        <button>
          <input type="submit" name="test3" id="test" value="EmptyDuplications" /><br />
        </button>
      </form>
      <!--REGISTER EMAIL-->
      <form id="REGISTER_EMAIL" method="post">

      </form>
      <!--/REGISTER EMAIL-->
    </font>



    <?php


    if (array_key_exists('test2', $_POST)) {
      //$_POST is an array of variables passed to the current script via the HTTP POST method.
      bisrawa2();
    }

    if (array_key_exists('test', $_POST)) {
      //$_POST is an array of variables passed to the current script via the HTTP POST method.
      bisrawa();
    }

    if (array_key_exists('test3', $_POST)) {
      //$_POST is an array of variables passed to the current script via the HTTP POST method.
      bisrawa3();
    }

    ?>





  </div>

  <link rel="stylesheet" type="text/css" href="cc.css">
  <!--  this is a div class tab . https://www.w3schools.com/howto/howto_js_vertical_tabs.asp  -->
  <!--///////////////ADD CSS///////// -->



  <?php
  ///////////////////////////
  

  ##############################
  $connect = mysqli_connect("localhost", "root", "", "kaplikaplu") or die("please connect");

  ##############################
  
  $sql = "SELECT * FROM name
          ORDER BY Rand() LIMIT 5";
  $result = mysqli_query($connect, $sql);
  while ($row = mysqli_fetch_array($result)) {

    ?>
    <?php echo $row['logg'];
  }
  ?>
</body>

</html>