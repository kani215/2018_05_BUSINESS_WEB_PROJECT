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
         $sql = "DELETE FROM `music` WHERE musicname = '$musicname' AND artist = '$artist' AND album = '$album'";
         $res = mysqli_query($mysqli, $sql); 
         if ($res) {
                 echo "delete complete";
         }
 }
?>