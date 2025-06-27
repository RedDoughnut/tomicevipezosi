<?php
session_start();
include "secrets.php";

$conn = new mysqli("localhost", $db_user, $db_pass, $db_name);

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

$stmt = $conn->prepare("SELECT balance FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($balance);
$stmt->fetch();
$stmt->close();
$conn->close();

echo $balance;
?>