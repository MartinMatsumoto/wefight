<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 10:46
 */
require_once '../../../entrance.php';

$id = intval($_POST["id"]);

$dao = new index_contact_us_dao();

$result = $dao->getOne($id);
$contact_us = new contact_us($row = $result->fetch());
$content = new result($contact_us, errorCode::$success);

$json_string = json_encode($content, JSON_UNESCAPED_UNICODE);
echo $json_string;