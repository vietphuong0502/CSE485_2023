<?php

require_once 'Student.php';

class StudentDAO {
    private $students;

    public function __construct() {
        $this->students = array();
    }

    public function create(Student $student) {
        $this->students[] = $student;
    }

    public function getAll() {
        return $this->students;
    }

    public function loadDataFromFile($filename) {
        $lines = file($filename);
        foreach ($lines as $line) {
            $data = explode(',', $line);
            $id = trim($data[0]);
            $name = trim($data[1]);
            $age = trim($data[2]);
            $student = new Student($id, $name, $age);
            $this->create($student);
        }
    }

    public function saveDataToFile($filename) {
        $fp = fopen($filename, 'w');
        foreach ($this->students as $student) {
            fwrite($fp, $student->getId() . ',' . $student->getName() . ',' . $student->getAge() . "\n");
        }
        fclose($fp);
    }
}
