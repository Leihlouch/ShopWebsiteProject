<?php
session_start();
include 'login_connect.php';

if(isset($_POST['signIn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = $conn->prepare('SELECT id, email, password FROM users WHERE email = ?');
    $sql->bind_param('s', $email);
    $sql->execute();

    $result = $sql->get_result();
    $row    = $result->fetch_assoc();

    if ($row && password_verify($password, $row['password'])) {
            $_SESSION['email'] = $row['email'];
            header("Location: index.php");
            exit();
    }
    else{
        echo "Not Found, Incorrect Email or Password";
    }
}
?>