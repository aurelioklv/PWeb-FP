<?php
session_start();
include("config.php");
header("Content-Type: application/json");

// if (isset($_POST['add'])) {
if (true) {
    $name = $_POST["nama"];
    $description = $_POST['deskripsi'];
    $content = $_POST['konten'];
    $url = $_POST['gambar'];
    $price = $_POST['harga'];
    $tutor_id = $_POST['id_tutor'];
    $partner_id = $_POST['id_partner'];

    $sql = "INSERT INTO courses (nama, deskripsi, konten, gambar_kursus, harga, tutor_id, partners_id) VALUES ('$name', '$description', '$content', '$url', $price, $tutor_id, $partner_id)";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $ret = array(
            'success' => true,
            'message' => 'Succesfully create a course',
            'data' => $_POST
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
        exit;
    }
} else {
    die("You are not authorized");
}
