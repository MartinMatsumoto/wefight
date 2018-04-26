<?php

/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 9:50
 */
class contact_us
{
    // id
    public $id;
    // 内容
    public $qq;
    // 图片
    public $address;

    public $phone;
    public $email;
    public $tel;
    public $longitude;
    public $latitude;

    //构造函数
    function __construct($row)
    {
        if (array_key_exists("id", $row)) {
            $this->id = $row["id"];
        }

        if (array_key_exists("qq", $row)) {
            $this->qq = $row["qq"];
        }

        if (array_key_exists("address", $row)) {
            $this->address = $row["address"];
        }

        if (array_key_exists("phone", $row)) {
            $this->phone = $row["phone"];
        }

        if (array_key_exists("email", $row)) {
            $this->email = $row["email"];
        }

        if (array_key_exists("tel", $row)) {
            $this->tel = $row["tel"];
        }

        if (array_key_exists("longitude", $row)) {
            $this->longitude = $row["longitude"];
        }

        if (array_key_exists("latitude", $row)) {
            $this->latitude = $row["latitude"];
        }

    }

}
