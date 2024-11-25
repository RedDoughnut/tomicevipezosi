<?php
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$pass = $_POST['password'];

$conn = mysqli_connect('localhost', 'root', '', 'tomicevipezosi');
if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $sql = "SELECT email FROM user";
        $result = $conn->query($sql);
        
        if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            if($row["email"] == $email){
                echo "Email vec postoji";
                $conn->close();
                exit();
            }
        }
        }
        $sql = "INSERT INTO user(firstName, lastName, email, password) VALUES('$firstName', '$lastName', '$email', '$pass')";
        if($conn->query($sql) == TRUE){
            echo "Registracija uspesna! <a href='login.html'>Ulogujte se</a>";
        }
        else{
            echo "Registracija neuspesna: " . $conn->error;
        }
        $conn->close();
    }


?>