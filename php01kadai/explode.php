<?php
$s="js1,js2,js3,js4";
$a=explode(",",$s);
var_dump($a);
?>

<style>
td{
    border:1px solid red;
}
</style>
<table>
    <tr>
        <td><?=$a[0]?></td>
        <td><?=$a[1]?></td>
        <td><?=$a[2]?></td>
        <td><?=$a[3]?></td>
    </tr>
</table>