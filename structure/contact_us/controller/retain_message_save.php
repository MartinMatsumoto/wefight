<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2017/7/24
 * Time: 14:57
 */
require_once '../../../entrance.php';

$name = $_POST["name"];
$tel = $_POST["tel"];
$message = $_POST["message"];


$dao = new retain_message_dao();
$recentId = $dao->save($name, $tel, $message);

$content = new result(null, errorCode::$success);
$json_string = json_encode($content, JSON_UNESCAPED_UNICODE);
echo $json_string;
return;