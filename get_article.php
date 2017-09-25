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

$query = "SELECT * FROM article a left join user b on a.user_id = b.user_id order by article_ts desc";

$result = $conn->query($query);
$datax = array();
while ($data = $result->fetch_array()) {
    $datax[] = $data;
}