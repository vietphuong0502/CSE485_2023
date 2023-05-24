<?php

require_once 'src/Student.php';
require_once 'src/StudentDAO.php';

// Kiểm tra nếu người dùng đã submit form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];

    // Tạo đối tượng Student
    $student = new Student($id, $name, $age);

    // Kiểm tra nếu sinh viên đã tồn tại
    $studentDAO = new StudentDAO();
    $studentDAO->loadDataFromFile('students.txt');
    $students = $studentDAO->getAll();
    foreach ($students as $s) {
        if ($s->getId() == $id) {
            // Nếu sinh viên đã tồn tại, chuyển hướng về trang thêm sinh viên với thông báo lỗi
            header('Location: add_student.php?error=1');
            exit();
        }
    }

    // Lưu sinh viên mới vào file
    $studentDAO->create($student);
    $studentDAO->saveDataToFile('students.txt');

    // Chuyển hướng về trang danh sách sinh viên
    header('Location: index.php');
    exit();
}