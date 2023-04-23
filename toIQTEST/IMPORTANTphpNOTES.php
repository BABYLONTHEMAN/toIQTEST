<?php 
//USING DELETE DUPLICATION AND STUFF
//this deletes ALL duplicated
 $delete_query = "DELETE FROM nwsin WHERE Nawnishan='" . $row['Nawnishan'] . "' AND Nawarok='" . $row['Nawarok'] . "'"; 
/// to delete one duplicated only ... //
 $delete_query = "DELETE FROM nwsin WHERE Nawnishan='" . $row['Nawnishan'] . "' AND Nawarok='" . $row['Nawarok'] . "' LIMIT 1";



 example:

   ////_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-
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
   $delete_query = "DELETE FROM nwsin WHERE Nawnishan='" . $row['Nawnishan'] . "' AND Nawarok='" . $row['Nawarok'] . "' LIMIT 1";
 
   $conn = mysqli_connect($servername, $username, $password, $dbname);
   $Anjam = mysqli_query($conn, $sql3_show);
   while ($row = mysqli_fetch_assoc($Anjam)) {
 
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