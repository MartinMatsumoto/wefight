<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2017/7/24
 * Time: 14:57
 */
require_once '../../../entrance.php';

$id = $_POST["id"];
$img_url = $_POST["img_url"];
$content = $_POST["content"];

$user_id = $_COOKIE['jushouqing_manager_id'];

$file = $_FILES['image_url_reload'];//得到传输的数据
//得到文件名称
$name = $file['name'];
$dao = new index_about_us_dao();

//没有上传
if(empty($name)){
    $result = $dao->modify($id, $content, $img_url);
    $content = new result(null, errorCode::$success);
    $json_string = json_encode($content, JSON_UNESCAPED_UNICODE);
    echo $json_string;
    return;
}

$type = strtolower(substr($name, strrpos($name, '.') + 1)); //得到文件类型，并且都转化成小写
$allow_type = array('jpg', 'jpeg', 'png'); //定义允许上传的类型
//判断文件类型是否被允许上传
if (!in_array($type, $allow_type)) {
    //如果不被允许，则直接停止程序运行
    return;
}
//判断是否是通过HTTP POST上传的
if (!is_uploaded_file($file['tmp_name'])) {
    //如果不是通过HTTP POST上传的
    return;
}

$file_name = "/upload/manager/" . $user_id . "_" . time() . '.' . $type;
$upload_name = $ROOT_DIR . $file_name;

//开始移动文件到相应的文件夹
if (move_uploaded_file($file['tmp_name'], $upload_name)) {

    $result = $dao->modify($id, $content, $file_name);
    $content = new result(null, errorCode::$success);
    $json_string = json_encode($content, JSON_UNESCAPED_UNICODE);
    echo $json_string;
} else {
    $content = new result(null, errorCode::$loginerror);
    $json_string = json_encode($content, JSON_UNESCAPED_UNICODE);
    echo $json_string;
}


