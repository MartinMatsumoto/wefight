<?php

/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 9:50
 */
class index_banner
{
    // id
    public $id;
    // 背景图
    public $image_url;

    //构造函数
    function __construct($row)
    {
        if (array_key_exists("id", $row)) {
            $this->id = $row["id"];
        }

        if (array_key_exists("image_url", $row)) {
            $this->image_url = $row["image_url"];
        }

    }

}
