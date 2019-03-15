<?php
$mysqli = new mysqli("localhost", "db2", "2017100878", "db2");
mysqli_set_charset($mysqli,"utf8");
if (mysqli_connect_errno()) { 
	printf("Connect failed: %s\n", mysqli_connect_error()); 
	exit(); 
} else { 
	$re ="INSERT INTO playlist(customerid, musicname, artist, album) VALUES ('wjlee','Closer', 'The Chainsmokers(체인스모커스)', 'Collage')";
	$res = mysqli_query($mysqli, $re); 
}
echo "My playlist에 추가되었습니다.";
?>