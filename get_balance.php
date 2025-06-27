<?php
session_start();
include "SECRETS.php";

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

    $res = $conn->query("SELECT balance FROM user WHERE email = `$user_id`");
    $res = $res->fetch_assoc();
    
    echo $res["balance"];
?>