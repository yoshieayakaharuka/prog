<?php
session_start();
?>

<?php
//文字作成
//$str = date("Y-m-d H:i:s");
$name=$_POST["name"];
$zayuunomei=$_POST["zayuunomei"];
$manga=$_POST["manga"];
$oshi=$_POST["oshi"];

$str=$name.",".$zayuunomei.",".$manga.",".$oshi;



//var_dump($str);

//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n"); //バックスラッシュは改行 option enterの上
fclose($file); 
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>

<body>
<h1>登録が完了いたしました。</h1>
<form action="read.php" method="post" enctype="multipart/form-data" autocomplete="off">
	<table>
    <tr>
    <th>ニックネーム</th>
    <td><?php echo $_POST["name"]; $name = $_POST["name"] ?> <input type="hidden" name="name" autocomplete="off" value="<?php print(htmlspecialchars($_SESSION["name"] = $name)); ?>"/></td>
    </tr>

    <tr>
    <th>座右の銘</th>
    <td><?php echo $_POST["zayuunomei"]; $zayuunomei = $_POST["zayuunomei"] ?><input type="hidden" name="zayuunomei" autocomplete="off" value="<?php print(htmlspecialchars($_SESSION["kanzayuunomeia"] = $zayuunomei)); ?>" />
    </tr>

    <tr>
    <th>好きな漫画</th>
    <td><?php echo $_POST["manga"]; $manga = $_POST["manga"] ?><input type="hidden" name="manga" autocomplete="off" value="<?php print(htmlspecialchars($_SESSION["manga"] = $manga)); ?>" /><td>
    </tr>

    <tr>
    <th>最近の推し</th>
    <td><?php echo $_POST["oshi"]; $oshi = $_POST["oshi"] ?><input type="hidden" name="oshi" autocomplete="off" value="<?php print(htmlspecialchars($_SESSION["oshi"] = $oshi)); ?>" /><td>
    </tr>
</table>


	<input type="submit" value="他の人のおすすめを見る">
</form>


<!---<h2>./data/data.txt を確認しましょう！</h2>-->

<ul>
<li><a href="input.php">戻る</a></li>
</ul>
</body>
</html>