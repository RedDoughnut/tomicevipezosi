<!DOCTYPE html>
<?php
session_start();
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
           color: #04AA6D;
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
            background-color: #04AA6D;
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
            <li class = "nav"><a href="index.php"><button class = "navbut">Home</button></a></li>
            <li class = "nav"><a href="company.php"><button class = "navbut2">My Company</button></a></li>
            <?php
        if(isset($_SESSION["user"])){
            $conn = mysqli_connect('sql209.infinityfree.com', 'if0_37883576', 'Sigurno0612', 'if0_37883576_tomicevipezosi');
            if($conn->connect_error){
                die('Connection Failed : '.$conn->connect_error);
            }else{
                $email = $_SESSION['user'];
                $sql = "SELECT firstName, balance FROM user WHERE email = '$email'";
                $res = $conn->query($sql);
                $res = $res -> fetch_assoc();
                echo "<li class = 'nav'><a href='user.php' class='nav'><button class='navbut2'>" . $res['firstName'] . "</button></a></li>";
                echo "<li class = 'nav' style='font-size: 1rem;'>" . $res['balance'] . "T₱</li>";
              
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
                <li class="mobile"> <a href="index.php"> <button class = "navbut">Home</button> </a> </li>
                <li class="mobile"> <a href="company.php"> <button class = "navbut2">My Company</button> </a></li>
                <?php
        if(isset($_SESSION["user"])){
            $conn = mysqli_connect('sql209.infinityfree.com', 'if0_37883576', 'Sigurno0612', 'if0_37883576_tomicevipezosi');
            if($conn->connect_error){
                die('Connection Failed : '.$conn->connect_error);
            }else{
                $email = $_SESSION['user'];
                $sql = "SELECT firstName, balance FROM user WHERE email = '$email'";
                $res = $conn->query($sql);
                $res = $res -> fetch_assoc();
                echo "<li class = 'mobile'><a href='user.php'><button class='navbut2'>" . $res['firstName'] . "</button></a></li>";
                echo "<li class = 'mobile'>" . $res['balance'] . "T₱</li>";
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
        <div class="up showup" id="up"><span>Pogledajte naše <a href="tos.php">uslove korišćenja</a>!</span><a style="text-align: right;font-size:1.2rem;cursor:pointer;" onclick="XClick();">✕</a></div>
        <div id="snackbar"></div>
    <h1>Lista kompanija</h1>
    <h2 id="diff"></h2>
    <table>
        <?php
            $conn = mysqli_connect('sql209.infinityfree.com', 'if0_37883576', 'Sigurno0612', 'if0_37883576_tomicevipezosi');
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
    <?php
    $sql = "SELECT time FROM last_updated WHERE id=1";
    $conn = mysqli_connect('sql209.infinityfree.com', 'if0_37883576', 'Sigurno0612', 'if0_37883576_tomicevipezosi');
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
                $menjanje = 3;
                $cenaAkcije = $row["value"];

                for ($i = 0; $i < $hours; $i++) {
                    $rnd = mt_rand(-10000 * $menjanje, 10000 * $menjanje) / 10000;
                    if ($cenaAkcije <= 0) {
                        $diwhihwdh = 0;
                        $sql = "UPDATE `kompanija` SET `value`=$diwhihwdh WHERE `id`=" . $row['id'];
                        if (!mysqli_query($conn, $sql)) {
                            echo "Error: " . mysqli_error($conn);
                        }
                        break;
                    }
                    $cenaAkcije += ($rnd * $menjanje) / 100;
                }
                $sql = "UPDATE `kompanija` SET `value`=$cenaAkcije WHERE `id`=" . $row['id'];
                mysqli_query($conn, $sql);

            }
        }
        
        
    }
?>


</body>
</html>
