<?php

/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 9:50
 */
class about_us
{
    // id
    public $id;
    // 内容
    public $content;
    // 图片
    public $img_url;

    //构造函数
    function __construct($row)
    {
        if (array_key_exists("id", $row)) {
            $this->id = $row["id"];
        }

        if (array_key_exists("content", $row)) {
            $this->content = $row["content"];
        }

        if (array_key_exists("img_url", $row)) {
            $this->img_url = $row["img_url"];
        }

    }

}
