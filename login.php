<?php
session_start();

include "connection.php";

$connection = new connection();
$conn = $connection->connect("localhost", "root", "", "karir");

$username   = $_POST['username'];
$password   = $_POST['password'];

$query = "SELECT * FROM user a left join level_user b on a.level_user_id = b.level_user_id WHERE a.user_username='$username' AND a.user_password='$password'";

$result = $conn->query($query);

if($result->num_rows < 1) {
    $_SESSION['error'] = "Username or Password is invalid";
    header("Location: index.php");
} else {
    if(isset($_SESSION["error"])){
        unset($_SESSION["error"]);
    }

    $row = $result->fetch_array();

    $_SESSION['username'] = $row['user_username'];
    $_SESSION['level'] = $row['level_user_nama'];
    $_SESSION['user_id'] = $row['user_id'];

    if($_SESSION['level'] == "Administrator") {
        header("Location: admin.php");
    } else if($_SESSION['level'] =="Jobseeker") {
        header("Location: jobseeker.php");
    } else if($_SESSION['level'] =="Prodi") {
        header("Location: prodi.php");
    } else if($_SESSION['level'] == "Employer") {
        header("Location: employer.php");
    } else {
        $error = "Failed Login";
    }
}
?>