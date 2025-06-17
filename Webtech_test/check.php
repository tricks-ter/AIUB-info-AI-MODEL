<?php
//check.php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__."/db.php";

if($_SERVER['REQUEST_METHOD']=="POST"){
$user = $_POST["username"];
$query = "SELECT * FROM users WHERE username='". $user ."'";

$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)> 0){
    echo "exists";
    
}else{
    echo "available";
}
}else{
    echo "wrong params";
}


?>