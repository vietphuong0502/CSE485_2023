<?php

include_once '../Models/Connect.php';

class StudentController
{
    public function getAll()
    {
        $pdo = new Connect();
        $conn = $pdo->getConnection();
        $sql = "SELECT * FROM students";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }


    public function getStudent($id)
    {
        $pdo = new Connect();
        $conn = $pdo->getConnection();
        $sql = "SELECT * FROM students WHERE id=?";
        $stmt=$conn->prepare($sql);
        $stmt->execute([$id]);
        $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

}

?>