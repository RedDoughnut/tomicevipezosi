<?php
$email = $_POST['email'];
$pass = $_POST['password'];

$conn = mysqli_connect('localhost', 'root', '', 'tomicevipezosi');
if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $sql = "SELECT password FROM user WHERE email = '$email'";

        $result = $conn->query($sql);
        $p = "";
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $p = $row["password"];
            }
        }
        $result = $p;
        
        if($pass == $result){
            $sql = "SELECT firstName FROM user WHERE email = '$email'";
            $res = $conn->query($sql);
            $res = $res -> fetch_assoc();
            echo "Dobrodosao " . $res['firstName'] . "!";
        }
        else{
            echo "Pogresan email ili lozinka";
        }
        $conn->close();
    }


?>