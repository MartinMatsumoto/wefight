<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 10:46
 */
require_once '../../../entrance.php';

$dao = new course_type_dao();

$result = $dao->listCourseTypes(0, 100, null);
$arr = array();
while ($row = $result->fetch()) {
    $course_type = new course_type($row);
    array_push($arr, $course_type);
}
$content = new result($arr, errorCode::$success);

$json_string = json_encode($content, JSON_UNESCAPED_UNICODE);
echo $json_string;