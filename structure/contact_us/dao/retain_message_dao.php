<?php

/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 10:19
 */
class retain_message_dao
{
    private $conn;

    private $saveRetainMessage = "INSERT INTO retain_message(name,tel,message) VALUES (:name,:tel,:message)";
    private $count = "SELECT COUNT(*) AS COUNT from `retain_message` WHERE 1=1";

    //构造函数
    function __construct()
    {
        $this->conn = new connection_mysql();
    }

    function save($name, $tel, $message)
    {
        try {
            $stmt = $this->conn->pdo->prepare($this->saveRetainMessage);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':message', $message);
            $stmt->execute();
        } catch (Exception  $e) {
            return false;
        }
        return true;
    }

    function listRetainMessage($begin, $size)
    {
        $listCourseIntros = "SELECT * FROM RETAIN_MESSAGE ";
        $listCourseIntros .= " LIMIT :be ,:en ";
        $stmt = $this->conn->pdo->prepare($listCourseIntros);
        $stmt->bindParam(':be', $begin, PDO::PARAM_INT);
        $stmt->bindParam(':en', $size, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt;
    }

    function count()
    {
        $countSql = $this->count;
        $stmt = $this->conn->pdo->prepare($countSql);
        $stmt->execute();
        return $stmt;
    }

}