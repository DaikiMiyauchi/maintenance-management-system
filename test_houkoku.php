<html>
<head><title>太陽光発電システム報告</title></head>
<body>
$id = $_REQUEST['id'];
<form method="POST" action="./t_kakikae.php">
顧客ID:<input type="text" name="id" value="$id">
<?php echo '<br>'; ?>
目視点検:<input type="checkbox" name="mente1" value="1">
数値点検:<input type="checkbox" name="mente2" value="1">
掛け付け点検:<input type="checkbox" name="mente3" value="1">
<?php echo '<br>'; ?>
<?php echo '報告メモ欄'; ?>
<?php echo '<br>'; ?>
<textarea name="memo" cols="50" rows="5"></textarea>
<input type="submit" name"btn1" value="報告">
</form>

</body>
</html>
<?php
echo "<a href=\"t_itirann.php\">一覧へ</a>";
?>