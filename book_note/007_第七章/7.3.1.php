<?php
header("content-type:text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/26
 * Time: 3:41
 * 章节: 7.3.1_获取文本框的值
 */
?>

<form id="form1" name="form1" action="request.php" method="post">
    <label>用户名 <input type="text" name="user" id="user"></label>
    <input type="submit" value="提交数据">
</form>