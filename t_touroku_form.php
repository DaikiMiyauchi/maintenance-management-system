<html>
<head><title>�ڋq�o�^�t�H�[��</title></head>
<body>
<form  method="POST" action="t_touroku_form.php">
���O:<input type="text" name="name">
�ݒu�ꏊ���:<input type="text" name="basyo">
�i��:<input type="text" name="sinntyoku">
<?php echo '<br>'; ?>
���z�����d�V�X�e���̏ڍ�<input type="text" name="syousai">
<?php echo '<br>'; ?>
���d�J�n��<input type="text" name="start">
���d���i<input type="text" name="value">
<?php echo '<br>'; ?>
�����e�i���X�v����<input type="text" name="plan">
<input type="hidden" name="login" value="1";>
<input type="submit" name"btn1" value="�o�^">
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

////////DB�ڑ����//////////////////////////////////
$user = 
$pass = 
$pdo = 
//////////////////////////////////////////
$sql = "INSERT INTO CUSTOMER1(id,name,basyo,sinntyoku,syousai,start,value,plan,mokusi,suuti,kaketuke)VALUES(:id,:name,:basyo,:sinntyoku,:syousai,:start,:value,:plan,:mokusi,:suuti,:kaketuke)";
	$stmt = $pdo->query('SET NAMES SJIS');
	$stmt = $pdo->prepare($sql);
	$params = array(':id' => "$id",':name' => "$name",':basyo' => "$basyo",':sinntyoku' => "$sinntyoku",':syousai' => "$syousai",':start' => "$start",':value' => "$value",':plan' => "$plan",':mokusi' => "0",':suuti' => "0",':kaketuke' => "0");
	$stmt -> execute($params);
echo "�ڋq���̓o�^���������܂���";
echo "<br>";
echo "<a href=\"t_itirann.php?date=$x\">�ꗗ��</a>";
}