<?php 
$mysqli = new mysqli("localhost", "db2", "2017100878", "db2"); 
mysqli_set_charset($mysqli,"utf8");
if (mysqli_connect_errno()) { 
	printf("Connect failed: %s\n", mysqli_connect_error()); 
	exit(); 
} else { 
	$sql = "SELECT quantity FROM event WHERE eventname='종강기념 이벤트' AND quantity>0";
	$res = mysqli_query($mysqli, $sql); 
	$row = mysqli_fetch_assoc($res);
	
     if($row) {      
      $qry = "UPDATE event SET quantity=quantity-1 where eventname='종강기념 이벤트'";
       $res2 = mysqli_query($mysqli, $qry);
       
 		echo "축하합니다. 종강입니다.";
 		
 	} else {
 		echo "안타깝지만 종강을 못하시는군요... "; 
 	} 
 
}
?>

     
     
 	