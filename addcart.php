<?php	
  session_start();
   
 	if(isset($_SESSION["i"])){
 		$goods=$_POST["webs"];		
    $number=$_POST["number"];  //取得表單值
    $_SESSION["goods"]=$goods;
    $_SESSION["number"]=$number;  //建立session
    $date=strtotime("+7 days",time());
   
    switch (isset($_SESSION["goods"])) {  //依照value給予相對應商品名稱
        case  "m":  //用不同key的cookie來存值
        $_SESSION["goods"]="One-piece";
        setcookie("one",$_SESSION["goods"],$date);   
        setcookie("onenumber",$_SESSION["number"],$date);
        break;
        case "n": 
        $_SESSION["goods"]="Naruto";
        setcookie("na",$_SESSION["goods"],$date);   
        setcookie("nanumber",$_SESSION["number"],$date);
        break;
        case "p":
        $_SESSION["goods"]="Bleach";
        setcookie("bl",$_SESSION["goods"],$date);   
        setcookie("blnumber",$_SESSION["number"],$date);
        break;
      }
   
	}
	header('Location:catalog.php');


//problem:只抓的到第一個值
?> 
 
