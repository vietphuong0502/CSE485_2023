<?php

class Student {
    private $id;
    private $name;
    private $age;

    public function __construct($id, $name, $age) {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
    }

    // Getters và setters cho thuộc tính id
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    // Getters và setters cho thuộc tính name
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    // Getters và setters cho thuộc tính age
    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }
}
