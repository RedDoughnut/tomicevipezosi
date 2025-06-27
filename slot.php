<!DOCTYPE html>
<?php
session_start();
include "SECRETS.php";
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
        .outer-container{
            display: flex;
            background-color: rgb(10,10,10);
            padding: 5rem;
            width: 30rem;
            border-radius: 1.5rem;
            justify-content: space-between;
        }
        .column-container{
            overflow: hidden;
        }
        .column{
            display: flex;
            flex-direction: column;
            gap: 0;
            height: 6rem;
            color: white;
            transform: translateY(0);
            transition: transform 0.5s ease-in-out;
        }
        .digit{
            font-size: 6rem;
            height:6rem;
            line-height: 6rem;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .button {
            cursor: pointer;
            font-size: large;
            font-family: inherit;
            font-weight: bold;
            color: #0011ff;
            background-color: #f8f8fd;
            padding: 0.8em 2.2em;
            border-radius: 50em;
            border: 6px solid #8b93f8;
            box-shadow: 0px 8px #1f35ff;
        }
        .button:active {
            position: relative;
            top: 8px;
            border: 6px solid #646fff;
            box-shadow: 0px 0px;
        }
        .large-container{
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }
        .pop-up{
            visibility: hidden; /*visible*/
            position: absolute;
            width: 80vw;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            text-align: center;
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
    function XClick(){
        const obj = document.getElementById("up");
        obj.classList.remove("showup");
    }
    </script>
    <div id="snackbar"></div>
    <script src="toast.js"></script>
    <ul class = "nav">
            <li class = "nav"><a href="index.php"><button class = "navbut">Home</button></a></li>
            <li class = "nav"><a href="company.php"><button class = "navbut2">My Company</button></a></li>
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
            $conn = mysqli_connect('sql209.infinityfree.com', $DB_User, $DB_Pass, 'if0_37883576_tomicevipezosi');
            if($conn->connect_error){
                die('Connection Failed : '.$conn->connect_error);
            }else{
                $email = $_SESSION['user'];
                $sql = "SELECT firstName, balance FROM user WHERE email = '$email'";
                $res = $conn->query($sql);
                $res = $res -> fetch_assoc();
                echo "<li class = 'mobile'><a href='user.php'><button class='navbut2'>" . $res['firstName'] . "</button></a></li>";
                echo "<li class = 'mobile' style='font-size: 2rem;'>" . $res['balance'] . "T₱</li>";
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
        <div class="large-container">
            <input type="text" id="wager" placeholder="Wager">
            <div class="outer-container">
            <div class="column-container">
            <div class="column">
                <div class="digit">0</div>
                <div class="digit">1</div>
                <div class="digit">2</div>
                <div class="digit">3</div>
                <div class="digit">4</div>
                <div class="digit">5</div>
                <div class="digit">6</div>
                <div class="digit">7</div>
                <div class="digit">8</div>
                <div class="digit">9</div>
            </div>
            </div>
            <div class="column-container">
            <div class="column">
                <div class="digit">0</div>
                <div class="digit">1</div>
                <div class="digit">2</div>
                <div class="digit">3</div>
                <div class="digit">4</div>
                <div class="digit">5</div>
                <div class="digit">6</div>
                <div class="digit">7</div>
                <div class="digit">8</div>
                <div class="digit">9</div>
            </div>
            </div>
            <div class="column-container">
            <div class="column">
                <div class="digit">0</div>
                <div class="digit">1</div>
                <div class="digit">2</div>
                <div class="digit">3</div>
                <div class="digit">4</div>
                <div class="digit">5</div>
                <div class="digit">6</div>
                <div class="digit">7</div>
                <div class="digit">8</div>
                <div class="digit">9</div>
            </div>
            </div>
            <div class="column-container">
            <div class="column">
                <div class="digit">0</div>
                <div class="digit">1</div>
                <div class="digit">2</div>
                <div class="digit">3</div>
                <div class="digit">4</div>
                <div class="digit">5</div>
                <div class="digit">6</div>
                <div class="digit">7</div>
                <div class="digit">8</div>
                <div class="digit">9</div>
            </div>
            </div>
            <div class="column-container">
            <div class="column">
                <div class="digit">0</div>
                <div class="digit">1</div>
                <div class="digit">2</div>
                <div class="digit">3</div>
                <div class="digit">4</div>
                <div class="digit">5</div>
                <div class="digit">6</div>
                <div class="digit">7</div>
                <div class="digit">8</div>
                <div class="digit">9</div>
            </div>
            </div>
        </div>
        <div class="pop-up" id="pop-up">
            <h1 id="nagrada"></h1>
        </div>
        <script src="slot.js"></script>
        <script>
            function getRandomInt(max) {
                return Math.floor(Math.random() * max);
            }
            function sleep(ms) {
                return new Promise(resolve => setTimeout(resolve, ms));
            }
            async function buttonClick(){
                const wager = parseInt(document.getElementById("wager").value);
                if(isNaN(wager)){
                    toast("Napišite validan broj!");
                }
                else{
                    //createCookie("wager", wager, 1);
                    var rand1 = getRandomInt(10);
                    var rand2 = getRandomInt(10);
                    var rand3 = getRandomInt(10);
                    var rand4 = getRandomInt(10);
                    var rand5 = getRandomInt(10);
                    var randarray = [rand1, rand2, rand3, rand4, rand5];
                    var counts = {};
                    randarray.forEach(function (x) { counts[x] = (counts[x] || 0) + 1; });
                    spin(0, rand1 + 1);
                    spin(1, rand2 + 1);
                    spin(2, rand3 + 1);
                    spin(3, rand4 + 1);
                    spin(4, rand5 + 1);
                    var maks1 = 0;
                    var maks2 = 0;
                    Object.values(counts).forEach(function(x) {
                        if (x > maks1) {
                            maks2 = maks1;
                            maks1 = x;
                        } else if (x > maks2) {
                            maks2 = x;
                        }
                    });

                    if(maks1===5){
                        document.getElementById("nagrada").innerText = "5 Istih! 10,000X !!!";
                        await sleep(2000);
                        document.getElementById("pop-up").style.visibility = "visible";
                    }
                    else if((rand5===rand4+1 && rand4===rand3+1 && rand3===rand2+1 && rand2===rand1+1) || (rand5===rand4-1 && rand4===rand3-1 && rand3===rand2-1 && rand2===rand1-1)){
                        document.getElementById("nagrada").innerText = "Straight! 8,300X !!!";
                        await sleep(2000);
                        document.getElementById("pop-up").style.visibility = "visible";
                    }
                    else if(maks1===4){
                        document.getElementById("nagrada").innerText = "4 Istih! 220X !!!";
                        await sleep(2000);
                        document.getElementById("pop-up").style.visibility = "visible";
                    }
                    else if(maks1===3 && maks2===2){
                        document.getElementById("nagrada").innerText = "Full house! 110X !!!";
                        await sleep(2000);
                        document.getElementById("pop-up").style.visibility = "visible";
                    }
                    else if(maks1===3){
                        document.getElementById("nagrada").innerText = "Triling! 14X !!!";
                        await sleep(2000);
                        document.getElementById("pop-up").style.visibility = "visible";
                    }
                    else if(maks1===2 && maks2===2){
                        document.getElementById("nagrada").innerText = "Dva para! 10X !!!";
                        await sleep(2000);
                        document.getElementById("pop-up").style.visibility = "visible";
                    }
                    else if(maks1===2){
                        document.getElementById("nagrada").innerText = "Jedan par! 2X !!!";
                        await sleep(2000);
                        document.getElementById("pop-up").style.visibility = "visible";
                    }
                    spin(0, 1);
                    spin(1, 1);
                    spin(2, 1);
                    spin(3, 1);
                    spin(4, 1);
                }
            }
            // function createCookie(name, value, days) {
            //     var expires;
            //     if (days) {
            //         var date = new Date();
            //         date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            //         expires = "; expires=" + date.toGMTString();
            //     }
            //     else {
            //         expires = "";
            //     }
            //     document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
            // }
        </script>
        <button class="button" id="spin" onclick="buttonClick();">Spin!</button>
        
        <?php
        function a($wager){
            $DB_User = $GLOBALS['DB_User'];
            $DB_Pass = $GLOBALS['DB_Pass'];
            $conn = mysqli_connect('sql209.infinityfree.com', $DB_User, $DB_Pass, 'if0_37883576_tomicevipezosi');
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $rand1 = mt_rand(1, 9);
            $rand2 = mt_rand(1, 9);
            $rand3 = mt_rand(1, 9);
            $rand4 = mt_rand(1, 9);
            $rand5 = mt_rand(1, 9);
            ?>
            <script>
                resetPosition();
                spin(0, <?php echo $rand1;?>);
                spin(1, <?php echo $rand2;?>);
                spin(2, <?php echo $rand3;?>);
                spin(3, <?php echo $rand4;?>);
                spin(4, <?php echo $rand5;?>);
                
            </script>
            <?php
        }
        ?>
    </div>
</body>
</html>
