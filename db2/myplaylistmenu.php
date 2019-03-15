<?php
$mysqli = new mysqli("localhost", "db2", "2017100878", "db2");
mysqli_set_charset($mysqli,"utf8");
if (mysqli_connect_errno()) { 
	printf("Connect failed: %s\n", mysqli_connect_error()); 
	exit(); 
} else { 

		$sql = "SELECT customerid, musicname, artist, album FROM playlist
		WHERE customerid = 'wjlee'"; 
		$res = mysqli_query($mysqli, $sql); 
		if ($res) {
		echo "<Table border=1>\n";
 		echo "<TH>Customer Name</TH> <TH>Music Name</TH>  <TH>Artist</TH>  <TH>Album</TH> <TH>Play</TH>  <TR>\n";
 		while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)){
			$customerid = $newArray['customerid']; 
 			$musicname = $newArray['musicname']; 
 			$artist = $newArray['artist']; 
			$album = $newArray['album']; 
			echo "<FORM action=musicplay.php method=post><tr>\n";
			echo "<tr bgcolor=#E6E8FA>";
			echo "<TD>".$customerid."</TD>";
 			echo "<TD>".$musicname."</TD>";
 			echo "<TD>".$artist."</TD>";
 			echo "<TD>".$album."</TD>";
 			echo "<TD><input type=submit value=play></TD>";
 			echo "</TR>\n"; 
 		echo "</Form>\n";
 		}
 		echo "</Table>\n";
	} else {
		printf("Could not insert record %s\n", mysqli_error($mysqli)); 
	}
 	mysqli_close($mysqli); 
}
?>
 
