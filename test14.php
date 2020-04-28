

<style>

.botBreathe {
    width: 100px; 
    /* 按鈕寬 */
    height: 30px;
    /* 按鈕高 */
    border: 1px solid #2b92d4;
    /* 邊框 */
    border-radius:25%;
    /* 邊框角度 */
    text-align: center;
    /* 文字水平置中 */
    cursor: pointer;
    /* 滑鼠變形 */
    margin:5px 5px;
    /* 邊距 */
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
    /* 陰影 */
    /* overflow: hidden; */
    /* 超過大小 */
    animation-timing-function: ease-in-out;
    animation-name: breathe;
    animation-duration: 1s;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    display:flex;
    justify-content:center;
    align-items:center;
}

.ButtonBox1{
    width:700px;
    /* background-color:white; */
    display: inline-block;
    text-align:center;
    display:flex;
  
}
.ButtonBox2{
    width:300px;
    /* background-color:red; */
    display: inline-block;
    text-align:center;
    display:flex;
  
}
   
.YearBox1{
    width:300px;
    background-color:red;
    display: inline-block;
    text-align:center;
    display:flex;
  
}

a{
    text-decoration:none;
    color:var(--number);
    font-size:15px;
    text-align:center;
    font-family: 'Josefin Sans', sans-serif;
    
    
        
        
}

@keyframes breathe {
    0% {
        opacity: .4;
        box-shadow: 0 1px 2px var(--number), 0 1px 1px var(--number) inset;
    }

    100% {
        opacity: 1;
        border: 1px solid var(--number);
        box-shadow: 0 1px 10px var(--number), 0 1px 10px var(--number) inset;
    }
}

body{
	display: flex;
	align-items: center;
	flex-direction: column;
	height: 100vh;
	margin: 0;
	background-color: black;
	color: white;
	background-image: url(https://scott20cc.000webhostapp.com/background-p3.jpg);
	background-repeat: no-repeat;
    background-attachment : fixed;
    /* (設定背景附著 也就是浮動背景) */
    background-position : 50% 50% ;
    /* 50%(距上邊距離) 50%(距左邊距離);*/
	margin-left: 0px;
	margin-top: 0px;
        }
    td{
        font-size: 30px;
        text-align: center;
        border: 1px solid white;
        letter-spacing: 1px ;
        width:100px;
        height:80px;
    }
    
    .BreatheBigBox{
           font-size: 5rem;
           font-family: 'Josefin Sans', sans-serif;
           text-transform: uppercase;
           letter-spacing: 1rem;
           border: 1px solid white;
           padding: 5px 0 10px 30px;
           animation: BreatheFont 5s linear infinite , BreatheBorder 2s  linear infinite;
           display: flex;
           align-items:center;
        }
           
           @keyframes BreatheFont{
            0%{
                text-shadow:0px 0px 2rem var(--number) ,0px 0px 2rem var(--number);}
            100%{
                text-shadow:0px 0px 2rem var(--number) ,0px 0px 2rem var(--number);}
           }
            @keyframes BreatheBorder{
                0%{
                    box-shadow:0px 0px 8px 5px var(--number),0px 0px 8px 5px var(--number),inset 0px 0px 8px 5px var(--number) ;
                }
                50%{
                    box-shadow:0px 0px 18px 5px var(--number),0px 0px 18px 5px var(--number),inset 0px 0px 18px 5px var(--number) ;
                }
                100%{
                    box-shadow:0px 0px 8px 5px var(--number),0px 0px 8px 5px var(--number),inset 0px 0px 8px 5px var(--number) ;
                }


            }
    .MonTextBox{
        background-color:white;
    }


</style>


<?php 

$ColArr=["#FF0000","#FF8000","#FFFF37","#00EC00","#4DFFFF","#66B3FF","#9F35FF","#4FFFFF","#C2C2FF","#FF9797","#223db9","#73BF00"];
// 宣告陣列 放色碼



if(isset($_GET["ColNum"])){
    $ColNum=$_GET["ColNum"];
  }else{
    $ColNum=0;
   
}

if(!isset($_GET["ColNum"])){
    echo "<style>".":root {--number:" .$ColArr[0] .";}"."</style>";
}else {
    echo "<style>".":root {--number:" .$ColArr[$ColNum] .";}"."</style>";
}

if(isset($_GET['ChangeColor'])){
    echo "<style>".":root {--number:" .$_GET['ChangeColor'] .";}"."</style>";
}
?>
<!-- 上面那段,是想利用php echo css語法
        變成下面這樣
    <style>
        :root {--number: #0093df;}
    </style>
    
 -->
 <?php
$mon=date("n");
$DateMon0=date("m");
$DateDay = date("d");
$DateYear = date("Y");

// echo $DateMon0+$DateDay;
// echo "<hr>";
// echo "$DateMon0" ."$DateDay";
 ?>

<body>
<h1>R.G.B的信仰</h1>



<?php






if(isset($_GET["mon"])){
    $mon=$_GET["mon"];
    $numadd=$mon+1;
    $numdel=$mon-1;
    if($numadd>11)$numadd=0;
    if($numdel<0)$numdel=11;
    if($mon==0)$mon=12;

}else {$numadd=$mon+1;
        $numdel=$mon-1;
}


?>

<div class="ButtonBox2">
<div class="botBreathe"><a href="test14.php?ColNum=<?=$numdel?>&mon=<?=$numdel?>">上個月</div></a>
<div class="botBreathe"><a href="test14.php?ColNum=<?=$mon;?>&mon=<?=$mon;?>">顯示是<?=$mon;?>月</div></a>
<div class="botBreathe"><a href="test14.php?ColNum=<?=$numadd?>&mon=<?=$numadd?>" >下一個月</a></div>

</div>
<hr>

<div class="BreatheBigBox">
    <table> 
        <tr>
            
            <td>一</td>
            <td>二</td>
            <td>三</td>
            <td>四</td>
            <td>五</td>
            <td>六</td>
            <td>日</td>
        </tr>
        
    <?php
    $holiday =[
        "11"=>"開國紀念日",
        "111"=>"司法節",
        "115"=>"藥師節",
        "123"=>"自由日",
        "24"=>"農民節",
        "214"=>"情人節",
        "215"=>"戲劇節",
        "219"=>"新生活運動紀念日",
        "228"=>"和平紀念日",
        "31"=>"兵役節",
        "35"=>"童子軍節",
        "38"=>"婦女節",
        "312"=>"植樹節",
        "317"=>"國醫節",
        "320"=>"郵政節",
        "321"=>"氣象節",
        "325"=>"美術節",
        "326"=>"廣播節",
        "329"=>"青年節",
        "330"=>"出版節",
        "41"=>"愚人節",
        "44"=>"婦幼節",
        "45"=>"音樂節",
        "47"=>"衛生節",
        "422"=>"世界地球日",
        "51"=>"勞動節",
        "54"=>"文藝節",
        "55"=>"舞蹈節",
        "510"=>"珠算節",
        "512"=>"護士節",
        "63"=>"禁煙節",
        "66"=>"工程師節<br>水利節",
        "69"=>"鐵路節",
        "615"=>"警察節",
        "630"=>"會計師節",
        "71"=>"漁民節<br>公路節<br>稅務節",
        "711"=>"航海節",
        "712"=>"聾啞節",
        "88"=>"父親節",
        "813"=>"生日",
        "814"=>"空軍節",
        "827"=>"鄭成功誕辰",
        "91"=>"記者節",
        "93"=>"軍人節<br>抗戰紀念",
        "99"=>"體育節<br>律師節",
        "913"=>"法律日",
        "928"=>"教師節<br>孔子誕辰",
        "16"=>"老人節",
        "1010"=>"國慶紀念日",
        "1021"=>"華僑節",
        "1025"=>"台灣光復節",
        "1031"=>"蔣公誕辰日<br>萬聖節",
        "1111"=>"工業節<br>地政節",
        "1117"=>"自來水節",
        "1112"=>"國父誕辰紀念日",
        "1121"=>"防空節",
        "125"=>"盲人節",
        "1210"=>"人權節",
        "1212"=>"憲兵節",
        "1225"=>"聖誕節",
        "1227"=>"建築師節",
        "1228"=>"電信節",
        "1231"=>"受信節"];
 
    // if (array_key_exists("111",$holiday)){
    //     echo "yes have Key !";
    // }else{
    // echo "no....fu...!";}  
    // 判斷array是否有這個KEY 並傳回ture or false
    

    



    $MonArr=["JAN","FEB","MAR","APR","MAY","JUN","JUL","AUG","SEP","OCT","NOV","DEC"];
    // $MonArr=["JAN","FEB"];
    $MonNum=["1","2","3","4","5","6","7","8","9","10","11","12"];
    // $MonArr["JAN"][]="月";
    if(isset($_GET['SelectYear']))$DateYear=$_GET['SelectYear'][0];
    $fDay = "$DateYear-$mon-$DateDay";
    $fDayWeek = date("w", strtotime($fDay));   //星期幾的數字表示（0 表示 Sunday[星期日]，6 表示 Saturday[星期六]）
    $fDayBS = date("t", strtotime($fDay));   //當月天數
    $fDayMon = date("n", strtotime($fDay));  //月份
    // echo $A[$fDayMon].'月' ."<br>";
    //date參數參考 https://www.w3school.com.cn/php/func_date_date.asp
    echo $MonArr[$fDayMon-1];
    //印英文大月份
    echo "<span style=font-size:20px;>" .$MonNum[$fDayMon-1] ."月" ."</span>";
    //印小月份
    $k = 0;
    for ($c = 0; $c < 7; $c++) {
        $p = ($c + 1) - $fDayWeek;
        if ($p <= 0) $k++;
    }
    if ($fDayBS + $k + 7 <= 42) {
        $total = 5;
    } else {
        $total = 6;
    }
  
    
    for ($i = 0; $i < $total; $i++) {
        echo "<tr>";
        for ($j = 0 ; $j < 7; $j++) {
            echo "<td>";
            $x = ($i * 7+ $j + 1) - $fDayWeek;
            if ($x <= 0 || $x > $fDayBS) {
                echo "&nbsp";
            }
            
            elseif(array_key_exists("$mon$x",$holiday)){
                $red=($j == 5 ||$j == 6)?"style=color:$ColArr[$ColNum];":'';
                echo "<div ".$red.">";
                echo $x ."<br>";
                echo "<span style=font-size:14px;>".$holiday[$mon .$x] ."</span>";
                echo "</div>";
            }   //判斷日期 陣列取值

            elseif($j == 5 ||$j == 6){
                //判斷六日 
                echo "<span style=color:$ColArr[$ColNum];>" .$x ."</span>";
                //列印背景 並呼叫色碼
            }else {
                echo $x . "</td>";
            }
        }
    }
    
    


//if 三種寫法
// 第一種
// $bgcolor = ($j == 0 || $j == 6) ?  'bgcolor="#ff0000"' : '';
// //第二種
// ($j == 0 || $j == 6) ? $bgcolor = 'bgcolor="#ff0000"' : $bgcolor = '';
// 第三種
// if ($j == 0 || $j == 6) {
//     $bgcolor = 'bgcolor="#ff0000"';
// } else {
//     $bgcolor = '';
// }
// 小於0 或大於每月天數 印空白

    echo "</tr>";
    
    ?>
    </table>
    <?php
    

    ?>
    </div>
    <hr>
<!-- <div class="ButtonBox1">
<div class="botBreathe"><a href="test14.php?ColNum=0&mon=<?=$mon;?>">color1</a></div>
<div class="botBreathe"><a href="test14.php?ColNum=1&mon=<?=$mon;?>">color2</a></div>
<div class="botBreathe"><a href="test14.php?ColNum=2&mon=<?=$mon;?>">color3</a></div>
<div class="botBreathe"><a href="test14.php?ColNum=3&mon=<?=$mon;?>">color4</a></div>
<div class="botBreathe"><a href="test14.php?ColNum=4&mon=<?=$mon;?>">color5</a></div>
<div class="botBreathe"><a href="test14.php?ColNum=5&mon=<?=$mon;?>">color6</a></div>
<div class="botBreathe"><a href="test14.php?ColNum=6&mon=<?=$mon;?>">color7</a></div>
<div class="botBreathe"><a href="test14.php?ColNum=7&mon=<?=$mon;?>">color8</a></div>
<div class="botBreathe"><a href="test14.php?ColNum=8&mon=<?=$mon;?>">color9</a></div>
<div class="botBreathe"><a href="test14.php?ColNum=9&mon=<?=$mon;?>">color10</a></div>
<div class="botBreathe"><a href="test14.php?ColNum=10&mon=<?=$mon;?>">color11</a></div>
<div class="botBreathe"><a href="test14.php?ColNum=11&mon=<?=$mon;?>">color12</a></div> -->


<form action="test14.php" method="get">
<input type="color" name="ChangeColor" value="#a4ef65"/>
<input type="submit" value="換色"/>


<form action="test14.php" method="get">
<select id="SelectYear" name="SelectYear[]">

<?php
for($i=1900;$i<2101;$i++){
$selected=$DateYear==$i?'selected="selected"':'';
echo "<option value=" ."'" .$i ."'" ."$selected> $i </option>";
}
?>

</select>

<input type="submit" value="查詢年分"/>
</form>
<?php
$ChangeColor="";
if(isset($_GET['ChangeColor'])){
    $ChangeColor=$_GET['ChangeColor'];
}

echo "<a>" ."現在的顏色是:▄▄▄▄▄▄" ."<br>"."色碼是".$ChangeColor ."</a>" ;


?>

</div>


</body>



