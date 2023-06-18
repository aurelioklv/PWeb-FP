<?php
session_start();
include("config.php");
header("Content-Type: application/json");

// if (true) {
if (isset($_POST['admission-button'])) {
    $course_id = $_POST["course_id"];
    $user_id = $_SESSION['loginID'];

    $sql = "SELECT * FROM admission WHERE user_id = $user_id AND courses_id = $course_id";
    $query = mysqli_query($db, $sql);
    if (mysqli_num_rows($query)) {
        $ret = array(
            'success' => false,
            'message' => 'Admission exists',
            'course_id' => $course_id,
        );
        echo json_encode($ret);
        $_SESSION['admissionAttempt'] = $ret;
        header("Location: admissions.php");
        exit;
    }

    $sql = "INSERT INTO admission (waktu_daftar, user_id, courses_id) VALUES (NOW(), $user_id, $course_id)";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $ret = array(
            'success' => true,
            'message' => 'Admitted'
        );
        echo json_encode($ret);
        header("Location: courses.php");
        exit;
    } else {
        $ret = array(
            'success' => false,
            'message' => 'Error creating admission'
        );
        echo json_encode($ret);
        $_SESSION['admissionAttempt'] = $ret;
        header("Location: admissions.php");
        exit;
    }
} else {
    die("You are not authorized");
}
