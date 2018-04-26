<?php

/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 10:19
 */
class news_dao
{
    private $conn;

    private $saveNews = "INSERT INTO NEWS_INTRO(cover_url,title,author,create_date,sub_title) VALUES (:cover_url,:title,:author,:create_date,:sub_title)";
    private $modifyNews = "UPDATE NEWS_INTRO SET `cover_url` = :cover_url,`title` = :title,`author` = :author,`create_date` = :create_date,`sub_title` = :sub_title WHERE id = :id";
    private $getOne = "SELECT * FROM `NEWS_INTRO` WHERE id = :id";
    private $getPrev = "SELECT * FROM `NEWS_INTRO` WHERE id < :id AND delete_ = 0 ORDER BY ID DESC LIMIT 1";
    private $getNext = "SELECT * FROM `NEWS_INTRO` WHERE id > :id AND delete_ = 0 LIMIT 1";
    private $count = "SELECT COUNT(*) AS COUNT from `NEWS_INTRO`";
    private $delete = "UPDATE `NEWS_INTRO` SET delete_ = 1 WHERE id = :id";
    private $enable = "UPDATE `NEWS_INTRO` SET delete_ = 0 WHERE id = :id";

    //构造函数
    function __construct()
    {
        $this->conn = new connection_mysql();
    }

    function autOpenIdExist($openid)
    {
        $exist = false;
        $stmt = $this->getOne($openid);
        while ($row = $stmt->fetch()) {
            $exist = true;
        }

        return $exist;
    }

    function getOne($id)
    {
        $stmt = $this->conn->pdo->prepare($this->getOne);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt;
    }

    function getPrev($id)
    {
        $stmt = $this->conn->pdo->prepare($this->getPrev);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt;
    }

    function getNext($id)
    {
        $stmt = $this->conn->pdo->prepare($this->getNext);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt;
    }

    function save($cover_url, $title, $author, $create_date, $sub_title)
    {

        try {
            $stmt = $this->conn->pdo->prepare($this->saveNews);
            $stmt->bindParam(':cover_url', $cover_url);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':author', $author);
            $stmt->bindParam(':create_date', $create_date);
            $stmt->bindParam(':sub_title', $sub_title);
            $stmt->execute();

            $recentId = $stmt = $this->conn->pdo->lastInsertId();
            return $recentId;
        } catch (Exception  $e) {
            return false;
        }
    }

    function modify($cover_url, $title, $author, $create_date, $sub_title, $id)
    {
        try {
            $stmt = $this->conn->pdo->prepare($this->modifyNews);
            $stmt->bindParam(':cover_url', $cover_url);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':author', $author);
            $stmt->bindParam(':create_date', $create_date);
            $stmt->bindParam(':sub_title', $sub_title);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (Exception  $e) {
            return false;
        }
    }

    function listNews($begin, $size, $delete_)
    {
        $listNewss = "SELECT * FROM NEWS_INTRO WHERE 1=1 ";

        if (isset($delete_)) {
            $listNewss .= " AND delete_ = :delete_";
        }

        $listNewss .= " LIMIT :be ,:en ";
        $stmt = $this->conn->pdo->prepare($listNewss);
        $stmt->bindParam(':be', $begin, PDO::PARAM_INT);
        $stmt->bindParam(':en', $size, PDO::PARAM_INT);
        if (isset($delete_)) {
            $stmt->bindParam(':delete_', $delete_, PDO::PARAM_INT);
        }
        $stmt->execute();
        return $stmt;
    }

    function count()
    {
        $stmt = $this->conn->pdo->prepare($this->count);
        $stmt->execute();
        return $stmt;
    }

    function delete($id)
    {
        $stmt = $this->conn->pdo->prepare($this->delete);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt;
    }

    function enable($id)
    {
        $stmt = $this->conn->pdo->prepare($this->enable);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt;
    }
}