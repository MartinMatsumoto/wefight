<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 10:46
 */
require_once '../../../entrance.php';

$id = intval($_POST["id"]);

$dao = new course_intro_content_dao();

$result = $dao->listCourseIntroContents($id, null);
$arr = array();
while ($row = $result->fetch()) {
    $course_content = new course_introduce_content($row);
    array_push($arr, $course_content);
}
$content = new result($arr, errorCode::$success);

$json_string = json_encode($content, JSON_UNESCAPED_UNICODE);
echo $json_string;