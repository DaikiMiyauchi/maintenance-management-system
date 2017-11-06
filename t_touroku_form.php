<html>
<head><title>顧客登録フォーム</title></head>
<body>
<form  method="POST" action="t_touroku_form.php">
名前:<input type="text" name="name">
設置場所情報:<input type="text" name="basyo">
進捗:<input type="text" name="sinntyoku">
<?php echo '<br>'; ?>
太陽光発電システムの詳細<input type="text" name="syousai">
<?php echo '<br>'; ?>
発電開始日<input type="text" name="start">
売電価格<input type="text" name="value">
<?php echo '<br>'; ?>
メンテナンスプラン<input type="text" name="plan">
<input type="hidden" name="login" value="1">
<input type="submit" name"btn1" value="登録">
</form>
</body>
<?php
if($_POST['login']=="1")
{
$id = uniqid();
$name = $_POST['name'];
$basyo = $_POST['basyo'];
$sinntyoku = $_POST['sinntyoku'];
$syousai = $_POST['syousai'];
$start = $_POST['start'];
$value = $_POST['value'];
$plan = $_POST['plan'];

////////DB接続情報//////////////////////////////////
$user = 
$pass = 
$pdo = 
//////////////////////////////////////////
$sql = "INSERT INTO CUSTOMER1(id,name,basyo,sinntyoku,syousai,start,value,plan,mokusi,suuti,kaketuke)VALUES(:id,:name,:basyo,:sinntyoku,:syousai,:start,:value,:plan,:mokusi,:suuti,:kaketuke)";
	$stmt = $pdo->query('SET NAMES SJIS');
	$stmt = $pdo->prepare($sql);
	$params = array(':id' => "$id",':name' => "$name",':basyo' => "$basyo",':sinntyoku' => "$sinntyoku",':syousai' => "$syousai",':start' => "$start",':value' => "$value",':plan' => "$plan",':mokusi' => "0",':suuti' => "0",':kaketuke' => "0");
	$stmt -> execute($params);
echo "顧客情報の登録が完了しました";
echo "<br>";
echo "<a href=\"t_itirann.php?date=$x\">一覧へ</a>";
}
