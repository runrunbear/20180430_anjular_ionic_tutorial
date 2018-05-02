<?PHP

header('Access-Control-Allow-Origin: *');
$arr=array();
$arr['id']=$_GET['id'];
$arr['name']='nihao';


if($_POST['age']){
	file_put_contents('text.txt',$_POST['age'].'123');
	$arr['name']=$_POST['age'];

}else{


}




//	$id=$_GET['id'];

echo json_encode($arr);


?>