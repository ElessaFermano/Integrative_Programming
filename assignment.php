<?php
header('Content-type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: OPTIONS, GET, POST, PUT, DELETE');
header('Access-Control-Max-Age: 3600');
header('Access-Control-Allow-Headers: Content-type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

$servername = 'localhost';
$username = 'root';
$password = '';
$dbName = 'integrative';


$conn = new mysqli($servername, $username, $password);

$conn->query("USE $dbName");
$all = $conn->query("SELECT * FROM songs");

if($all->num_rows > 0){
 $data =  $all->fetch_all(MYSQLI_ASSOC);
 echo json_encode($data);
}


?>