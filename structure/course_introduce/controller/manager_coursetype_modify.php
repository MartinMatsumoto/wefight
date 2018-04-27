<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 10:46
 */
require_once '../../../entrance.php';

$id = $_POST["id"];
$name = $_POST["name"];

$dao = new course_type_dao();
$result = $dao->modify($id, $name);
$content = new result($result, errorCode::$success);
$json_string = json_encode($content, JSON_UNESCAPED_UNICODE);
echo $json_string;