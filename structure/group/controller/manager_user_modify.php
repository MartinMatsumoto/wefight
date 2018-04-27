<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 10:46
 */
require_once '../../../entrance.php';

$id = $_POST["id"];
$user_name = $_POST["name"];
$career = $_POST["career"];
$intro = $_POST["intro"];
$cover_url = $_POST["cover_url"];
$sex = intval($_POST["sex"]);
$user_id = $_COOKIE['jushouqing_manager_id'];
$file = $_FILES['image'];//得到传输的数据
//得到文件名称
$name = $file['name'];


//没有上传
if (!empty($name)) {
    $file_type = strtolower(substr($name, strrpos($name, '.') + 1)); //得到文件类型，并且都转化成小写
    $allow_type = array('jpg', 'jpeg', 'png'); //定义允许上传的类型
    //判断文件类型是否被允许上传
    if (!in_array($file_type, $allow_type)) {
        //如果不被允许，则直接停止程序运行
        return;
    }
    //判断是否是通过HTTP POST上传的
    if (!is_uploaded_file($file['tmp_name'])) {
        //如果不是通过HTTP POST上传的
        return;
    }

    $file_name = "/upload/user/" . $user_id . "_" . time() . '.' . $file_type;
    $upload_name = $ROOT_DIR . $file_name;

    //开始移动文件到相应的文件夹
    if (move_uploaded_file($file['tmp_name'], $upload_name)) {
        $cover_url = $file_name;
    } else {
        $content = new result(null, errorCode::$loginerror);
        $json_string = json_encode($content, JSON_UNESCAPED_UNICODE);
        echo $json_string;
        return;
    }
}


$dao = new group_dao();
$result = $dao->modify($id, $user_name, $career, $intro, $cover_url, $sex);
$content = new result($result, errorCode::$success);
$json_string = json_encode($content, JSON_UNESCAPED_UNICODE);
echo $json_string;