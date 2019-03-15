<?php 
$mysqli = new mysqli("localhost", "db2", "2017100878", "db2"); 

if (mysqli_connect_errno()) { 
	printf("Connect failed: %s\n", mysqli_connect_error()); 
	exit(); 
} else { 
	$sql = "SELECT musicname, artist, album, genre FROM music ORDER BY artist"; 
	$res = mysqli_query($mysqli, $sql); 
 	if ($res) { 
 		echo "<Table border=1>\n";
 		echo "<TH>곡 명</TH>  <TH>아티스트</TH>  <TH>앨범</TH>  <TH>장르</TH>  <TR>\n";
 		while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)){
			$musicname = $newArray['musicname']; 
 			$artist = $newArray['artist']; 
			$album = $newArray['album']; 
			$genre = $newArray['genre'];
		echo "<FORM action=musicplay.php method=post><tr>\n";
			echo "<tr bgcolor=#E6E8FA>";
 			echo "<TD>".$musicname."</TD>";
 			echo "<TD>".$artist."</TD>";
 			echo "<TD>".$album."</TD>";
 			echo "<TD>".$genre."</TD>";
 			echo "<TD><input type=submit value=play></TD>";
 			echo "</TR>\n"; 
 		echo "</Form>\n";
 		}
 		echo "</Table>\n";
 	} else {
 		printf("Could not retrieve records: %s\n", mysqli_error($mysqli)); 
 	} 
 	mysqli_free_result($res);
 	mysqli_close($mysqli); 
}
 	print "<br><A href='mainhome.html'>To Main</A>";
?>