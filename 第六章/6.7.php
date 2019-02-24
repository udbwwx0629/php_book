<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: Zhenglun
 * Date: 2019/2/23
 * Time: 10:34
 * 章节:6.7_课后练习
 */

/*  1.通过array()函数声明数组
 *  示例效果:
 *          Array(
 *                   [1]=>前
 *                   [2]=>端
 *                   [3]=>开
 *                   [4]=>发
 *               )
 *         前端开发
 */

$array = array("1" => "前", "2" => "端", "3" => "开", "4" => "发");
print_r($array);
echo "<br>";
echo $array[1];
//输出数组元素的值
echo $array[2];
//输出数组元素的值
echo $array[3];
//输出数组元素的值
echo $array[4];
//输出数组元素的值
echo "<hr />";

/*  2.通过为数组元素赋值的方式声明数组
 *  示例效果:
 *          Array(
 *                   [1]=>前
 *                   [2]=>端
 *                   [3]=>开
 *                   [4]=>发
 *               )
 */

$array[1] = "前";
$array[2] = "端";
$array[3] = "开";
$array[4] = "发";
print_r($array);
//输出报创建数组的结构
echo "<hr />";

/*  3.通过关联数组的方式声明数组
 *  示例效果:
 *           28
 */

$array = array("first" => 1, "second" => 2, "third" => 3);
echo $array["second"];
$array["third"] = 8;
echo $array["third"];
echo "<hr />";

/*  4.输出数组
 *  示例效果:
 *          Array(
 *                   [1]=>PHP7
 *                   [2]=>从入门
 *                   [3]=>到精通
 *               )
 */

$array = array(1 => "PHP7", 2 => "从入门", 3 => "到精通");
print_r($array);
echo "<hr />";

/*  5.声明二维数组
 *  示例效果:
 *          Array(
 *                   [书箱] => Array
 *                          (
 *                             [0]=>文学
 *                             [1]=>历史
 *                             [2]=>地理
 *                          )
 *
 *                   [体育用品]=>Array
 *                          (
 *                             [m]=>足球
 *                             [n]=>蓝球
 *                          )
 *                   [水果]=> Array
 *                          (
 *                             [0]=>橙子
 *                             [8]=>葡萄
 *                             [9]=>苹果
 *                          )
 *               )
 */

$str = array("书箱" => array("文学", "历史", "地理"), "体育用品" => array("m" => "足球", "n" => "蓝球"), "水果" => array("橙子", 8 => "葡萄", "苹果"));
print_r($str);
echo "<hr />";

/*  6.foreach()函数遍历数组
 *  示例效果:
 *          www.baidu.com
 *          www.qq.com
 *          www.tmall.com
 */

$url = array("百度" => "www.baidu.com", "腾讯" => "www.qq.com", "天猫" => "www.tmall.com");
foreach ($url as $link) {
    echo $link . "<br>";
}
echo "<hr>";

/*  7.用list()函数遍历数组
 *  示例效果:
 *          用户名:帐号input框
 *          密  码:密码input框
 *          登录button
 */
?>

<form name="form1" action="" method="post">
    <p>用户名: <input type="text" name="user" id="user" class="inputcss" size="24"></p>
    <p>密码: <input type="password" name="pwd" id="pwd" class="inputcss" size="24"></p>
    <p><input type="submit" value="登录" name="submit"></p>
</form>
<?php
while (list($name, $value) = each($_POST)) {
    if ($name != "submit") {
        echo "$name = $value<br>";
    }
}
echo "<hr>";
?>
<?php
/*  8.用explode()函数将字符串转换成数组
 *  示例效果:
 *          Array(
 *                   [0]=>时装
 *                   [1]=>休闲装
 *                   [2]=>职业装
 *               )
 */

$str = "时装,休闲装,职业装";            //定义一个字符串
$str = explode(",", $str);    //应用explode()函数将字符串转换成数组
print_r($str);                         //输出数组元素
echo "<hr>";

?>
<?php
/*  9.用explode()函数添加的投票选项
 *  示例效果(无法显示):
 */


?>
<pre>
<form name="form1" action="" method="post">
    添加投票选项:
    <textarea name="content" id="content" cols="30" rows="5"></textarea>
    <span class="style1">注意:每个选项音用*分隔</span>
    <br>
    <input type="submit" value="提交" name="Submit">
</form>

<?php
if (isset($_POST["Submit"])) {
    $content = $_POST["content"];
    $data = explode("*", $content);
    while (list($name, $value) = each($data)) {
        echo '<input type="checkbox" name="checkbox" value="checkbox">';
        echo $value . "\n";
    }
}
echo "<hr>";

/*  10.用implode()函数将数组转换成一个新字符串
 *  示例效果(无法显示):
 */

$str = array('前端', '开发', '网址', 'www.qianduankaifa.cn', '服务电话', '000-169843');
echo implode(" ", $str);
echo "<hr>";

/*  11.用count()函数递归统计数组元素的个数
 *  示例效果(无法显示):
 */

$array = array("php" => array("PHP函数参考大全", "PHP程序开发宝典", "PHP数据库系统开发手册"), "asp" => array("ASP经验宝典")); //声明一个二维数组
echo count($array, COUNT_RECURSIVE);  //递归统计数组元素的个数
echo "<hr>";

/*  12.用array_pop()函数获取最后一个元素
 *  示例效果(无法显示):
 */
$arr = array("asp", "java", "javaweb", "php", "vb");   //定义数组
$array = array_pop($arr);                 //获取数组中的最后一个元素
echo "被弹出的单元是:$array";                     //输出最后一个元素值
print_r($arr);                                    //输出数组结构
?>
