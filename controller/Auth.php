<?php

class Auth extends Main_controller
{
    private $conn;
    public function __construct()
    {
        parent::__construct();
        $db = new Database_conn();
        $this->conn = $db->getConnection();
    }

    public function index()
    {
    }

    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        if ($row) {
            if ($row['password'] == $password) {
                $_SESSION['users']['username'] = $row['username'];
                $_SESSION['users']['email'] = $row['email'];
                $_SESSION['users']['location'] = $row['location'];
                $_SESSION['users']['phone'] = $row['phone'];

                
                header("Location: " . $this->base_url('halaman'));
                exit;
            } else {
                header("Location: " . $this->base_url('login'));
                exit;
            }
        } else {
            header("Location: " . $this->base_url('halaman'));
            exit;
        }
    }
    public function register()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $sql = "INSERT INTO users (username, password, email)
                VALUES ('$username', '$password', '$email')";
        if ($this->conn->query($sql) === true) {
            header("Location: " . $this->base_url('login'));
            exit;
        } else {
            header("Location: " . $this->base_url('register'));
            exit;
        }
    }
    public function logout()
    {
        session_destroy();
        header("Location: " . $this->base_url('login'));
        exit;
    }
}
