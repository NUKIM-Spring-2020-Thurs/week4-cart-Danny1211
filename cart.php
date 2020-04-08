<?php
    session_start();
   	if(isset($_SESSION["i"])){
   		
   			
   			echo "<table border=2>"."<tr>"."<th>"."刪除"."</th>"."<th>"."商品名"."</th>"."<th>"."數量"."</th>"."</tr>".
   			     "<tr>"."<td>"."<a href='delete.php'>刪除</a>"."</td>"."<td>".
   			     $_COOKIE["one"]."</td>".
   			    "<td>".$_COOKIE["onenumber"]."</td>"."</tr>". 
   			    "<td>"."<a href='delete.php'>刪除</a>"."</td>"."<tr>"."<td>".
   			    $_COOKIE["na"]."</td>".
   			    "<td>".$_COOKIE["nanumber"]."</td>"."</tr>".
   			    "<td>"."<a href='delete.php'>刪除</a>"."</td>". "<tr>"."<td>".
   			    $_COOKIE["bl"]."</td>".
   			    "<td>".$_COOKIE["blnumber"]."</td>"."</tr>".
   			     "</table>"."<br/>";
   			 echo  "<a href='catalog.php'>返回商品目錄</a>";


   	}
    
?>






















































