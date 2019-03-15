

<META http-equiv="Content=Type" content="text/html; charset=utf-8">



<table align =center width="800" border="1" cellpadding="10">
 <tr align = center>
 <td bg color="#4374D9"><font color=black>musicname</font></td>
 <td bg color="#4374D9"><font color=black>artist</font></td>
 <td bg color="#4374D9"><font color=black>album</font></td>
 <td bg color="#4374D9"><font color=black>genre</font></td>
 <td bg color="#4374D9"><font color=black>clicknum</font></td>

 
</tr>

<?php

$mysqli = new mysqli("localhost","db2","2017100878","db2");
mysqli_set_charset($mysqli,"utf8");
 
if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
} else {
 		$sql = "SELECT * FROM music order by clicknum desc limit 10";
		  $res = mysqli_query($mysqli, $sql);
    
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
 			echo "<TD>".$clicknum."</TD>";
 			echo "<TR>\n"; 

 		} 
}
 	

?>