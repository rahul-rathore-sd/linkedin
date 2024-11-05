<?php 
$host = 'localhost'; // or hostname
$db = 'blogger'; //database name
$user = 'root'; // database username
$pass = ''; // database password

try{
    $pdo = new PDO("mysql: host=$host; dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connection successfull";
}catch(PDOException $e){
    echo "connection failed: " . $e->getMessage();
}
?>
