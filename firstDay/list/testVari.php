<?php
    header("content-type:text/html;charset=utf-8");
    $x=5; // 全局作用域
    function myTest() {
        $y=10; // 局部作用域
        echo "<p>测试函数内部的变量：</p>";
        echo "变量 x 是：$x";
        echo "<br>";
        echo "变量 y 是：$y";
    } 

    myTest();

    echo "<p>测试函数之外的变量：</p>";
    echo "变量 x 是：$x"."<br>";
    echo "变量 y 是：$y"."</br>";
    echo "<a href='./03.php'>点击跳转</a>"
?>