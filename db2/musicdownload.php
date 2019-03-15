<META http-equiv="Content=Type" content="text/html; charset=utf-8">
<?php
	
$mysqli = new mysqli("localhost","db2","2017100878","db2");
mysqli_set_charset($mysqli,"utf8");
 
if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
} else {
       $qry1 = "Select remaindownload from mypage where remaindownload>0";
           $res1 = mysqli_query($mysqli, $qry1);
           $row = mysqli_fetch_assoc($res1);
     if($row) {      
      $qry2 = "update  mypage set  remaindownload = remaindownload-1 where customerid='wjlee'";
       $res2 = mysqli_query($mysqli, $qry2);
       echo "The number of your tickets has been deducted.  Press download button and connect with us";
     echo "<FORM action=illegal.html method=post>";	
 			echo "<TD><input type=submit value=download></form></TD>";
     
 	 } else {
 
      echo "you have to buy some downloadticket please"	 ;
 	 }
}
?>