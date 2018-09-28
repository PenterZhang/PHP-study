<?php
    header("content-type:text/html;charset=utf-8");
    $x=5;
    $y=10;

    function myTest() {
    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
    } 

    myTest();
    echo $y; // 输出 15
?>