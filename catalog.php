<?php  
session_start();
?>
<form action="addcart.php" method=post>
		選購商品:<select name="webs"> 
		<option value="m">One-piece -100</option>
		<option value="n">Naruto -150</option>
		<option value="p">Bleach -155</option>
		</select>
	<input type="text" name="number">	
	<input type="submit" name="asd" value="加入購物車">
	<br/>
	<a href="cart.php">檢視購物車</a>
</form>

