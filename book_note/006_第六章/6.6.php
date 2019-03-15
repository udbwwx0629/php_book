<?php
header("content-type:text/html; charset=utf-8");
/**
 * Created by PhpStorm.
 * User: Zhenglun
 * Date: 2019/2/22
 * Time: 15:49
 * 章节:第6章_操作数组
 */

/**
 * 6.6.2 设计购物车
 */
$name = "平板电脑@数码相机@智能手机@瑞士手表";
$price = "14998@3932@3232@3232";
$counts = "1@2@3@4";
$arrayid = explode("@", $name);
$arraynum = explode("@", $price);
$arraycount = explode("@", $counts);

if (isset($_POST["Submit"]) && $_POST["Submit"] == true) {
    $id = $_POST["name"];                         //获取要更改的元素名称
    $name = $_POST["counts"];                     //获取要更改的值
    $key = array_search($id, $arrayid);           //在数组中搜索给定的值,如果成功返回键名
    $arraycount[$key] = $num;                     //更改商品数量
    $counts = implode("@", $arraycount);    //将更改后的商品数量添加至购物车中
}
?>

<h1>购物车</h1>
<table>
    <tr>
        <th>商品名称</th>
        <th>价格</th>
        <th>数量</th>
        <th>金额</th>
    </tr>

    <?php
    for ($i = 0;
         $i < count($arrayid);
         $i++) {
        ?>
        <form name="form1_<?php echo $i; ?>" method="post" action="">
            <tr>
                <td><?php echo $arrayid[$i]; ?></td>
                <td><?php echo $arraynum[$i]; ?></td>
                <td>
                    <input name="counts" id="counts" type="text" value="<?php echo $arraycount[$i]; ?>" size="8">
                    <input type="hidden" name="name" id="name" value="<?php echo $arrayid[$i]; ?>">
                    <input type="submit" name="Submit" value="更改">
                </td>
                <td><?php echo $arraycount[$i] * $arraynum[$i]; ?></td>
            </tr>

        </form>
        <?php
    }
    ?>
</table>