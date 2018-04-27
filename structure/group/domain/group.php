<?php

/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 9:50
 */
class group
{
    // id
    public $id;
    // 文章标题
    public $name;
    // 文章作者
    public $career;
    // 文章创建时间
    public $intro;
    // 文章类型
    public $cover_url;

    public $sex;

    public $delete_;

    //构造函数
    function __construct($row)
    {
        if($row != null){
            if (array_key_exists("id", $row)) {
                $this->id = $row["id"];
            }

            if (array_key_exists("name", $row)) {
                $this->name = $row["name"];
            }

            if (array_key_exists("career", $row)) {
                $this->career = $row["career"];
            }

            if (array_key_exists("intro", $row)) {
                $this->intro = $row["intro"];
            }

            if (array_key_exists("cover_url", $row)) {
                $this->cover_url = $row["cover_url"];
            }

            if (array_key_exists("sex", $row)) {
                $this->sex = $row["sex"];
            }

            if (array_key_exists("delete_", $row)) {
                $this->delete_ = $row["delete_"];
            }
        }
    }

}
