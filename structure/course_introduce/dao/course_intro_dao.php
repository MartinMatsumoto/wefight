<?php

/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 10:19
 */
class course_intro_dao
{
    private $conn;

    private $saveCourseIntro = "INSERT INTO COURSE_INTRO(title,cover_url,author,create_date,sub_title,price,market_price,type) VALUES (:title,:cover_url,:author,:create_date,:sub_title,:price,:market_price,:type)";
    private $modifyCourseIntro = "UPDATE COURSE_INTRO SET `title` = :title,`cover_url` = :cover_url,`author` = :author,`create_date` = :create_date,`sub_title` = :sub_title,`price` = :price,`market_price` = :market_price,`type` = :type WHERE id = :id";
    private $getOne = "SELECT * FROM `COURSE_INTRO` WHERE id = :id";
    private $getPrev = "SELECT * FROM `COURSE_INTRO` WHERE id < :id AND delete_ = 0 ORDER BY ID DESC LIMIT 1";
    private $getNext = "SELECT * FROM `COURSE_INTRO` WHERE id > :id AND delete_ = 0 LIMIT 1";
    private $count = "SELECT COUNT(*) AS COUNT from `COURSE_INTRO` WHERE 1=1";
    private $delete = "UPDATE `COURSE_INTRO` SET delete_ = 1 WHERE id = :id";
    private $enable = "UPDATE `COURSE_INTRO` SET delete_ = 0 WHERE id = :id";
    private $show = "UPDATE `COURSE_INTRO` SET index_show = 1 WHERE id = :id";
    private $hide = "UPDATE `COURSE_INTRO` SET index_show = 0 WHERE id = :id";

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

    function save($market_price, $price, $type, $cover_url, $title, $author, $create_date, $sub_title)
    {
        try {
            $stmt = $this->conn->pdo->prepare($this->saveCourseIntro);
            $stmt->bindParam(':type', $type);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':market_price', $market_price);
            $stmt->bindParam(':cover_url', $cover_url);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':author', $author);
            $stmt->bindParam(':create_date', $create_date);
            $stmt->bindParam(':sub_title', $sub_title);
            $stmt->execute();

            $recentId = $stmt = $this->conn->pdo->lastInsertId();
            return $recentId;
        } catch (Exception  $e) {
            echo $e;
            return false;
        }
    }

    function modify($market_price, $price, $type, $cover_url, $title, $author, $create_date, $sub_title, $id)
    {
        try {
            $stmt = $this->conn->pdo->prepare($this->modifyCourseIntro);
            $stmt->bindParam(':market_price', $market_price);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':type', $type);
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

    function listCourseIntro($begin, $size, $type, $delete_,$index_show)
    {
        $listCourseIntros = "SELECT * FROM COURSE_INTRO WHERE 1=1 ";

        if (isset($delete_)) {
            $listCourseIntros .= " AND delete_ = :delete_";
        }

        if (isset($type)) {
            $listCourseIntros .= " AND type = :type";
        }

        if (isset($index_show)) {
            $listCourseIntros .= " AND index_show = :index_show";
        }

        $listCourseIntros .= " LIMIT :be ,:en ";
        $stmt = $this->conn->pdo->prepare($listCourseIntros);
        $stmt->bindParam(':be', $begin, PDO::PARAM_INT);
        $stmt->bindParam(':en', $size, PDO::PARAM_INT);
        if (isset($delete_)) {
            $stmt->bindParam(':delete_', $delete_, PDO::PARAM_INT);
        }
        if (isset($type)) {
            $stmt->bindParam(':type', $type, PDO::PARAM_INT);
        }
        if (isset($index_show)) {
            $stmt->bindParam(':index_show', $index_show, PDO::PARAM_INT);
        }
        $stmt->execute();
        return $stmt;
    }

    function count($type)
    {
        $countSql = $this->count;
        if (isset($type)) {
            $countSql .= " AND type = :type";
        }
        $stmt = $this->conn->pdo->prepare($countSql);
        $stmt->bindParam(':type', $type, PDO::PARAM_INT);
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

    function hide($id)
    {
        $stmt = $this->conn->pdo->prepare($this->hide);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt;
    }

    function show($id)
    {
        $stmt = $this->conn->pdo->prepare($this->show);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt;
    }
}