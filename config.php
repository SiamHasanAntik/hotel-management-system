<?php

$server = "localhost";
$username = "bluebird_user";
$password = "A@antik123";
$database = "u750907821_bluebirdhotel";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("<script>alert('connection Failed.')</script>");
}
// else{
//     echo "<script>alert('connection successfully.')</script>";
// }
?>