<?php

/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 10:19
 */
class index_content_dao
{
    private $conn;

    private $modifyIndexContent = "UPDATE INDEX_CONTENT SET `content` = :content,`title` = :title  WHERE id = :id";
    private $getOne = "SELECT * FROM `INDEX_CONTENT` WHERE id = :id";
    private $listIndexContent = "SELECT * FROM INDEX_CONTENT";

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

    function modify($id, $content, $title)
    {
        try {
            $stmt = $this->conn->pdo->prepare($this->modifyIndexContent);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':content', $content);
            $stmt->execute();
        } catch (Exception  $e) {
            return false;
        }
        return true;
    }

    function listIndexContent()
    {
        $stmt = $this->conn->pdo->prepare($this->listIndexContent);
        $stmt->execute();
        return $stmt;
    }

}