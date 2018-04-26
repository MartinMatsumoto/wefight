<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2017/7/24
 * Time: 14:57
 */
require_once '../../../entrance.php';

$id = $_POST["id"];
$title = $_POST["title"];
$content = $_POST["content"];

$user_id = $_COOKIE['jushouqing_manager_id'];

$dao = new index_content_dao();

//没有上传
if(empty($name)){
    $result = $dao->modify($id, $title, $content);
    $content = new result(null, errorCode::$success);
    $json_string = json_encode($content, JSON_UNESCAPED_UNICODE);
    echo $json_string;
    return;
}