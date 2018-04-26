<?php

/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 10:19
 */
class index_contact_us_dao
{
    private $conn;

    private $modifyIndexContent = "UPDATE CONTACT_US SET `qq` = :qq,`address` = :address,`phone` = :phone,`email` = :email,`tel` = :tel,`longitude` = :longitude,`latitude` = :latitude  WHERE id = :id";
    private $getOne = "SELECT * FROM `CONTACT_US` WHERE id = :id";

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

    function modify($id, $qq, $address, $phone, $email, $tel, $longitude, $latitude)
    {
        try {
            $stmt = $this->conn->pdo->prepare($this->modifyIndexContent);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':qq', $qq);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':longitude', $longitude);
            $stmt->bindParam(':latitude', $latitude);
            $stmt->execute();
        } catch (Exception  $e) {
            return false;
        }
        return true;
    }

}