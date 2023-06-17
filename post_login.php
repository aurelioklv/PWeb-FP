<?php
session_start();
include("config.php");
header("Content-Type: application/json");

// if (isset($_POST['login-button'])) {
if (true) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user WHERE email = '$email'";
    $query = mysqli_query($db, $sql);
    if (mysqli_num_rows($query)) {
        $row = mysqli_fetch_assoc($query);
        $encrypted_password = $row['password'];

        if (password_verify($password, $encrypted_password)) {
            $_SESSION['loginID'] = $row['id'];
            $ret = array(
                'success' => true,
                'message' => 'Succesfully logged in',
            );
            echo json_encode($ret);
            exit;
        } else {
            $ret = array(
                'success' => false,
                'message' => 'Incorrect Password',
                'loginData' => $_POST,
            );
            echo json_encode($ret);
            exit;
        }
    } else {
        $ret = array(
            'success' => false,
            'message' => 'Email not found',
            'loginData' => $_POST,
        );
        echo json_encode($ret);
        exit;
    }
} else {
    die("You are not authorized");
}
