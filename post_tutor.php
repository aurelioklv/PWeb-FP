<?php
session_start();
include("config.php");
header("Content-Type: application/json");

// if (true) {
if (isset($_POST['add-tutor'])) {
    $name = $_POST["nama"];
    $email = $_POST["email"];

    $sql = "SELECT * FROM tutor WHERE email = '$email'";
    $query = mysqli_query($db, $sql);
    if (mysqli_num_rows($query)) {
        $ret = array(
            'success' => false,
            'message' => 'Email already exists',
            'name' => $name,
            'email' => $email,
        );
        echo json_encode($ret);
        $_SESSION['addTutorAttempt'] = $ret;
        header("Location: tutors_form.php");
        exit;
    }

    $sql = "INSERT INTO tutor (nama, email) VALUES ('$name', '$email')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $ret = array(
            'success' => true,
            'message' => 'Successfully add tutor'
        );
        echo json_encode($ret);
        $_SESSION['addTutorAttempt'] = $ret;
        header("Location: tutors.php");
        exit;
    } else {
        $ret = array(
            'success' => false,
            'message' => 'Error occured',
            'name' => $name,
            'email' => $email,
        );
        echo json_encode($ret);
        $_SESSION['addTutorAttempt'] = $ret;
        header("Location: tutors_form.php");
        exit;
    }
} else {
    die("You are not authorized");
}
