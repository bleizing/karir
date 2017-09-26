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
$articleId = $_POST['article_id'];

$type = "";

if(isset($_POST['submit'])) {
    if ($articleId == 0) {
        $query = "INSERT INTO article(article_judul, article_isi, user_id) values('$judul', '$isi', " . $_SESSION['user_id'] . ")";
        $type = "ditambahkan";
    } else {
        $query = "UPDATE article set article_judul = '$judul', article_isi = '$isi' where article_id = $articleId";
        $type = "diubah";
    }
} elseif (isset($_POST['delete'])){
    $query = "DELETE from article where article_id = $articleId";
    $type = "dihapus";
}


$result = $conn->query($query);

if($result) {
    $_SESSION['error'] = "Artikel berhasil $type";
} else {
    $_SESSION['error'] = "Artikel gagal $type";
}

header("Location: article.php");
?>