<?php
session_start();
?>

<html>
<head>
<meta charset="utf-8">
<title>POST練習</title>
</head>

<body>
<h1>《みんなにおすすめしたいマンガ　アンケート》</h1>



<form action="write.php" method="post" enctype="multipart/form-data" autocomplete="off">
<table>
    <tr>
    <th>ペンネーム</th>
    <td><input type="text" name="name" autocomplete="off" value="<?php print(htmlspecialchars($_SESSION["name"])); ?>" /></td>
    </tr>

    <tr>
    <th>おすすめのマンガは？</th>
    <td><input type="text" name="zayuunomei" autocomplete="off" value="<?php print(htmlspecialchars($_SESSION["zayuunomei"])); ?>" /></td>
    </tr>

    <tr>
    <th>その中で一番好きなキャラクターは？</th>
    <td><input type="text" name="manga" autocomplete="off" value="<?php print(htmlspecialchars($_SESSION["manga"])); ?>" /><td>
    </tr>

    <tr>
    <th>一番好きなシーンなど熱く語ってください！</th>
    <td><textarea type="text" name="oshi" autocomplete="off" value="<?php print(htmlspecialchars($_SESSION["oshi"])); ?>" /></textarea><td>
    </tr>

</table>

<input type="submit" value="送信">

</form>


<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>