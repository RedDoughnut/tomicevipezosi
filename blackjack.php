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
        
        #cont {
            background-color: #34495e;
            border-radius: 10px;
            padding: 20px;
            color: white;
            visibility: hidden;
            text-align: center;
        }

        h1 {
            margin-top: 0;
        }

        .hidden {
            display: none;
        }
        .card {
            display: inline-block;
            padding: 10px;
            margin: 5px;
            border: 1px solid black;
            border-radius: 5px;
        }
        .game-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .button {
            margin: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
        }

        .button:hover {
            background-color: #2980b9;
        }

        #message {
            margin-top: 20px;
            font-weight: bold;
            font-size: 18px;
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
</style>
    <script src="blackjack.js"></script>
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
            $conn = mysqli_connect('sql209.infinityfree.com', 'if0_37883576', 'Sigurno0612', 'if0_37883576_tomicevipezosi');
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
        <?php
            if($_SERVER['REQUEST_METHOD']=="POST"){
                    // Get JSON data
                    $data = json_decode(file_get_contents('php://input'), true);
                    
                    // Validate data
                    if (isset($data['balance']) && isset($data['result']) && isset($data['bet']) && isset($data['winnings'])) {      
                        $_SESSION['balance'] = $data['balance'];
                        
                    }
            }
            if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST["money"])){
                $id = $_SESSION['user'];
                $conn = mysqli_connect('sql209.infinityfree.com', 'if0_37883576', 'Sigurno0612', 'if0_37883576_tomicevipezosi');
                if($conn->connect_error)
                    die('Connection Failed : '.$conn->connect_error);
                $sql = "SELECT balance FROM user WHERE id = $id";
                $bal = mysqli_query($conn, $sql)->fetch_assoc()['balance'];
                if($_POST["money"]>$bal)
                    die("<p>Nemaš keš!</p>");
                $_SESSION['BLACKJACK_AMOUNT'] = $_POST["money"];
                echo "<script>
                    startNewGame();
                </script>"; 
            }
        ?>
        <!-- <form method="POST">
            <input type="text" name="money" placeholder="Amount (T₱)" pattern="[0-9]+"></input>
            <button class="button" type="submit" id="new-game-button">New Game</button>
        </form> -->
        <div class="game-container">
        <div id="balance-display">Balance: $<span id="balance">1000</span></div>
        
        <div id="bet-section">
            <input type="number" id="bet-amount" placeholder="Enter bet amount">
            <button onclick="startGame()">Place Bet</button>
        </div>

        <div id="game-section" class="hidden">
            <div id="dealer-hand">
                <h2>Dealer's Hand</h2>
                <div id="dealer-cards"></div>
                <div>Score: <span id="dealer-score">0</span></div>
            </div>

            <div id="player-hand">
                <h2>Your Hand</h2>
                <div id="player-cards"></div>
                <div>Score: <span id="player-score">0</span></div>
            </div>

            <div id="game-buttons" class="hidden">
                <button onclick="hit()">Hit</button>
                <button onclick="stand()">Stand</button>
            </div>

            <div id="game-message"></div>
        </div>
    </div>
        
    </div>
    <script src="blackjack.js"></script>

</body>
</html>
