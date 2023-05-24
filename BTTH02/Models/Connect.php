<?php
class Connect {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'tlu';
    private $conn;

    public function __construct() {
        $this->conn = $this->connect();
    }

    private function connect() {
        try {
            $conn = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Lỗi kết nối CSDL: " . $e->getMessage();
            exit();
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}

?>