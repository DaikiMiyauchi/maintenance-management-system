<html>
<head><title>Úqo^tH[</title></head>
<body>
<form  method="POST" action="t_touroku_form.php">
¼O:<input type="text" name="name">
Ýuêîñ:<input type="text" name="basyo">
i»:<input type="text" name="sinntyoku">
<?php echo '<br>'; ?>
¾zõ­dVXeÌÚ×<input type="text" name="syousai">
<?php echo '<br>'; ?>
­dJnú<input type="text" name="start">
d¿i<input type="text" name="value">
<?php echo '<br>'; ?>
eiXv<input type="text" name="plan">
<input type="hidden" name="login" value="1";>
<input type="submit" name"btn1" value="o^">
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

////////DBÚ±îñ//////////////////////////////////
$user = 
$pass = 
$pdo = 
//////////////////////////////////////////
$sql = "INSERT INTO CUSTOMER1(id,name,basyo,sinntyoku,syousai,start,value,plan,mokusi,suuti,kaketuke)VALUES(:id,:name,:basyo,:sinntyoku,:syousai,:start,:value,:plan,:mokusi,:suuti,:kaketuke)";
	$stmt = $pdo->query('SET NAMES SJIS');
	$stmt = $pdo->prepare($sql);
	$params = array(':id' => "$id",':name' => "$name",':basyo' => "$basyo",':sinntyoku' => "$sinntyoku",':syousai' => "$syousai",':start' => "$start",':value' => "$value",':plan' => "$plan",':mokusi' => "0",':suuti' => "0",':kaketuke' => "0");
	$stmt -> execute($params);
echo "ÚqîñÌo^ª®¹µÜµ½";
echo "<br>";
echo "<a href=\"t_itirann.php?date=$x\">êÖ</a>";
}