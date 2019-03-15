<?php
 $musicname = $_POST["musicname"];
 $artist = $_POST["artist"];
 $album = $_POST["album"];
 $genre = $_POST["genre"];
 $clicknum = $_POST["clicknum"];

 $mysqli = new mysqli("localhost", "db2", "2017100878", "db2"); 

 if (mysqli_connect_errno()) { 
         printf("Connect failed: %s\n", mysqli_connect_error()); 
         exit(); 
 } else { 
         $sql = "UPDATE 'music' SET 'musicname'='$musicname','artist'='$artist','album'='$album','genre'='$genre','clicknum'=$clicknum
         WHERE musicname = '$musicname'";
         $res = mysqli_query($mysqli, $sql); 
         if ($res) {
                 echo "update complete";
         }
 }
?>