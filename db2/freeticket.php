<?php
	
	echo "<form method=post action=purchase.php>
	<UL>
	<LI> 결제 금액 25000 원<br>
	<LI> 구매하는 이용권 : 무제한 감상권'
	<LI> <input type=radio name='paymethod' value=phone checked> 휴대폰<br>
	<input type=radio name='paymethod' value=creditcard > 신용카드<br>
	<br>
	<input type=submit value=구매>
	</form>";
?>