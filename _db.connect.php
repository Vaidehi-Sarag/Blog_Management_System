<?php
$server = "localhost";
$password = "";
$username = "root";
$database = "blogs";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
//     echo "Successfull Connection";
// }else{
    die("Error" .mysqli_connect_error());
}
?>