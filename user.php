<!DOCTYPE html>
<?php
session_start();
include "SECRETS.php";
?>
<html>

<head>
    <meta charset="utf-8">
    <title>Tomicevi Pezosi</title>
    <link rel="stylesheet" href="nav.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        *{
            font-family: 'Poppins', sans-serif;
            margin: 0;
            box-sizing: border-box;
        }
        ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
         }

        li {
            display: inline;
        }
        a {
           display: inline;
           font-size: 1rem;
           color: #04AA6D;
        } 
        a.nav {
           display: inline;
           font-size: 2rem;
           text-decoration: none;
           color: black;
        } 
        ul{
            margin: 20px;
        }
        a:hover{
            color: rgb(181, 181, 181);
            transition: 0.5s ease-in-out;
        }
        p{
            font-size: 1.3rem;
            margin: 20px 20px 20px 30px;
        }
        h1, h2{
            margin: 20px 20px 20px 30px;
        }
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px 20px 20px 30px;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }
        .form2{
            background: linear-gradient(150deg, rgba(4,170,109,1) 33%, rgba(0,212,255,1) 100%);
            width: 25rem;
            border-radius : 40px;
            margin-left: 20px;
            padding: 10px 0 10px 0;
        }

        th {
            background-color: #04AA6D;
            color: white;
        }
        input[type="text"], input[type="password"]{
            background-color: #0f1e26;
            color: white;
            margin: 0;
            box-sizing: border-box;
            width: 97%;
            height: 2rem;
            padding: 8px 15px;
            font-size: 1rem;
            margin: 0;
            border-radius: 0;
            border-top: 0;
            border-left:0;
            border-right: 0;
            border-bottom: 0.5px solid #000;
            box-shadow: rgb(0 0 0 / 8%) 0 -1px;
        }
        .button {
            display: inline-flex;
            align-items: center;
            font-size: 1rem;
            justify-content: center;
            padding: 15px;
            border: 0;
            position: relative;
            overflow: hidden;
            background-color: #0f1e26;
            border-radius: 10rem;
            transition: all 0.02s;
            font-weight: bold;
            cursor: pointer;
            color: rgb(255,255,255);
            z-index: 0;
            box-shadow: 0 0px 7px -5px rgba(0, 0, 0, 0.5);
        }

        .button:hover {
            background: #193240;
            transition: 0.3s ease-in-out;
        }

        .button:active {
            transform: scale(0.97);
        }

</style>
<body>
    <script>
    function myFunction(x) {
    x.classList.toggle("change");
    const mobCont = document.getElementById("mob-cont");

    if (mobCont.classList.contains("menu-open")) {
        mobCont.classList.remove("menu-open"); // Hide menu
    } else {
        mobCont.classList.add("menu-open"); // Show menu
    }

}
    </script>
    <script src="toast.js"></script>
    <ul class = "nav">
            <li class = "nav"><a href="index.php"><button class = "navbut2">Home</button></a></li>
            <li class = "nav"><a href="company.php"><button class = "navbut2">My Company</button></a></li>
            <?php
        if(isset($_SESSION["user"])){
            $conn = mysqli_connect('sql209.infinityfree.com', $DB_User, $DB_Pass, 'if0_37883576_tomicevipezosi');
            if($conn->connect_error){
                die('Connection Failed : '.$conn->connect_error);
            }else{
                $email = $_SESSION['user'];
                $sql = "SELECT firstName FROM user WHERE email = '$email'";
                $res = $conn->query($sql);
                $res = $res -> fetch_assoc();
                echo "<li class = 'nav'><a href='user.php' class='nav'><button class='navbut'>" . $res['firstName'] . "</button></a></li>";
                $conn->close();
            }
        }
        else{
            echo "<li class = 'nav'><a href='login.php'><button class = 'navbut2'>Log-In</button></a></li><li class = 'nav'><a href='register.php'><button class = 'navbut2'>Register</button></a></li>";
        }
        ?>
        </ul>
        <div class="container" onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <div class = "mobile-container" id = "mob-cont">
            <ul class="mobile">
                <!--<a href="" class="close"></a> -->
                <li class="mobile"> <a href="index.php"> <button class = "navbut2">Home</button> </a> </li>
                <li class="mobile"> <a href="company.php"> <button class = "navbut2">My Company</button> </a></li>
                <?php
        if(isset($_SESSION["user"])){
            $conn = mysqli_connect('sql209.infinityfree.com', $DB_User, $DB_Pass, 'if0_37883576_tomicevipezosi');
            if($conn->connect_error){
                die('Connection Failed : '.$conn->connect_error);
            }else{
                $email = $_SESSION['user'];
                $sql = "SELECT firstName FROM user WHERE email = '$email'";
                $res = $conn->query($sql);
                $res = $res -> fetch_assoc();
                echo "<li class = 'mobile'><a href='user.php'><button class='navbut'>" . $res['firstName'] . "</button></a></li>";
                $conn->close();
            }
        }
        else{
            echo "<li class='mobile'> <a href='login.php'> <button class = 'navbut2'>Log-In</button> </a></li>
                <li class='mobile'> <a href='register.php'> <button class = 'navbut2'>Register</button> </a></li>";
        }
        ?>
                
            </ul>
        </div>
        <div id="snackbar"></div>
        <?php
        $conn = mysqli_connect('sql209.infinityfree.com', $DB_User, $DB_Pass, 'if0_37883576_tomicevipezosi');
        if($conn->connect_error)
            die('Connection Failed : '.$conn->connect_error);
        if(isset($_SESSION["user"])){
            $email = $_SESSION['user'];
            $sql = "SELECT * FROM user WHERE email = '$email'";
            $res = $conn->query($sql);
            $res = $res -> fetch_assoc();
            if($res != NULL){
                echo "<form method='POST' class='form2'>";
            echo "<h1 style='text-align: center;'>User Settings</h1>";
            echo "<h2>Ime: <br><input maxlenght='15' name = 'firstName' id='imeinput' type='text' value=". $res['firstName'] ."></input></h2><h2>Prezime: <br><input maxlenght='15' name = 'lastName' type='text' value=". $res['lastName'] ."></input></h2>";
            echo "<h2>Email: <br><input placeholder='New email' maxlenght='50' id='emailinput' type='text' name='email' value=". $res['email'] ."></input></h2>";
            echo "<center><button type='submit' name='submit' class='button' text-align='center'>Save changes</button>";
            echo "</center></form>";
            }
            
        }
        $conn->close();
        ?><br>
        <h1>Investicije</h1>
        <table>
        <tr><th>Ticker</th><th>Broj akcija</th></tr>
        <?php
            $conn = mysqli_connect('sql209.infinityfree.com', $DB_User, $DB_Pass, 'if0_37883576_tomicevipezosi');
            if($conn->connect_error)
                die("Connection failed: " . $conn->connect_error);
            $email = $_SESSION['user'];
            $sql = "SELECT investicije FROM user WHERE email = '$email'";
            $res = $conn->query($sql)->fetch_assoc()["investicije"];
            $investicije = json_decode($res, true);
            foreach ($investicije as $x => $y) {
                echo "<tr><td>$x</td><td>$y</td></tr>";
            }
        ?>
        
        </table>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['user'])) {
                $email = $_POST['email'];
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $conn = mysqli_connect('sql209.infinityfree.com', $DB_User, $DB_Pass, 'if0_37883576_tomicevipezosi');
                if($conn->connect_error){
                    die('Connection Failed : '.$conn->connect_error);
                }else{
                    $sql = "SELECT email FROM user";
                    $result = $conn->query($sql);
                    $user = $_SESSION['user'];
                    if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        if($row["email"] == $email && $row["email"]!=$user){
                            echo "<script>showToast('Email vec postoji')</script>";
                            $conn->close();
                            exit();
                            
                        }
                    }
                    }
                    $sql = "UPDATE user SET firstName = '$firstName', lastName = '$lastName', email = '$email' WHERE email = '$user'";
                    if($conn->query($sql) == TRUE){
                        $_SESSION['user'] = $email;
                        echo "<script>showToast('Promene uspesno sacuvane!')</script>";
                    }
                    else{
                        echo "<script>showToast('Promena neuspesna!')</script>";
                    }
                    $conn->close();
            }
        }
        ?>

</body>
</html>