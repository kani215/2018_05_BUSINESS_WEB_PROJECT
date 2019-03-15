<?php
	$paymethod=$_POST["paymethod"];
	$buydate=date("Y-m-d");
	$mysqli = new mysqli("localhost","db2","2017100878","db2");
 
 if (mysqli_connect_errno()) { 
 		printf("Connect failed: %s\n", mysqli_connect_error()); 	exit(); 
 } else { 
 		$sql = "INSERT INTO bill ('customerid', 'ticketname','buylistening', 'buydownload', 'buydate', 'paymethod', 'total')
 		VALUES ('wjlee', '무제한 감상권','1', '0', '$buydate','$paymethod', 25000)";
 		$sql2 = "UPDATE mypage SET listening=1 WHERE customerid LIKE 'wjlee'";
 		$res = mysqli_query($mysqli, $sql);
 		$res2 = mysqli_query($mysqli, $sql2);
 	if ($res2) { 
 		echo "구매가 완료 되었습니다.";
 		} 
 	 else { 
 	 printf("Could not retrieve records: %s\n", mysqli_error($mysqli)); 
 	}  
 	mysqli_close($mysqli); 
 } 
 print "<br><A href='mainmenu.html'><img src="."imgdata/tomain.png"." width = "."100"."></A>"
?>