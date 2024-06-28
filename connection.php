<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$db_name = "application_1";

$conn = mysqli_connect($serverName, $userName, $password, $db_name);

if (!$conn) {
    echo "Not Connected" . mysqli_connect_error();
} 
else {
    if (isset($_POST['submit'])) {
    $userName = $_POST['username'];
    $password = $_POST['password'];
    $conf_password = $_POST['conf_password'];
    
    $query = "INSERT INTO signup VALUE ('$userName', '$password', '$conf_password')";
    $conn = mysqli_query($conn, $query);
    if (!$conn) {
  
        echo "Query Not Executed".mysqli_connect_error();
    }
    else{
        echo "Query Executed";
    }
    }
}
?>