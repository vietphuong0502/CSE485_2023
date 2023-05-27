<?php
include_once '../Models/Connect.php';
class CourseController
{
    public function getAll()
    {
        $pdo = new Connect();
        $conn = $pdo->getConnection();
        $sql = "SELECT * FROM course";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getCourseByClassId($class_id)
    {
        $pdo = new Connect();
        $conn = $pdo->getConnection();
        $sql = "SELECT * FROM course";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}