<?php
session_start();
include "secrets.php";

$conn = new mysqli("localhost", $db_user, $db_pass, $db_name);

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
$delta = intval($_POST["delta"] ?? 0);  // npr: -100 ako je izgubio

$stmt = $conn->prepare("UPDATE users SET balance = balance + ? WHERE id = ?");
$stmt->bind_param("ii", $delta, $user_id);
$stmt->execute();
$stmt->close();
$conn->close();

echo "OK";
?>