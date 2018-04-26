<?php

/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 10:19
 */
class index_about_us_dao
{
    private $conn;

    private $modifyIndexContent = "UPDATE INDEX_ABOUT_US SET `content` = :content,`img_url` = :img_url  WHERE id = :id";
    private $getOne = "SELECT * FROM `INDEX_ABOUT_US` WHERE id = :id";

    //构造函数
    function __construct()
    {
        $this->conn = new connection_mysql();
    }

    function getOne($id)
    {
        $stmt = $this->conn->pdo->prepare($this->getOne);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt;
    }

    function modify($id, $content, $img_url)
    {
        try {
            $stmt = $this->conn->pdo->prepare($this->modifyIndexContent);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':img_url', $img_url);
            $stmt->bindParam(':content', $content);
            $stmt->execute();
        } catch (Exception  $e) {
            return false;
        }
        return true;
    }

}