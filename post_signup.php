<?php
session_start();
include("config.php");
header("Content-Type: application/json");

// if (true) {
if (isset($_POST['signup'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user WHERE email = '$email'";
    $query = mysqli_query($db, $sql);
    if (mysqli_num_rows($query)) {
        $ret = array(
            'success' => false,
            'message' => 'Email already exists',
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        );
        echo json_encode($ret);
        $_SESSION['signupAttempt'] = $ret;
        header("Location: signup.php");
        exit;
    }

    $encrypted_password = hash('sha256', $password);
    $sql = "INSERT INTO user (nama, email, password, role) VALUES ('$name', '$email', '$encrypted_password', DEFAULT)";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $ret = array(
            'success' => true,
            'message' => 'Successfully signed up'
        );
        echo json_encode($ret);
        header("Location: login.php");
        exit;
    } else {
        $ret = array(
            'success' => false,
            'message' => 'Error signing up'
        );
        echo json_encode($ret);
        $_SESSION['signupAttempt'] = $ret;
        header("Location: signup.php");
        exit;
    }
} else {
    die("You are not authorized");
}
