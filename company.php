<?php session_start(); ?>
<!DOCTYPE html>
<html>
     <head>
        <title>Kompanija</title>
        <link rel="stylesheet" href="nav.css">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     </head>
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        *{
            font-family: 'Poppins', sans-serif;
            padding: 0;
            margin: 0;
            box-sizing: border-box;

        }
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
        }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        *{
            font-family: 'Poppins', sans-serif;
            padding: 0;
            margin: 0;
            box-sizing: border-box;

        }
        
        input[type="text"], input[type="password"]{
            box-sizing: border-box;
            width: 16rem;
            height: 2rem;
            padding: 8px 15px;
            font-size: 1rem;
            margin: 0;
            border-radius: 0;
            border-top: 0;
            border-left:0;
            border-right: 0;
            border-bottom: 0.5px solid lightgray;
            box-shadow: rgb(0 0 0 / 8%) 0 -1px;
        }
        input[type="submit"] {
            background-color: #0066ff;
            color: #fff;
            border: 0;
            border-radius: 24px;
            padding: 10px 16px;
            font-size: 1rem;
            font-weight: 600;
            width: 16rem;
            margin: 20px 0 10px 0;
            cursor: pointer;
            transition: background-color .3s ease;
        }

        input[type="submit"]:hover {
            background-color: #005ce6;
        }
        div.inputs{
            border-radius: 1rem;
            width:16rem;
        }
        ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
         }

        li {
            display: inline;
        }
        a.nav {
           display: inline;
           font-size: 2rem;
           text-decoration: none;
           color: black;
           margin: 10px;
        } 
        a {
           display: inline;
           font-size: 1rem;
           text-decoration: none;
           color: #04AA6D;
           margin: 10px;
        } 
        ul{
            margin: 10px;
        }
        a:hover{
            color: rgb(181, 181, 181);
            transition: 0.5s ease-in-out;
        }
        p{
            font-size: 1.3rem;
            margin: 20px 20px 20px 30px;
        }
        a{
            font-size: 1.3rem;
        }
        h1{
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

        h2{
            margin-left: 30px;
        }
        th {
          background-color: #04AA6D;
          color: white;
        }
        textarea{
            resize: none;
            margin-left: 30px;
            height: 15rem;
            font-size: 1rem;
            width: 25rem;
            background color: rgba(255,255,255,1);
            border-radius: 1rem;
            padding: 10px;
        }
        textarea:focus{
            outline: none;
        }
        .button {
            display: inline-flex;
            align-items: center;
            font-size: 1rem;
            justify-content: center;
            padding: 15px;
            border: 0;
            margin-left:30px;
            position: relative;
            overflow: hidden;
            border-radius: 10rem;
            transition: all 0.02s;
            font-weight: bold;
            cursor: pointer;
            color: rgb(37, 37, 37);
            z-index: 0;
            box-shadow: 0 0px 7px -5px rgba(0, 0, 0, 0.5);
        }

        .button:hover {
            background: rgb(193, 228, 248);
            color: rgb(33, 0, 85);
        }

        .button:active {
            transform: scale(0.97);
        }

        .hoverEffect {
            position: absolute;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1;
        }

        .hoverEffect div {
            background: rgb(222, 0, 75);
            background: linear-gradient(
                90deg,
                rgba(222, 0, 75, 1) 0%,
                rgba(191, 70, 255, 1) 49%,
                rgba(0, 212, 255, 1) 100%
            );
            border-radius: 40rem;
            width: 10rem;
            height: 10rem;
            transition: 0.4s;
            filter: blur(20px);
            animation: effect infinite 3s linear;
            opacity: 0.5;
        }

        .button:hover .hoverEffect div {
        width: 8rem;
        height: 8rem;
        }

        @keyframes effect {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
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
            <li class = "nav"><a href="company.php"><button class = "navbut">My Company</button></a></li>
            <?php
        if(isset($_SESSION["user"])){
            $conn = mysqli_connect('sql209.infinityfree.com', 'if0_37883576', 'Sigurno0612', 'if0_37883576_tomicevipezosi');
            if($conn->connect_error){
                die('Connection Failed : '.$conn->connect_error);
            }else{
                $email = $_SESSION['user'];
                $sql = "SELECT firstName FROM user WHERE email = '$email'";
                $res = $conn->query($sql);
                $res = $res -> fetch_assoc();
                echo "<li class = 'nav'><a href='user.php' class='nav'><button class='navbut2'>" . $res['firstName'] . "</button></a></li>";
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
                <li class="mobile"> <a href="company.php"> <button class = "navbut">My Company</button> </a></li>
                <?php
        if(isset($_SESSION["user"])){
            $conn = mysqli_connect('sql209.infinityfree.com', 'if0_37883576', 'Sigurno0612', 'if0_37883576_tomicevipezosi');
            if($conn->connect_error){
                die('Connection Failed : '.$conn->connect_error);
            }else{
                $email = $_SESSION['user'];
                $sql = "SELECT firstName FROM user WHERE email = '$email'";
                $res = $conn->query($sql);
                $res = $res -> fetch_assoc();
                echo "<li class = 'mobile'><a href='user.php'><button class='navbut2'>" . $res['firstName'] . "</button></a></li>";
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
        $conn = mysqli_connect('sql209.infinityfree.com', 'if0_37883576', 'Sigurno0612', 'if0_37883576_tomicevipezosi');
        mysqli_set_charset($conn, "utf8");
        if($conn->connect_error){
            die('Connection Failed : '.$conn->connect_error);
        }else{
            if(!isset($_SESSION['user'])){
                echo "<p><a href='login.php'>Nisi ulogovan!</a></p>";
                $conn->close();
            }
            else{
                $email = $_SESSION['user'];
                $sql = "SELECT id FROM user WHERE email = '$email'";
                $res = $conn->query($sql);
                $res = $res->fetch_assoc();
                $id = $res['id'];

                $sql = "SELECT name, ticker, investicije, value, description, stocks_available, stocks_sold FROM kompanija WHERE user_id = '$id'";
                $res = $conn->query($sql);  
                if($res->num_rows === 0){
                    die("<p>Nemas kompaniju! <a href='napravi_kompaniju.php'>Napravi kompaniju</a></p>");
                }
                $kompanija = $res->fetch_assoc();
                echo "<h1>" . $kompanija["name"] . " (" . $kompanija["ticker"] . ")</h1>";
                $arr = json_decode($kompanija["investicije"], true);
                echo "<h1>Cena Akcije: " . $kompanija["value"] .  "T₱ (0.05%)</h1>";
                echo "<h2>Broj dostupnih akcija: " . $kompanija["stocks_available"] - $kompanija["stocks_sold"] . "</h2>";
                echo "<p>Deskripcija (max 400 karaktera): </p>";
                echo "<form method = 'POST' action = ''>
                      <textarea placeholder='Lorem ipsum dolor sit amet ...' name='description' maxlength=400>" . $kompanija["description"] . "</textarea><br>
                      <button class='button' name='action' value='clicked'>
                      Save
                      <div class='hoverEffect'>
                      <div></div>
                      </div>
                      </button>
                      </form>";
                if(empty($arr)){
                    echo "<p>Nema investicija!</p>";
                }
                else{
                    echo "<table><tr><th>Ime</th><th>Br. Akcija</th><th>Vrednost</th></tr>";
                    foreach($arr as $key => $value){
                        echo "<tr><td>" . $key . "</td><td>" . $value/0.0005 . "(" . $value*100 . "%)</td><td>" . $value*$kompanija["value"]*2000 . " T₱</td></tr>";
                    }
                    echo "</table>";
                }
            }
        }
        ?>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $conn = mysqli_connect('sql209.infinityfree.com', 'if0_37883576', 'Sigurno0612', 'if0_37883576_tomicevipezosi');
                mysqli_set_charset($conn, "utf8");
                if($conn->connect_error){
                    die('Connection Failed : '.$conn->connect_error);
                }
                else{
                    $email = $_SESSION['user'];
                    $sql = "SELECT id FROM user WHERE email = '$email'";
                    $res = $conn->query($sql);
                    $res = $res->fetch_assoc();
                    $id = $res['id'];
                    $desc = $_POST['description'];
                    echo "<h1>" . $desc . "</h1>";
                    $sql = "UPDATE kompanija SET description = '$desc' WHERE user_id = '$id'";
                    if($conn->query($sql)){
                        echo "<script>showToast('Successfully saved!')</script>";
                    }
                    else{
                        die($conn->connect_error);
                    }
                    $conn->close();
                }
            }
            
        ?>
    </body>


</html>