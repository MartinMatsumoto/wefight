<?php

/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 9:50
 */
class retain_message
{
    // id
    public $id;
    // 内容
    public $tel;

    public $name;
    // 图片
    public $message;

    //构造函数
    function __construct($row)
    {
        if (array_key_exists("id", $row)) {
            $this->id = $row["id"];
        }

        if (array_key_exists("tel", $row)) {
            $this->tel = $row["tel"];
        }

        if (array_key_exists("name", $row)) {
            $this->name = $row["name"];
        }

        if (array_key_exists("message", $row)) {
            $this->message = $row["message"];
        }

    }

}
