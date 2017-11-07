<?php
/////////DBÚ‘±î•ñ//////////////////////////



/////////////////////////////////////////////

$sql = 'CREATE TABLE CUSTOMER1
(id VARCHAR(32),
name VARCHAR(100),
basyo VARCHAR(100),
sinntyoku VARCHAR(30),
syousai VARCHAR(65520),
start VARCHAR(32),
value VARCHAR(32),
plan VARCHAR(65520),
mokusi VARCHAR(1),
suuti VARCHAR(1),
kaketuke VARCHAR(1))';
$result = $pdo->query($sql);

echo 'ƒe[ƒuƒ‹ì¬‚ªŠ®—¹‚µ‚Ü‚µ‚½';
?>