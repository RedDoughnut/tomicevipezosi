<!DOCTYPE html>
<?php
session_start();
include "SECRETS.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<html>

<head>
    <meta charset="utf-8">
    <title>Tomićevi Pezosi</title>
    <link rel="stylesheet" href="nav.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Tomicevi Pezosi" />
    <meta property="og:description" content="Ovo je berza sa valutom Tomicevih pezosa!" />
    <meta property="og:url" content="https://tomicevipezosi.rf.gd" />
    <meta property="og:image" content="https://i.imgur.com/B528KrH.png" />
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        *{
            font-family: 'Poppins', sans-serif;
            margin: 0;
            box-sizing: border-box;
        }
        /*
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            margin: 10px;

        }

        td,th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }*/
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
           color: rgb(3, 119, 76);
        } 
        a.nav {
           display: inline;
           font-size: 2rem;
           text-decoration: none;
           color: black;
           margin: 10px;
        } 
        ul{
            margin: 20px;
        }
        a:hover{
            color:rgb(0, 117, 74);
            transition: 0.3s ease-in-out;
        }
        p{
            font-size: 1.3rem;
            margin: 20px 20px 20px 30px;
        }
        h1, h2{
            margin: 20px 20px 20px 30px;
        }
        @media only screen and (max-width:775px){
            table{
                margin: 20px 20px 20px 10px;
            }
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


        th {
            background-color:rgb(3, 119, 76);
            color: white;
        }
        .up{
            display: flex;
            justify-content: space-between;
            width: 100%;
            background-color: #4a4a4a;
            /*border-bottom: 1px solid white;*/
            color: white;
            padding: 10px;
            height: 0;
            font-size: 0;
            visibility: hidden;
        }
        .showup{
            height: 3rem;
            font-size: 1rem;
            visibility: visible;
        }
        #closebut{
            border: 0;
            padding: 0;
            background-color: rgba(255,255,255,0);
        }
        #cl{

        }
</style>
<body>
    <script>
        function a(s) {
            document.getElementById('diff').innerText = "Ažurirano pre: " + s + "s"; 
        }
    </script>
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
    function XClick(){
        const obj = document.getElementById("up");
        obj.classList.remove("showup");
    }
    </script>
    <script src="toast.js"></script>
    <ul class = "nav">
            <li class = "nav"><a href="index.php" class="nav"><button class = "navbut">Home</button></a></li>
            <li class = "nav"><a href="company.php" class="nav"><button class = "navbut2">My Company</button></a></li>
            <li class = "nav"><a href="casino.php" class="nav"><button class = "navbut2">Casino</button></a></li>
            <?php
        if(isset($_SESSION["user"])){
            $conn = mysqli_connect('sql209.infinityfree.com', $DB_User, $DB_Pass, 'if0_37883576_tomicevipezosi');
            if($conn->connect_error){
                die('Connection Failed : '.$conn->connect_error);
            }else{
                $email = $_SESSION['user'];
                $sql = "SELECT firstName, balance FROM user WHERE email = '$email'";
                $res = $conn->query($sql);
                $res = $res -> fetch_assoc();
                echo "<li class = 'nav'><a href='user.php' class='nav'><button class='navbut2'>" . $res['firstName'] . "</button></a></li>";
                echo "<li class = 'nav' style='font-size: 2rem;'>" . $res['balance'] . "T₱</li>";
              
                $conn->close();
            }
        }
        else{
            echo "<li class = 'nav'><a href='login.php' class='nav'><button class = 'navbut2'>Log-In</button></a></li><li class = 'nav'><a href='register.php' class='nav'><button class = 'navbut2'>Register</button></a></li>";
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
                <li class="mobile"> <a href="index.php" class="nav"> <button class = "navbut">Home</button> </a> </li>
                <li class="mobile"> <a href="company.php" class="nav"> <button class = "navbut2">My Company</button> </a></li>
                <li class = "nav"><a href="casino.php" class="nav"><button class = "navbut2">Casino</button></a></li>
                <?php
        if(isset($_SESSION["user"])){
            $conn = mysqli_connect('sql209.infinityfree.com', $DB_User, $DB_Pass, 'if0_37883576_tomicevipezosi');
            if($conn->connect_error){
                die('Connection Failed : '.$conn->connect_error);
            }else{
                $email = $_SESSION['user'];
                $sql = "SELECT firstName, balance FROM user WHERE email = '$email'";
                $res = $conn->query($sql);
                $res = $res -> fetch_assoc();
                echo "<li class = 'mobile'><a href='user.php' class='nav'><button class='navbut2'>" . $res['firstName'] . "</button></a></li>";
                echo "<li class = 'mobile' style='font-size: 2rem;'>" . $res['balance'] . "T₱</li>";
                $conn->close();
            }
        }
        else{
            echo "<li class='mobile'> <a href='login.php' class='nav'> <button class = 'navbut2'>Log-In</button> </a></li>
                <li class='mobile'> <a href='register.php' class='nav'> <button class = 'navbut2'>Register</button> </a></li>";
        }
        ?>
                
            </ul>
        </div>
        <div id="snackbar"></div>

        <!-- DOVRSITI POSLE -->
</body>
</html>