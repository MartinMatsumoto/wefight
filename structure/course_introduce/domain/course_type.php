<?php

/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 9:50
 */
class course_type
{
    // id
    public $id;
    // 文章标题
    public $name;
    //删除
    public $delete_;

    //构造函数
    function __construct($row = null)
    {
        if($row != null){
            if (array_key_exists("id", $row)) {
                $this->id = $row["id"];
            }

            if (array_key_exists("name", $row)) {
                $this->name = $row["name"];
            }

            if (array_key_exists("delete_", $row)) {
                $this->delete_ = $row["delete_"];
            }
        }
    }

}
