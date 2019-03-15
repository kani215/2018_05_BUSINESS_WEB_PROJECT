<?php
	
	echo "<form method=post action=downloadticket.php>
	<UL>
	<LI> 결제 금액 500 원<br>
	<LI> 구매하는 이용권 : 다운로드 1회권
	<LI> <input type=radio name=paymethod value=phone checked> 휴대폰<br>
	<input type=radio name=paymethod value=creditcard > 신용카드<br>
	<br>
	<input type=submit value=구매>
	</form>";
?>