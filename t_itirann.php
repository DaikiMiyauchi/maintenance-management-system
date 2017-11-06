<html>
<head><title>顧客一覧</title></head>
<?php
header('Content-Type: text/html; charset=SJIS');
echo "顧客一覧";
echo '<br>';
if(isset($_REQUEST['sort']))
{
	$sort = $_REQUEST['sort'];
	$karamu =$_REQUEST['karamu'];
}else{
	$sort = ASC;
	$karamu = id;
}
echo $sort;
echo $karamu;
///////////DB接続情報////////////////////////////////////////////////////////////



///////////////////////////////////////////////////////////////////////
$sql = 'SELECT * FROM CUSTOMER1 WHERE '.$karamu.' ORDER BY '.$karamu.' '.$sort;
echo $sql;
	$pdh = $pdo->query('SET NAMES SJIS');
	$pdh = $pdo->query($sql);
?>
	<TABLE border="1" align="left">
	<TR>
	<TD>ID<?php echo '<a href="t_itirann.php?sort=ASC&karamu=id">↓</a><a href="t_itirann.php?sort=DESC&karamu=id">↑</a>'; ?></TD>
	<TD>名前</TD>
	<TD>発電開始日</TD>
	<TD>発電プラン<?php echo '<a href="t_itirann.php?sort=ASC&karamu=plan">↓</a><a href="t_itirann.php?sort=DESC&karamu=plan">↑</a>'; ?></TD>
	<TD>住所</TD>
	<TD>進捗</TD>
	<TD>詳細</TD>
	<TD>売電価格</TD>
	<TD>目視点検回数</TD>
	<TD>数値点検回数</TD>
	<TD>掛け付け点検回数</TD>
<?php
	foreach($pdh as $keiji)
	{
		$x = $keiji['id'];
?>
		<TR>
		<TD><?php echo "<a href=\"t_syousai.php?id=$x\">$x</a>"; ?></TD>
		<TD><?php echo $keiji['name']; ?></TD>
		<TD><?php echo $keiji['start']; ?></TD>
		<TD><?php echo $keiji['plan']; ?></TD>
		<TD><?php echo $keiji['basyo']; ?></TD>
		<TD><?php echo $keiji['sinntyoku']; ?></TD>
		<TD><?php echo $keiji['syousai']; ?></TD>
		<TD><?php echo $keiji['value']; ?></TD>
		<TD><?php echo $keiji['mokusi']; ?></TD>
		<TD><?php echo $keiji['suuti']; ?></TD>
		<TD><?php echo $keiji['kaketuke']; ?></TD>
		</TR>
<?php
	}
?>