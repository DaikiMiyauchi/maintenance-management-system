<?php
$id = $_POST['id'];

if(isset($_POST['mente1']))
{
	$true1=1;
}
if(isset($_POST['mente2']))
{
	$true2=1;
}
if(isset($_POST['mente3']))
{
	$true3=1;
}

/////////DB�ڑ����/////////////////////////



////////////////////////////////////////////

$pdh = $pdo->query('SET NAMES SJIS');
	$sql = "SELECT * FROM CUSTOMER1";
	$pdh = $pdo->query($sql);
	foreach($pdh as $keiji)
	{
		if($keiji['id']==$id)
		{
			$mente1=$keiji['mokusi'];
			$mente2=$keiji['suuti'];
			$mente3=$keiji['kaketuke'];
			if($true1==1)
			{
				$mente1 = $mente1+1;
			}
			if($true2==1)
			{
				$mente2 = $mente2+1;
			}
			if($true3==1)
			{
				$mente3 = $mente3+1;
			}
		}
	}

//UPDATE����ϐ��Ɋi�[
$sql = "UPDATE CUSTOMER1 SET mokusi = :mokusi,suuti=:suuti,kaketuke=:kaketuke WHERE id =:id";

//�X�V��̒l�����߂Ȃ��܂܁ASQL���s����������
$stmt = $pdo->prepare($sql);

//�X�V����l��z��Ɋi�[
$params = array(':mokusi' => "$mente1",':suuti' => "$mente2",':kaketuke' => "$mente3",':id' => "$id");

//�X�V����l���������ϐ���execute�ɃZ�b�g����SQL�����s����
$stmt -> execute($params);

echo '�񍐂��������܂���';
echo "<a href=\"t_itirann.php\">�ꗗ��</a>";

?>