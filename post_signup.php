<?php
session_start();
include("config.php");
header("Content-Type: application/json");

// if (isset($_POST['signup-button'])) {
if (true) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($password != $confirm_password) {
        $ret = array(
            'success' => false,
            'message' => 'Passwords do not match'
        );
        echo json_encode($ret);
        exit;
    }

    $sql = "SELECT * FROM user WHERE email = '$email'";
    $query = mysqli_query($db, $sql);
    if (mysqli_num_rows($query)) {
        $ret = array(
            'success' => false,
            'message' => 'Email already exists'
        );
        echo json_encode($ret);
        exit;
    }

    $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO user (nama, email, password) VALUES ('$name', '$email', '$encrypted_password')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $ret = array(
            'success' => true,
            'message' => 'Successfully signed up'
        );
        echo json_encode($ret);
    } else {
        $ret = array(
            'success' => false,
            'message' => 'Error signing up'
        );
        echo json_encode($ret);
    }
} else {
    die("You are not authorized");
}