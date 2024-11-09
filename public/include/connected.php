<?php 
$host = "127.0.0.1:4306";
$username = "root";
$password = "";
$dbname = "task";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    echo "لم يتم الاتصال بقاعدة البيانات";
}
?>