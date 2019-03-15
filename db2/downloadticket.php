<?php


$mysqli = new mysqli("localhost","db2","2017100878","db2");
mysqli_set_charset($mysqli,"utf8");

if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
} else {

        $qry1 = "update  mypage set  remaindownload = remaindownload+1 where customerid='wjlee'";
     
        $res2 = mysqli_query($mysqli, $qry1);
       echo "finished";
    
       
       
}

?>