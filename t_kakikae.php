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

/////////DB接続情報/////////////////////////



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

//UPDATE文を変数に格納
$sql = "UPDATE CUSTOMER1 SET mokusi = :mokusi,suuti=:suuti,kaketuke=:kaketuke WHERE id =:id";

//更新後の値を決めないまま、SQL実行準備をする
$stmt = $pdo->prepare($sql);

//更新する値を配列に格納
$params = array(':mokusi' => "$mente1",':suuti' => "$mente2",':kaketuke' => "$mente3",':id' => "$id");

//更新する値が入った変数をexecuteにセットしてSQLを実行する
$stmt -> execute($params);

echo '報告が完了しました';
echo "<a href=\"t_itirann.php\">一覧へ</a>";

?>