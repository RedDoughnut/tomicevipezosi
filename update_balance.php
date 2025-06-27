<?php
session_start();
include "SECRETS.php";

$conn = new mysqli('sql209.infinityfree.com', $DB_User, $DB_Pass, 'if0_37883576_tomicevipezosi');

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

$stmt = $conn->prepare("UPDATE user SET balance = balance + ? WHERE email = ?");
$stmt->bind_param("ii", $delta, $user_id);
$stmt->execute();
$stmt->close();
$conn->close();

echo "OK";
?>