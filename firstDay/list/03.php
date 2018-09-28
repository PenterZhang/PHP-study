<?php

    header("content-type:text/html;charset=utf-8");
    $x=5;
    $y=10;
    function myTest() {
        global $x,$y;
        $y=$x+$y;
    }

    myTest();
    echo "输出值为$y"."<br>"; // 输出 15
    echo "<a href='./04.php'>点击前往下一页</a>"
?>