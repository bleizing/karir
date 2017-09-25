<?php
/**
 * Created by PhpStorm.
 * User: Bleizing
 * Date: 9/25/2017
 * Time: 3:19 PM
 */
session_start();

include "connection.php";

$connection = new connection();
$conn = $connection->connect("localhost", "root", "", "karir");

$judul   = $_POST['judul'];
$isi   = $_POST['isi'];

$query = "INSERT INTO article(article_judul, article_isi, user_id) values('$judul', '$isi', '" . $_SESSION['user_id'] . "')";

$result = $conn->query($query);

if($result) {
    $_SESSION['error'] = "Artikel berhasil ditambahkan";
} else {
    $_SESSION['error'] = "Artikel gagal ditambahkan";
}

header("Location: admin.php");
?>