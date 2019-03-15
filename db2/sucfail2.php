<?php
$loginid = $_POST["loginid"];
$pwd= $_POST["pwd"];



$mysqli = new mysqli("localhost", "db2", "2017100878", "db2");
mysqli_set_charset($mysqli,"utf8");
if (mysqli_connect_errno()){
	printf("Connect failed: %s|n", mysqli_connect_error());
	exit();
} else {
$sql = "SELECT * FROM customer WHERE customerid='$loginid' AND pwd='$pwd'";

$res = mysqli_query($mysqli,$sql);
$rows=mysqli_num_rows($res);
if($rows==1){
 	while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)){
 	
 
}
 	session_start();
 		$_SESSION["loginid"] = $loginid;
 		$_SESSION["email"] = $email;
 		$_SESSION["phone"] = $phone;
 		$_SESSION["name"] = $name;
 	
 		
 		
 		echo "<A HREF = 'index.html'><p align = center> <IMG SRC = 'img/khubug.png' width = '600'></A>";
 		header("location: mainhome.html");
 		} else {
 		echo "<script>location.href='fail.php'</script>";
    }
    mysqli_free_result($res);
    mysqli_close($mysqli);
}
?>
  