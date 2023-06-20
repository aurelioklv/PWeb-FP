<?php
session_start();
include("config.php");
header("Content-Type: application/json");

// if (true) {
if (isset($_POST['message-button'])) {
    $name = $_POST["nama"];
    $email = $_POST["email"];
    $phone = $_POST["nohp"];
    $message = $_POST["pesan"];

    $sql = "INSERT INTO message (nama, email, no_hp, pesan, createdAt) VALUES ('$name', '$email', '$phone', '$message', NOW())";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $ret = array(
            'success' => true,
            'message' => 'Message sent',
        );
        echo json_encode($ret);
        $_SESSION['messageAttempt'] = $ret;
        header("Location: contact.php");
        exit;
    } else {
        $ret = array(
            'success' => false,
            'message' => 'Error occured',
        );
        echo json_encode($ret);
        $_SESSION['messageAttempt'] = $ret;
        header("Location: contact.php");
        exit;
    }
} else {
    die("You are not authorized");
}
