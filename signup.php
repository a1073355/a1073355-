<?php
 session_start();
    if(isset($_SESSION["register"])){
        if($_SESSION["register"]=="Yes"){
            echo "<a href='/Log_out.php' style='text-decoration:none'>登出系統</a>";
        }else{
            echo "非法進入系統";
            exit();
        }        
    }else{
        echo "非法進入系統";
        exit();
    }
?>
<html>
    <head>
    <meta name = "keywords" content= "">
    <!-- 搜尋時本網頁的關鍵字 -->
    <title>墾丁三日遊</title>
    <!-- icon 的使用-->
    <link rel="shortcut icon" href="\img\sun_icon.png" type="image/x-icon">
    <!-- <body bgcolor='#e6e6fa'> -->
    
        <style>
        h1{
            font-size :50px;
            text-align:center;
        }
        table {
             border: 3px dotted #000;        
        }
        th, td {
            border: 1px solid #000;
            padding: 5px;
            text-align:center;
            vertical-align:middle;
        }
        .picture{
            width: 912px;
            margin: auot;
            display: flex;
        }
        .item{
            width: 300px;
            margin: 10px;
            border: 1px solid #aaa;
            padding: 10px;
        }
        .item img{
            width: 100%;
        }
        </style>
    </head>
    
        <a href="#top"></a>
       
        <h1>墾丁三日遊</h1>
        <div class="picture">
            <div class="item">
                <a href="https://zineblog.com.tw/blog/post/201229"target="_blank"><img src="1.jpg"width="300" height="200"></a>
                <h2>鹿境</h2>
                <p>本地的梅花鹿保護區提供遊客餵食等互動體驗，另外還設有禮品店。</p>
            </div>
            <div class="item">
                <a href="https://www.travelking.com.tw/tourguide/nightmarket/scenery104822.html"target="_blank"><img src="2.jpg"width="300" height="200"></a>
                <h2>墾丁夜市</h2>
                <p>人聲鼎沸的大型市集，有著販售炸魷魚和烤玉米等台式熱門小吃的美食攤販。</p>
            </div>
           
        </div>
        
        <hr>
        <h2>表單填寫</h2>
        <form action="rinfo.php" method="post" enctype="multipart/form-data">
            姓名: <input type="text" name="uname" placeholder="輸入名字" required="required"><br>
            信箱: <input type="email" name="uemail"> <br>
            電話: <input type="text" name="utel" placeholder="輸入電話" required="required"><br>
            
            性別:
            <input type="radio" name="usexual" value="女性"checked> 女性
            <input type="radio" name="usexual" value="男性"> 男性
            <input type="radio" name="usexual" value="不透露"> 不透露
            <br>
            飲食: ( 可選擇一個以上):
            <input type="checkbox"name="food[]"value="葷食"checked>葷食
            <input type="checkbox"name="food[]"value="素食">素食
            <input type="checkbox"name="food[]"value="都可">都可
            <br>
            <!-- check box 需要用陣列存 -->
            身分證字號: <input type="password" name="uid"> <br>
            
            <!-- Please input your time: <input type="time" name="time"> <br> -->
            
            T-shirt 尺寸:
            <select name="size" multiple>
                <option >XS</option>
                <option >S</option>
                <option >M</option>
                <option >XL</option>
                <option >XXL</option>
                <option >3XL</option>
            </select>
            <br>

            T-shirt 顏色: <input type="color" name="color"> <br>
            生日: <input type="date" name="ubirth"><br>
            建議: <textarea rows="10" cols="50" name="comment"placeholder="輸入欄位中的預設文字內容"></textarea><br> 
            檔案: <input type="file" name="file"><br> 
            <br><input type="submit"> 
        </form>
        <hr>

        <div >
            <table>
            <caption ><b>T-shirt 尺寸對照表</b></caption>
            <tr>
                <th></th>
                <th>XS</th>
                <th>S</th>
                <th>M</th>
                <th>L</th>
                <th>XL</th>
                <th>XXL</th>
                <th>3XL</th>
            </tr>
            <tr>            
                <th>身長</th>
                <td>55</td>
                <td>58</td>
                <td>60</td>
                <td>61.5</td>
                <td>63</td>
                <td>64.5</td>
                <td>66</td>
            </tr>
            <tr>            
                <th>肩寬</th>
                <td>30</td>
                <td>32</td>
                <td>33.5</td>
                <td>35</td>
                <td>36.5</td>
                <td>38</td>
                <td>40</td>
            </tr>
            <tr>            
                <th>胸寬</th>
                <td>30</td>
                <td>35</td>
                <td>40</td>
                <td>42.5</td>
                <td>45</td>
                <td>47.5</td>
                <td>50</td>
            </tr>
            </table>
        </div>
    </body>
</html> 