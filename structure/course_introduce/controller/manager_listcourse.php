<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 10:46
 */
require_once '../../../entrance.php';

$begin = intval($_POST["begin"]);
$pageSize = intval($_POST["pageSize"]);

$dao = new course_intro_dao();

$result = $dao->listCourseIntro($begin, $pageSize, null, null, null);
$arr = array();
while ($row = $result->fetch()) {
    $course_intro = new course_introduce($row);
    array_push($arr, $course_intro);
}
$content = new result($arr, errorCode::$success);

$countResult = $dao->count(null);
$countRow = $countResult->fetch();
$content->count = $countRow["COUNT"];

$json_string = json_encode($content, JSON_UNESCAPED_UNICODE);
echo $json_string;