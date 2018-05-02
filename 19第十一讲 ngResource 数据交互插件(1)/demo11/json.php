<?PHP

header('Access-Control-Allow-Origin: *');
$arr=array();
$arr['id']=$_GET['id'];
$arr['name']='nihao';
$arr['age']=$_GET['age'];

$arr['sex']=$_GET['sex'];

//	$id=$_GET['id'];

echo json_encode($arr);


?>