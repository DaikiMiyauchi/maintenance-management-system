<html>
<head><title>¾zõ­dVXeñ</title></head>
<body>
$id = $_REQUEST['id'];
<form method="POST" action="./t_kakikae.php">
ÚqID:<input type="text" name="id" value="$id">
<?php echo '<br>'; ?>
Ú_:<input type="checkbox" name="mente1" value="1">
l_:<input type="checkbox" name="mente2" value="1">
|¯t¯_:<input type="checkbox" name="mente3" value="1">
<?php echo '<br>'; ?>
<?php echo 'ñ'; ?>
<?php echo '<br>'; ?>
<textarea name="memo" cols="50" rows="5"></textarea>
<input type="submit" name"btn1" value="ñ">
</form>

</body>
</html>
<?php
echo "<a href=\"t_itirann.php\">êÖ</a>";
?>