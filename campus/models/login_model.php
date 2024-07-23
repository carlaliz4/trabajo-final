<?php 

include_once 'conexion.php';

$user = $_POST['user'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM users WHERE username = '$user' AND pass = '$pass'";
$query = mysqli_query($con, $sql);
$count = mysqli_num_rows($query);
if ($count == 1) {
    echo "true";
} else {
    echo 'false';
}

?>