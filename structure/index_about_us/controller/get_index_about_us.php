<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 10:46
 */
require_once '../../../entrance.php';

$id = intval($_POST["id"]);

$dao = new index_content_dao();

$result = $dao->getOne($id);
$about_us = new about_us($row = $result->fetch());
$content = new result($about_us, errorCode::$success);

$json_string = json_encode($content, JSON_UNESCAPED_UNICODE);
echo $json_string;