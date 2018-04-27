<?php
/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2017/7/24
 * Time: 14:57
 */
require_once '../../../entrance.php';

$id = $_POST["id"];

$qq = $_POST["qq"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$longitude = $_POST["longitude"];
$latitude = $_POST["latitude"];

$dao = new index_contact_us_dao();

$result = $dao->modify($id, $qq, $address, $phone, $email, $tel, $longitude, $latitude);
$content = new result(null, errorCode::$success);
$json_string = json_encode($content, JSON_UNESCAPED_UNICODE);
echo $json_string;
return;