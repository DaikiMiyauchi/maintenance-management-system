<html>
<head><title>Úqê</title></head>
<?php
header('Content-Type: text/html; charset=SJIS');
echo "Úqê";
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
///////////DBÚ±îñ////////////////////////////////////////////////////////////



///////////////////////////////////////////////////////////////////////
$sql = 'SELECT * FROM CUSTOMER1 WHERE '.$karamu.' ORDER BY '.$karamu.' '.$sort;
echo $sql;
	$pdh = $pdo->query('SET NAMES SJIS');
	$pdh = $pdo->query($sql);
?>
	<TABLE border="1" align="left">
	<TR>
	<TD>ID<?php echo '<a href="t_itirann.php?sort=ASC&karamu=id">«</a><a href="t_itirann.php?sort=DESC&karamu=id">ª</a>'; ?></TD>
	<TD>¼O</TD>
	<TD>­dJnú</TD>
	<TD>­dv<?php echo '<a href="t_itirann.php?sort=ASC&karamu=plan">«</a><a href="t_itirann.php?sort=DESC&karamu=plan">ª</a>'; ?></TD>
	<TD>Z</TD>
	<TD>i»</TD>
	<TD>Ú×</TD>
	<TD>d¿i</TD>
	<TD>Ú_ñ</TD>
	<TD>l_ñ</TD>
	<TD>|¯t¯_ñ</TD>
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