

<META http-equiv="Content=Type" content="text/html; charset=utf-8">



<table align =center width="800" border="1" cellpadding="10">
 <tr align = center>
 <td bg color="#4374D9"><font color=black>customerid</font></td>
 <td bg color="#4374D9"><font color=black>remaindownload</font></td>
 <td bg color="#4374D9"><font color=black>listening</font></td>

 
</tr>

<?php

$mysqli = new mysqli("localhost","db2","2017100878","db2");
mysqli_set_charset($mysqli,"utf8");
 
if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
} else {
 		$sql = "SELECT * FROM mypage WHERE customerid LIKE 'wjlee'";
		  $res = mysqli_query($mysqli, $sql);
    
}
if ($res) {
	while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)){
			$customerid = $newArray['customerid']; 
 			$remaindownload = $newArray['remaindownload']; 
			$listening = $newArray['listening']; 
 			echo "<TD>".$customerid."</TD>";
 			echo "<TD>".$remaindownload."</TD>";
 			echo "<TD>".$listening."</TD>";
 			echo "<TR>\n"; 

 		} 
}
 	

?>