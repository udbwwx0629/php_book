<?php
header("content-type:text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/26
 * Time: 3:41
 * 章节: 7.2.6_在表单中嵌入PHP脚本
 */
?>

<!-- 在标签中嵌入"<?php ?>" ,相当于动态设计需要显示的信息或表单对象 -->
<h2>性别：</h2>
<?php
if (isset($gender) && $gender == "female") echo "女";
if (isset($gender) && $gender == "male") echo "男";
?>

<!-- 在属性值中嵌入"<?php ?>" ,相当于动态设置属性 -->
性别：
<input type="radio" name="gender" id="" <?php if (isset($gender) && $gender == "female") echo "checked"; ?>
       value="female">女性
<input type="radio" name="gender" id="" <?php if (isset($gender) && $gender == "male") echo "checked"; ?>
       value="male">男性
<br><br>
<!-- 在属性值中嵌入"<?php ?>",相当于属性动态赋值 -->
<?php $name = "udbwwx" ?>
姓名：<input type="text" name="name" value="<?php echo $name; ?>">
