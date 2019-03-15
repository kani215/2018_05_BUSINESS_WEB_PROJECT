 <?php 
$mysqli = new mysqli("localhost", "db2", "2017100878", "db2"); 
mysqli_set_charset($mysqli,"utf8");
if (mysqli_connect_errno()) { 
	printf("Connect failed: %s\n", mysqli_connect_error()); 
	exit(); 
} else { 
	$sql = "SELECT customerid, reviewdate, musicname, artist, album, reviewtext FROM review "; 
	$res = mysqli_query($mysqli, $sql); 
 	if ($res) { 
 		echo "<Table border=1>\n";
 		echo "<TH>Customer ID</TH>  <TH>Date</TH>  <TH>Music</TH>  <TH>Artist</TH> <TH>Album</TH> <TH>Review</TH>  <TR>\n";
 		while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)){
			$customerid = $newArray['customerid']; 
 			$reviewdate = $newArray['reviewdate']; 
			$musicname = $newArray['musicname']; 
			$artist = $newArray['artist'];
			$album = $newArray['album']; 
 			$reviewtext = $newArray['reviewtext'];
 			echo "<TD>".$customerid."</TD>";
			echo "<TD>".$reviewdate."</TD>";
 			echo "<TD>".$musicname."</TD>";
 			echo "<TD>".$artist."</TD>";
 			echo "<TD>".$album."</TD>";
 			echo "<TD>".$reviewtext."</TD>";
 			echo "</TR>\n"; 
 		
 		}
 		}
 		}
 	
?>