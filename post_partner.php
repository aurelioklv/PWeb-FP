<?php
session_start();
include("config.php");
header("Content-Type: application/json");

// if (true) {
if (isset($_POST['partner-button'])) {
    $name = $_POST["nama"];
    $email = $_POST["email"];
    $logo = $_POST["logo"];

    $sql = "SELECT * FROM partners WHERE email = '$email'";
    $query = mysqli_query($db, $sql);
    if (mysqli_num_rows($query)) {
        $ret = array(
            'success' => false,
            'message' => 'Email already exists',
            'name' => $name,
            'email' => $email,
        );
        echo json_encode($ret);
        $_SESSION['addPartnerAttempt'] = $ret;
        header("Location: partners_form.php");
        exit;
    }

    $sql = "INSERT INTO partners (nama, email, logo) VALUES ('$name', '$email', '$logo')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $ret = array(
            'success' => true,
            'message' => 'Successfully add partner'
        );
        echo json_encode($ret);
        $_SESSION['addPartnerAttempt'] = $ret;
        header("Location: partners.php");
        exit;
    } else {
        $ret = array(
            'success' => false,
            'message' => 'Error occured',
            'name' => $name,
            'email' => $email,
        );
        echo json_encode($ret);
        $_SESSION['addPartnerAttempt'] = $ret;
        header("Location: partners_form.php");
        exit;
    }
} else {
    die("You are not authorized");
}
