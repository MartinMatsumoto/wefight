<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 10:46
 */
require_once '../../../entrance.php';

$id = intval($_POST["id"]);

$dao = new news_content_dao();

$result = $dao->listNewsContents($id);
$arr = array();
while ($row = $result->fetch()) {
    $news_content = new news_content($row);
    array_push($arr, $news_content);
}
$content = new result($arr, errorCode::$success);

$json_string = json_encode($content, JSON_UNESCAPED_UNICODE);
echo $json_string;