<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include "SECRETS.php";
echo $DB_User;
echo $DB_Pass;
try{
    $conn = new mysqli('sql209.infinityfree.com', $DB_User, $DB_Pass, 'if0_37883576_tomicevipezosi')

    // Provera konekcije
    if ($conn->connect_error) {
        http_response_code(500);
        echo "DB connection error.";
        exit;
    }

    if (!isset($_SESSION["user"])) {
        http_response_code(401);
        echo "Not logged in.";
        exit;
    }

    $user_id = $_SESSION["user"];

    $stmt = $conn->prepare("SELECT balance FROM user WHERE email = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($balance);
    $stmt->fetch();
    $stmt->close();
    $conn->close();

    echo $balance;
}
catch(Exception $e){
    echo $e;
}
?>