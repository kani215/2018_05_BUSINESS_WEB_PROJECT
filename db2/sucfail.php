<?php
$customerid = $_POST["customerid"];
$pwd = $_POST["pwd"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$mysqli = new mysqli("localhost", "db2", "2017100878", "db2");
	$res = mysqli_query($mysqli, "SET NAMES utf8");
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
} else {
		$sql = "INSERT INTO customer(customerid, pwd, email, phone, name)
		VALUES ('$customerid', '$pwd', '$email', '$phone', '$name')";
		$sql2 = "INSERT INTO mypage(customerid, remaindownload, listening)
		VALUES ('$customerid', 0, 0)";
		$res = mysqli_query($mysqli, $sql);
		$res2 = mysqli_query($mysqli, $sql2);
		if($res===TRUE) {
		echo "<font size = 50>Welcome to KHUBUGS</font>";
		echo "<A HREF = 'index.html'><p align = center> <IMG SRC = 'img/tomain.png' width = '150'></A>";
		} else {
		echo "<script>location.href='fail2.php'</script>";
  

}
mysqli_close($mysqli);
}
?>
 