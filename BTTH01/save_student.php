<?php
// Lấy dữ liệu từ form và lưu vào biến
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];

// Tạo mảng chứa dữ liệu
$data = array(
    $id,
    $name,
    $age
);

// Mở file CSV và ghi dữ liệu vào
$file = 'students.txt';
$handle = fopen($file, 'a');
fputcsv($handle, $data);

// Đóng file
fclose($handle);
header("location: add_student.php" );
?>
