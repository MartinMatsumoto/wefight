<?php

/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 10:19
 */
class course_type_dao
{
    private $conn;

    private $saveCourseType = "INSERT INTO COURSE_TYPE(name,delete_) VALUES (:name,:delete_)";
    private $modifyCourseType = "UPDATE COURSE_TYPE SET `name` = :name WHERE id = :id";
    private $delete = "UPDATE `COURSE_TYPE` SET delete_ = 1 WHERE id = :id";
    private $enable = "UPDATE `COURSE_TYPE` SET delete_ = 0 WHERE id = :id";

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


    function save($name)
    {
        try {
            $stmt = $this->conn->pdo->prepare($this->saveCourseType);
            $delete = 0;
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':delete_', $delete);
            $stmt->execute();
            $recentId = $stmt = $this->conn->pdo->lastInsertId();
            return $recentId;
        } catch (Exception  $e) {
            return false;
        }
    }

    function modify($name, $id)
    {
        try {
            $stmt = $this->conn->pdo->prepare($this->modifyCourseType);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (Exception  $e) {
            return false;
        }
    }

    function listCourseTypes($begin, $size, $delete_)
    {
        $listCourseTypes = "SELECT * FROM COURSE_TYPE WHERE 1=1 ";

        if(isset($delete_)){
            $listCourseTypes .= " AND delete_ = :delete_";
        }

        $listCourseTypes .= " LIMIT :be ,:en ";
        $stmt = $this->conn->pdo->prepare($listCourseTypes);
        $stmt->bindParam(':be', $begin, PDO::PARAM_INT);
        $stmt->bindParam(':en', $size, PDO::PARAM_INT);
        if(!empty($type)){
            $stmt->bindParam(':type', $type, PDO::PARAM_INT);
        }

        if(isset($delete_)){
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