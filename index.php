<h3>正三角形</h3>
<style>
    * {
        font-family: 'Courier New', Courier, monospace;
    }

    /* 所有的標籤 */
    /* 解決字型問題無法印出漂亮的三角形 */
</style>

<?php
function stars($shape,$size){
 switch($shape){
    case '正三角形':
        triangle($size);
        break;
    case '矩形':
        rectangle($size);
        break;
    default:
        echo "無此形狀";
 }
}
stars('正三角形',30);



?>






<?php
function triangle($size)
{
    for ($i = 0; $i < $size; $i++) {

        //星星前要印空白把三角形推出來
        for ($k = 0; $k < $size - 1 - $i; $k++) {
            //空白的最大值是5-1再扣外圈的i值
            //(4是自己設定的數字、但邏輯上是5-1)
            echo "&nbsp;";
        }
        for ($j = 0; $j < $i * 2 + 1; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}
triangle(8);
triangle(13);
?>

<h3>矩形</h3>
<?php
function rectangle($size)
{
    for ($i = 0; $i < $size; $i++) { //i=0或<寬度的時候做

        for ($j = 0; $j < $size; $j++) {

            if ($i == 0 || $i == $size - 1 || $j == 0 || $j == $size - 1) { //滿足其中一個條件就印星星

                echo "*";
            } else { //述4個條件都沒有的情況印空白

                echo "&nbsp";
            }
        }
        echo "<br>";
    }
}
rectangle(3);
rectangle(5);
?>