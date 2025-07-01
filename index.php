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
        <div class="up showup" id="up"><span>Pogledajte naše <a href="tos.php">uslove korišćenja</a>!</span><a style="text-align: right;font-size:1.2rem;cursor:pointer;" onclick="XClick();">✕</a></div>
        <div id="snackbar"></div>
        <center>
        <div>
    <h1>Lista kompanija</h1>
    <h2 id="diff"></h2>
    <table>
        <?php
            $conn = mysqli_connect('sql209.infinityfree.com', $DB_User, $DB_Pass, 'if0_37883576_tomicevipezosi');
            mysqli_set_charset($conn, "utf8");
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $sql = "SELECT ticker, name, id, value FROM kompanija ORDER BY value DESC";//LIMIT 5

        $result = $conn->query($sql);
        $p = "";
        if($result->num_rows > 0){
            echo "<table>";
            echo "<tr><th>Ticker</th><th>Name</th><th>Stock Price</th><th>Details</th></tr>";
            $i = 1;
            while($row = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>" . $row["ticker"] . "</td>" . "<td>" . htmlspecialchars($row["name"]) . "</td><td>" . $row["value"] . "</td><td><a href='/kompanija.php?id=" . $row["id"] . "'>Details</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        $result = $p;
        
        $conn->close();
    }

?>
    </table>    
    </div>
    </center>
    <?php
    function newStock($current_price, $mu = -0.001, $sigma = 0.01) {
        $rand = rand_normal(); // standard normal
        $change = ($mu - 0.5 * $sigma ** 2) + $sigma * $rand;
        $new_price = $current_price * exp($change);
        return round(max(0.01, $new_price), 4); // minimalna cena 0.01
    }
    function rand_normal($mean = 0, $stddev = 1) {
        $u = 1 - mt_rand() / mt_getrandmax();
        $v = 1 - mt_rand() / mt_getrandmax();
        $z = sqrt(-2.0 * log($u)) * cos(2.0 * M_PI * $v);
        return $z * $stddev + $mean;
    }
    $sql = "SELECT time FROM last_updated WHERE id=1";
    $conn = mysqli_connect('sql209.infinityfree.com', $DB_User, $DB_Pass, 'if0_37883576_tomicevipezosi');
    mysqli_set_charset($conn, "utf8");
    $time_rn = time();
    $time_interval = 3600;
    $time = mysqli_query($conn, $sql)->fetch_assoc()['time'];
    $hours = floor(($time_rn-$time)/$time_interval);
    //echo "<h1>" . $time_rn - $time . "</h1>";
    echo "<script>a(". ($time_rn-$time) .")</script>";
    if($hours>0){
        $time_lost = ($time_rn-$time)%$time_interval;
        $final_time = $time_rn - $time_lost;
        $sql = "UPDATE `last_updated` SET `time`=$final_time WHERE `id`=1";
        mysqli_query($conn, $sql);
        $sql = "SELECT * FROM kompanija";
        $res = mysqli_query($conn, $sql);

        if($res->num_rows>0){
            while($row = $res->fetch_assoc()){
                $cenaAkcije = $row["value"];
                $id = $row["id"];
                $sql = "SELECT `history` FROM kompanija WHERE `id`=$id";
                $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
                $historyDATA = $result["history"];
                $history = json_decode($historyDATA, true); 
                for ($i = 0; $i < $hours; $i++) {
                    $cenaAkcije = newStock($cenaAkcije);
                    $zaokruzenaCena = number_format($cenaAkcije, 2, '.', '');
                    $history[] = $zaokruzenaCena;  
                    if (count($history) > 72) {
                        array_shift($history);
                    }
                }
                $historyJson = mysqli_real_escape_string($conn, json_encode($history, JSON_PRESERVE_ZERO_FRACTION));
                $sql = "UPDATE `kompanija` SET `history` = '$historyJson' WHERE `id` = $id";
                if(!mysqli_query($conn, $sql)){
                    echo "<h1>Error: " . mysqli_error($conn) . "</h1>";
                }
                

                $sql = "UPDATE `kompanija` SET `value`=$cenaAkcije WHERE `id`=" . $row['id'];
                if($cenaAkcije>0)
                    mysqli_query($conn, $sql);

            }
        }
        
        
    }
?>


</body>
</html>
