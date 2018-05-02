<?PHP


$arr=array();
$arr['id']=$_GET['id'];
$arr['name']='nihao';
$arr['age']=$_GET['age'];



//	$id=$_GET['id'];

echo json_encode($arr);


?>