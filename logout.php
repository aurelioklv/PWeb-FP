<?php
session_start();
session_destroy();
header("Content-Type: application/json");

$ret = array(
    'success' => true,
    'message' => 'Succesfully logged out',
);
echo json_encode($ret);
exit;
