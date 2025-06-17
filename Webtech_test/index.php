<?php   
require_once __DIR__."/db.php";

if($_SERVER['REQUEST_METHOD'] === "POST"){
    
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "select * from users";

    $result = mysqli_query($conn,$query);
    




    if(mysqli_num_rows($result) > 0){

        
        while($row = mysqli_fetch_array($result)){
            $user_name = $row["username"];


        }

    }
    echo "Welcome".$user_name;




}


?>

