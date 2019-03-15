<?php
header("content-type:text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/26
 * Time: 3:41
 * 章节: 7.2.5_PHP接收表单数据的方法
 */

# PHP获取表单数据主要是通过预定义变量$_POST和$_GET来实现。其中$_POST变量是一个数据集合，
# 负责接收表单以POST方法的数据，而$_GET变量负责接收URL字符串后面附加的查询字符串参数值。
# $_POST和$_GET的语法格式如下：
$_POST["name"];
$_GET["name"];
# 其中，name为表单对象的name属性值
# 注意：
# 使用$_POST和$_GET方法获取表单对象的值时，为了避免异常，应该先使用isset()函数检测$_POST和$_GET
# 变量是否存在。只有存在的情况下，才可以读取$_POST和$_GET变量的值。
# isset()函数语法格式如下：
# bool isset( mixed $var[,mixed $...] )
# 如果var存在，并且值不是NULL，则返回True,否则返回false
?>


