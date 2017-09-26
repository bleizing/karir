<?php
/**
 * Created by PhpStorm.
 * User: Bleizing
 * Date: 9/25/2017
 * Time: 3:40 PM
 */

include "connection.php";

$connection = new connection();
$conn = $connection->connect("localhost", "root", "", "karir");

$articleId = 0;
$page = "";

$url = explode("/", $_SERVER["REQUEST_URI"]);

if (count($url) == 3) {
    $page = $url[2];
    $page = substr($page, 0, 12);
    if ($page == "article.php?") {
        $page = $_GET['action'];
        $articleId = $_GET['article_id'];
    }
}

if ($articleId != 0) {
    if ($page == "edit") {
        $queryById = "SELECT * FROM article a left join user b on a.user_id = b.user_id where a.article_id = $articleId";
        $resultQuery = $conn->query($queryById);
        $dataById = $resultQuery->fetch_array();
        $judul = $dataById['article_judul'];
        $isi = $dataById['article_isi'];
    }
}

$query = "SELECT * FROM article a left join user b on a.user_id = b.user_id order by a.article_ts desc";

$result = $conn->query($query);
$articles = array();
while ($data = $result->fetch_array()) {
    $articles[] = $data;
}