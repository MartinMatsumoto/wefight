<?php

/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 10:19
 */
class group_dao
{
    private $conn;

    private $saveGroup = "INSERT INTO TEACHER_INTRO(name,career,intro,cover_url) VALUES (:name,:career,:intro,:cover_url)";
    private $modifyGroup = "UPDATE TEACHER_INTRO SET `name` = :name,`career` = :career,`intro` = :intro,`cover_url` = :cover_url WHERE id = :id";
    private $getOne = "SELECT * FROM `TEACHER_INTRO` WHERE id = :id";
    private $delete = "UPDATE `TEACHER_INTRO` SET delete_ = 1 WHERE id = :id";
    private $enable = "UPDATE `TEACHER_INTRO` SET delete_ = 0 WHERE id = :id";

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

    function save($name, $career, $intro, $cover_url)
    {
        try {
            $stmt = $this->conn->pdo->prepare($this->saveGroup);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':career', $career);
            $stmt->bindParam(':intro', $intro);
            $stmt->bindParam(':cover_url', $cover_url);
            $stmt->execute();

            $recentId = $stmt = $this->conn->pdo->lastInsertId();
            return $recentId;
        } catch (Exception  $e) {
            return false;
        }
    }

    function modify($id, $name, $career, $intro, $cover_url)
    {
        try {
            $stmt = $this->conn->pdo->prepare($this->modifyGroup);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':career', $career);
            $stmt->bindParam(':intro', $intro);
            $stmt->bindParam(':cover_url', $cover_url);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (Exception  $e) {
            return false;
        }
    }

    function listGroup($delete_)
    {
        $listGroups = "SELECT * FROM TEACHER_INTRO WHERE 1=1 ";
        if (isset($delete_)) {
            $listGroups .= " AND delete_ = :delete_";
        }
        $stmt = $this->conn->pdo->prepare($listGroups);
        if (isset($delete_)) {
            $stmt->bindParam(':delete_', $delete_, PDO::PARAM_INT);
        }
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