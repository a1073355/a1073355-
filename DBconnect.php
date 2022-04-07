<?php

$link=@mysqli_connect(
    'localhost',
    'root',
    'zxcvbn123',
    'php');

    //$dbname="php";
    //if(!mysqli_select_db($link,dbname))
    //{
    //    die("無法開啟" $dbname 資料庫)
   // }

    $SQL="SELECT * FROM user";

    if($result=mysqli_query($link,$SQL))
    {
            echo "<table border='1'>";
        while($row=mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>".$row["uNo"]."</td><td>".$row["uName"]."</td><td>".$row["uPwd"]."</td><td>".$row["uRole"]."</td><br/>";
            echo "</tr>";
        }
            echo "</table>";

    }


?>