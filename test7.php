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
	background-image: url(./background-p2.jpg);
	background-repeat: no-repeat;
    background-attachment : fixed;
    /* (設定背景附著 也就是浮動背景) */
    background-position : 50% 50% ;
    /* 50%(距上邊距離) 50%(距左邊距離);*/
	margin-left: 0px;
	margin-top: 0px;
        }
    td{
        font-size: 22px;
        text-align: center;
        border: 1px solid white;
        width:30px;
        height:20px;
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

$ColArr=["#FF0000","#FF8000","#FFFF37","#00EC00","#4DFFFF","#66B3FF","#9F35FF","#4FFFFF","#C2C2FF","#FFC9FF","#223db9","#FAFAFA"];
// 宣告陣列 放色碼



if(isset($_GET["ColNum"])){
    $ColNum=$_GET["ColNum"]; 
  }else{
    $ColNum=0;
}
//   判斷有無取到值,並放入ColNum,預設顏色給0值

?>

<?php
// echo $ColArr[$ColNum];
echo "<style>".":root {--number:" .$ColArr[$ColNum] .";}"."</style>";
?>
<!-- 上面那段,是想利用php echo css語法
        變成下面這樣
    <style>
        :root {--number: #0093df;}
    </style>
    
 -->
 <body>
     
 <h1>R.G.B的信仰</h1>
<div class="ButtonBox1">
<div class="botBreathe"><a href="test7.php?ColNum=0">color1</a></div>
<div class="botBreathe"><a href="test7.php?ColNum=1">color2</a></div>
<div class="botBreathe"><a href="test7.php?ColNum=2">color3</a></div>
<div class="botBreathe"><a href="test7.php?ColNum=3">color4</a></div>
<div class="botBreathe"><a href="test7.php?ColNum=4">color5</a></div>
<div class="botBreathe"><a href="test7.php?ColNum=5">color6</a></div>
<div class="botBreathe"><a href="test7.php?ColNum=6">color7</a></div>
<div class="botBreathe"><a href="test7.php?ColNum=7">color8</a></div>
<div class="botBreathe"><a href="test7.php?ColNum=8">color9</a></div>
<div class="botBreathe"><a href="test7.php?ColNum=9">color10</a></div>
<div class="botBreathe"><a href="test7.php?ColNum=10">color11</a></div>
<div class="botBreathe"><a href="test7.php?ColNum=11">color12</a></div>

</div>


<?php


$mon=date("m");

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
<div class="botBreathe"><a href="test7.php?ColNum=<?=$numdel?>&mon=<?=$numdel?>">上個月</div></a>
<div class="botBreathe"><a href="test7.php?ColNum=<?=$mon;?>&mon=<?=$mon;?>">本月是(<?=$mon;?>)月</div></a>
<div class="botBreathe"><a href="test7.php?ColNum=<?=$numadd?>&mon=<?=$numadd?>" >下一個月</a></div>

</div>
<hr>
<hr>
<hr>
<div class="BreatheBigBox">
    <table> 
        <tr>
            <td>日</td>
            <td>一</td>
            <td>二</td>
            <td>三</td>
            <td>四</td>
            <td>五</td>
            <td>六</td>
        </tr>
        
    <?php
    $holiday = ["JAN1"=>"西元新年","FEB28"=>"和平紀念日"];
    $year = "2020";
    $MonArr=["JAN","FEB","MAR","APR","MAY","JUN","JUL","AUG","SEP","OCT","NOV","DEC"];
    // $MonArr=["JAN","FEB"];
    $MonNum=["1","2","3","4","5","6","7","8","9","10","11","12"];
    // $MonArr["JAN"][]="月";
    $fDay = "$year-$mon-01";
    $fDayWeek = date("w", strtotime($fDay));   //星期几的数字表示（0 表示 Sunday[星期日]，6 表示 Saturday[星期六]）
    $fDayBS = date("t", strtotime($fDay));   //當月天數
    $fDayMon = date("n", strtotime($fDay));  //月份
    // echo $A[$fDayMon].'月' ."<br>";
    //date參數參考 https://www.w3school.com.cn/php/func_date_date.asp
    echo $MonArr[$fDayMon-1];
    echo $MonNum[$fDayMon-1];
    // echo "<br>";
    // echo "<div style='margin:20px'>5月</div>";
  
    
    for ($i = 0; $i < 6; $i++) {
        echo "<tr>";
        for ($j = 0 ; $j < 7; $j++) {
            echo "<td>";
            $x = ($i * 7+ $j + 1) - $fDayWeek;
            if ($x <= 0 || $x > $fDayBS) {
                echo "&nbsp";
            } 
            
            
            
            else {
                echo $x . "</td>";
            }
        }
    }
    
// 小於0 或大於每月天數 印空白

    echo "</tr>";
    
    ?>
    </table>
    <?php

    // echo $mon ."<br>" .$fDayWeek ."<br>" .$fDayBS ."<br>" .$fDayMon;

    ?>
    </div>

</body>



