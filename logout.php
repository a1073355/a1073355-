<?php
$acc=$_POST["account"];
$pass=$_POST["pwd"];
$email=$_POST["email"];
$phone=$_POST["tel"];


echo "<center><h1>註冊資訊</h1></center>";
echo "你的帳號:".$acc."</br>";
echo "你的密碼".$pass."<br/>";
echo "你的電子信箱:".$email."<br/>";
echo "你的電話號碼:".$phone."<br/>";
//echo "食物:".$foods."<br/>";


?>


<html>
<head>
    
</head>
<body>   

   

<form action="login.php" method="post" enctype="multipart/form-data">

        <br/><center><input type="submit" value="進入登入介面"></center>
    </form>


   
    
</body>

</html>