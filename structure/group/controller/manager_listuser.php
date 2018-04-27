<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 10:46
 */
require_once '../../../entrance.php';

$dao = new group_dao();

$result = $dao->listGroup(null);
$arr = array();
while ($row = $result->fetch()) {
    $group = new group($row);
    array_push($arr, $group);
}
$content = new result($arr, errorCode::$success);

$json_string = json_encode($content, JSON_UNESCAPED_UNICODE);
echo $json_string;