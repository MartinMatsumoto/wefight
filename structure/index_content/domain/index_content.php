<?php

/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 9:50
 */
class index_content
{
    // id
    public $id;
    // 内容
    public $content;
    // 图片
    public $title;

    //构造函数
    function __construct($row)
    {
        if (array_key_exists("id", $row)) {
            $this->id = $row["id"];
        }

        if (array_key_exists("content", $row)) {
            $this->content = $row["content"];
        }

        if (array_key_exists("title", $row)) {
            $this->title = $row["title"];
        }

    }

}
