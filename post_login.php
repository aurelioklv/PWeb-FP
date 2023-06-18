<?php
session_start();
include("config.php");
header("Content-Type: application/json");

// if (true) {
if (isset($_POST['login-button'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user WHERE email = '$email'";
    $query = mysqli_query($db, $sql);
    if (mysqli_num_rows($query)) {
        $row = mysqli_fetch_assoc($query);
        $encrypted_password = $row['password'];

        if (hash('sha256', $password) === $encrypted_password) {
            $_SESSION['loginID'] = $row['id'];
            $_SESSION['loginRole'] = $row['role'];
            $ret = array(
                'success' => true,
                'message' => 'Succesfully logged in',
            );
            echo json_encode($ret);
            header("Location: courses.php");
            exit;
        } else {
            $ret = array(
                'success' => false,
                'message' => 'Incorrect Password',
                'email' => $_POST['email'],
                'password' => $_POST['password'],
            );
            echo json_encode($ret);
            $_SESSION['loginAttempt'] = $ret;
            header("Location: login.php");
            exit;
        }
    } else {
        $ret = array(
            'success' => false,
            'message' => 'Email not found',
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        );
        echo json_encode($ret);
        $_SESSION['loginAttempt'] = $ret;
        header("Location: login.php");
        exit;
    }
} else {
    die("You are not authorized");
}
