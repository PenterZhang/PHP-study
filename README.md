# PHP-study
a repository for storing PHP learning progress

### 解决乱码问题
```
    header("content-type:text/html;charset=utf-8");
```
### 大小写敏感

```
在 PHP 中，所有用户定义的函数、类和关键词（例如 if、else、echo 等等）都对大小写不敏感。
在下面的例子中，所有这三条 echo 语句都是合法的
```

### 在 PHP 中，所有变量都对大小写敏感。

### 在PHP中 $ 相当于JS中的var
```
    例如 $z = 5;相当于 var z = 5;
    $z = 5 即是 给z赋值5；

```
### PHP中 拼接字符用的是 "."
```
    echo $z."</br>";
```
### PHP中 函数内部不能引用外部变量，外部不能引用函数内部变量！
```
    header("content-type:text/html;charset=utf-8");
    $x=5; // 全局作用域
    function myTest() {
        $y=10; // 局部作用域
        echo "<p>测试函数内部的变量：</p>";
        echo "<br>";
        echo "变量 y 是：$y";
    } 

    myTest();

    echo "<p>测试函数之外的变量：</p>";
    echo "变量 x 是：$x"."<br>";
    echo "变量 y 是：$y"."</br>";
    echo "<a href='./03.php'>点击跳转</a>"
```
>在以上代码中外部变量是不会被引用到的;
>>其中echo "变量 y 是：$y";中的X值为空，y值为10；
>>>并且会报错！
<br>
<br>
### global 关键词用于访问函数内的全局变量。
```
    $x=5;
    $y=10;

    function myTest() {
        global $x,$y;
        $y=$x+$y;
    }

    myTest();
    echo $y; 
```
**在以上代码中echo $y; 的值为15， 可以引用到外部变量中的X，Y的值；

### PHP 同时在名为 $GLOBALS[index] 的数组中存储了所有的全局变量。下标存有变量名。这个数组在函数内也可以访问，并能够用于直接更新全局变量。
```
    header("content-type:text/html;charset=utf-8");
    $x=5;
    $y=10;

    function myTest() {
    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
    } 

    myTest();
    echo $y;
```
**以上为代码示例