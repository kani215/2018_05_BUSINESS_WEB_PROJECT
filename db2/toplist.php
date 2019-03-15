

<META http-equiv="Content=Type" content="text/html; charset=utf-8">

<a/ target=mainmenu href=mainmenu.html>

<table align =center width="800" border="1" cellpadding="10">
 <tr align = center>
 <td bg color="#4374D9"><font color=black>musicname</font></td>
 <td bg color="#4374D9"><font color=black>artist</font></td>
 <td bg color="#4374D9"><font color=black>album</font></td>
 <td bg color="#4374D9"><font color=black>genre</font></td>
  <td bg color="#4374D9"><font color=black>play</font></td>
  <td bg color="#4374D9"><font color=black>download</font></td>
   <td bg color="#4374D9"><font color=black>playlist</font></td>
 
</tr>

<?php
$searchterm = $_POST ['searchterm'];
$searchterm= iconv("EUC-KR", "UTF-8", "$searchterm");
$mysqli = new mysqli("localhost","db2","2017100878","db2");
mysqli_set_charset($mysqli,"utf8");
 
if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
} else {
 		$sql = "SELECT * FROM music WHERE musicname LIKE '%$searchterm%' OR artist LIKE '%$searchterm%' ";
		  $res = mysqli_query($mysqli, $sql);
        $qry1 = "update music set clicknum = clicknum+1 where musicname like '%$searchterm%'";
       $res2 = mysqli_query($mysqli, $qry1);
}
if ($res) {
	
	while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)){
			$musicname = $newArray['musicname']; 
 			$artist = $newArray['artist']; 
			$album = $newArray['album']; 
			$genre = $newArray['genre']; 
			$clicknum = $newArray['clicknum'];
		 				
 			echo "<TD>".$musicname."</TD>";
 			echo "<TD>".$artist."</TD>";
 			echo "<TD>".$album."</TD>";
 			echo "<TD>".$genre."</TD>";
 			echo "<FORM action=musicplay.php method=post>";
 			echo "<TD><input type=submit value=play></TD></form>";
 			echo "<FORM action=musicdownload.php method=post>";	
 			echo "<TD><input type=submit value=download></TD></form>";
 			echo "<FORM action=playlist.php method=post>";	
 			echo "<TD><input type=submit value=담기></TD></form>";
 			
 			echo "</Form>\n";
 			echo "<TR>\n"; 

 		} 
}
 	

?>