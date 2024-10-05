<?php	

$connect = mysqli_connect(
	'db',
	'lamp_docker',
	'password',
	'lamp_docker');	

$query = "SELECT * FROM `blog`";
$result = mysqli_query($connect, $query);

if(!$result){
	echo mysqli_error($connect);
}
echo '<h1>Mysql connection</h1>';

while($row = mysqli_fetch_array($result)){
	echo '<h2>'.$row['id'].'</h2>';
	echo '<p>'.$row['title'].'</h2>';
	echo 'Posted:'.$row['date'];
	echo '<hr>';

}

?>
