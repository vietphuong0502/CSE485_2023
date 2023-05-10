<?php
class Student {
    private $id;
    private $name;
    private $age;

    // Getter và setter cho thuộc tính id
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }




}

class StudentDAO {
    private $students;

    public function __construct() {
        $this->students = array();
    }

    // Thêm sinh viên
    public function createStudent(Student $student) {
        $this->students[] = $student;
    }

    // Đọc thông tin sinh viên theo id
    public function readStudent($id) {
        foreach ($this->students as $student) {
            if ($student->getId() == $id) {
                return $student;
            }
        }
        return null;
    }

    // Cập nhật thông tin sinh viên
    public function updateStudent(Student $student) {
        $id = $student->getId();
        foreach ($this->students as $key => $value) {
            if ($value->getId() == $id) {
                $this->students[$key] = $student;
                return true;
            }
        }
        return false;
    }

    // Xóa sinh viên
    public function deleteStudent($id) {
        foreach ($this->students as $key => $value) {
            if ($value->getId() == $id) {
                unset($this->students[$key]);
                return true;
            }
        }
        return false;
    }

    // Lấy danh sách sinh viên
    public function getAllStudents() {
        return $this->students;
    }
}

?>