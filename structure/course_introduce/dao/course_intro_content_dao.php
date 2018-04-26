<?php

/**
 * Created by PhpStorm.
 * User: Acer
 * Date: 2016/9/20
 * Time: 10:19
 */
class course_intro_content_dao
{
    private $conn;

    private $saveCourseIntroContent = "INSERT INTO COURSE_INTRO_CONTENT(course_id,content,type) VALUES (:course_id,:content,:type)";
    private $listCourseIntroContents = "SELECT * FROM COURSE_INTRO_CONTENT WHERE 1=1 AND course_id = :id ";
    private $deleteAll = "DELETE FROM `COURSE_INTRO_CONTENT` WHERE course_id = :course_id";

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

    function getOne($openid)
    {
        $stmt = $this->conn->pdo->prepare($this->getOne);
        $stmt->bindParam(':openid', $openid);
        $stmt->execute();
        return $stmt;
    }

    function save($course_id, $content, $type)
    {

        try {
            $stmt = $this->conn->pdo->prepare($this->saveCourseIntroContent);
            $stmt->bindParam(':course_id', $course_id);
            $stmt->bindParam(':content', $content);
            $stmt->bindParam(':type', $type);
            $stmt->execute();
            return true;
        } catch (Exception  $e) {
            return false;
        }
    }

    function modify($openid, $name, $career_type, $company_nature, $location, $contactor, $tel, $email, $descript)
    {

        if (!$this->autOpenIdExist($openid)) {
            return false;
        }

        try {
            $stmt = $this->conn->pdo->prepare($this->modifyCompany);
            $stmt->bindParam(':openid', $openid);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':career_type', $career_type);
            $stmt->bindParam(':company_nature', $company_nature);
            $stmt->bindParam(':location', $location);
            $stmt->bindParam(':contactor', $contactor);
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':descript', $descript);
            $stmt->execute();
        } catch (Exception  $e) {
            return false;
        }
        return true;
    }

    function listCourseIntroContents($course_id,$type)
    {
        $list = $this->listCourseIntroContents;

        if(isset($type)){
            $list .= " AND type = :type";
        }

        $stmt = $this->conn->pdo->prepare($list);
        $stmt->bindParam(':id', $course_id, PDO::PARAM_INT);
        if(isset($type)){
            $stmt->bindParam(':type', $type, PDO::PARAM_INT);
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

    function deleteAll($course_id)
    {
        $stmt = $this->conn->pdo->prepare($this->deleteAll);
        $stmt->bindParam(':course_id', $course_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt;
    }
}