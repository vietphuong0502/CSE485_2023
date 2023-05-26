<?php
include_once '../Models/Connect.php';

class LoginController
{
    public function login()
    {
        $pdo = new Connect();
        if (isset($_POST['btnLogin'])) {
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            try {
                $conn = $pdo->getConnection();
                if (empty($email) || empty($password)) {
                    echo "<script>alert('Please enter your email and pasword');</script>";
                    exit();
                }
                $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$email, $password]);
                session_start();
                if ($stmt->rowCount() == 1) {
                    $user = $stmt->fetch(PDO::FETCH_ASSOC);
                    // Lưu thông tin vào session
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_email'] = $user['email'];
                    header("Location:index.php");
                } else {
                    echo "<script>alert('Email or password does not exist');</script>";
                }
            } catch (Exception $e) {
                echo 'Error: ' . $e->getMessage();
            }
        }
    }

    public function logout()
    {
        unset($_SESSION['user_id']);
        session_destroy();
        header("Location:index.php");
    }
}

?>