<?php

/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 9:50
 */
class news
{
    // id
    public $id;
    // 文章标题
    public $title;
    // 文章作者
    public $author;
    // 文章创建时间
    public $create_date;
    // 文章副标题
    public $sub_title;
    // 文章类型
    public $cover_url;
    //删除
    public $delete_;
    // 文章内容
    public $essay_content;

    //构造函数
    function __construct($row = null)
    {
        if($row != null){
            if (array_key_exists("id", $row)) {
                $this->id = $row["id"];
            }

            if (array_key_exists("title", $row)) {
                $this->title = $row["title"];
            }

            if (array_key_exists("author", $row)) {
                $this->author = $row["author"];
            }

            if (array_key_exists("create_date", $row)) {
                $this->create_date = $row["create_date"];
            }

            if (array_key_exists("sub_title", $row)) {
                $this->sub_title = $row["sub_title"];
            }

            if (array_key_exists("cover_url", $row)) {
                $this->cover_url = $row["cover_url"];
            }

            if (array_key_exists("delete_", $row)) {
                $this->delete_ = $row["delete_"];
            }

            if (array_key_exists("essay_content", $row)) {
                $this->essay_content = $row["essay_content"];
            }
        }
    }

}
