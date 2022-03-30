<html>
<head>
    
</head>
<body>   


<form action="" method="post" enctype="multipart/form-data">
        <br/><center><h1>註冊</h1></center>
        <br/><center>帳號:<input type="account" name="account" placeholder="請輸入帳號" required></center>
        <br/><center>密碼:<input type="password" name="pwd" placeholder="請輸入密碼" required></center>        
        <br/><center><input type="submit" value="login"></center>

        <?php
$aID="admin";
$aPWD="5201314";

if(isset($_POST["account"])){
	if($_POST["account"]!=null){
		$uId=$_POST["account"];
		$uPwd=$_POST["pwd"];
		
		if($aID==$uId && $aPWD==$uPwd){
			$_SESSION["login"]="Yes";
			echo "success";
			header('Location: HW2.php');
		}else{
			echo "FAILS";
            header('Location: hw3.php');

		}		
    }
}


?>
    
</form>   


   
    
</body>

</html>