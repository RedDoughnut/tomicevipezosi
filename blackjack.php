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
        

        h1 {
            margin-top: 0;
        }

        .game-container {
            background-color: #34495e;
            border-radius: 10px;
            padding: 20px;
            color: white;
            text-align: center;
        }

        h1 {
            margin-top: 0;
        }

        #dealer-hand, #player-hand {
            margin-bottom: 20px;
        }

        #dealer-cards, #player-cards {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .card {
            width: 50px;
            height: 75px;
            background-color: white;
            color: black;
            margin: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            border-radius: 5px;
        }

        button {
            margin: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
        }

        button:hover {
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
            <li class = "nav"><a href="index.php" class="nav"><button class = "navbut2">Home</button></a></li>
            <li class = "nav"><a href="company.php" class="nav"><button class = "navbut2">My Company</button></a></li>
            <li class = "nav"><a href="casino.php" class="nav"><button class = "navbut2">Casino</button></a></li>
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
                <li class="mobile"> <a href="index.php" class="nav"> <button class = "navbut2">Home</button> </a> </li>
                <li class="mobile"> <a href="company.php" class="nav"> <button class = "navbut2">My Company</button> </a></li>
                <li class = "nav"><a href="casino.php" class="nav"><button class = "navbut2">Casino</button></a></li>
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
        <?php
            if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST["wager"]) && isset($_SESSION['user'])){
                $conn = mysqli_connect('sql209.infinityfree.com', 'if0_37883576', 'Sigurno0612', 'if0_37883576_tomicevipezosi');
                if($conn->connect_error)
                    die("Error: " . $conn->connect_error);
                $wager = $_POST["wager"];
                $email = $_SESSION['user'];
                $sql = "SELECT balance FROM user WHERE email='$email'";
                $res = mysqli_query($conn, $sql);
                if (!$res)
                    die("Error: " . $conn->connect_error);
                $bal = mysqli_fetch_assoc($res)["balance"];
                if($bal < $wager){
                    die("<h3>Nemaš keš!</h3>");
                }
                $startGame = true;
            }
            if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST["code"]) && isset($_SESSION["user"])){
                $conn = mysqli_connect('sql209.infinityfree.com', 'if0_37883576', 'Sigurno0612', 'if0_37883576_tomicevipezosi');
                if($conn->connect_error)
                    die("Error: " . $conn->connect_error);
                $code = $_POST["code"];
                $wager = $_POST["wager"];
                $email = $_SESSION["user"];
                if($code==-1){
                    $sql = "UPDATE user SET balance=balance-$wager WHERE email='$email'";
                    if(!mysqli_query($conn, $sql))
                        die("Error: " . $conn->connect_error);

                }
                if($code==1){
                    $sql = "UPDATE user SET balance=balance+$wager WHERE email='$email'";
                    if(!mysqli_query($conn, $sql))
                        die("Error: " . $conn->connect_error);
                }
            }
        ?>
        <!-- <form method="POST">
            <input type="text" name="money" placeholder="Amount (T₱)" pattern="[0-9]+"></input>
            <button class="button" type="submit" id="new-game-button">New Game</button>
        </form> -->
        <div class="game-container">
        <h1>Blackjack</h1>
        <div id="dealer-hand">
            <h2>Dealer's Hand: <span id="dealer-score"></span></h2>
            <div id="dealer-cards"></div>
        </div>
        <div id="player-hand">
            <h2>Your Hand: <span id="player-score"></span></h2>
            <div id="player-cards"></div>
        </div>
        <div id="actions">
            <button id="hit-button">Hit</button>
            <button id="stand-button">Stand</button>
        </div>
        <div id="message"></div>
        <form method="POST">
            <input type="text" name="wager" pattern="[0-9]+"></input>
            <button id="new-game-button" type="submit">New Game</button>
        </form>
    </div>
    <!--<script src="blackjack.js?v=<?php echo time(); ?>" type="text/javascript"></script>-->
    <?php if(isset($startGame) && $startGame): ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
        var suits = ['♠', '♥', '♦', '♣'];
        var values = ['2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'];

        let deck = [];
        let playerHand = [];
        let dealerHand = [];
        let wager = 0;
        function createDeck(num) {
            deck = [];
            for (var i = 0; i < num; i++){
                for (let suit of suits) {
                    for (let value of values) {
                        deck.push({ suit, value });
                    }
                }
            }
        }

        function shuffleDeck() {
            for (let i = deck.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [deck[i], deck[j]] = [deck[j], deck[i]];
            }
        }

        function dealCard() {
            return deck.pop();
        }

        function calculateHandValue(hand) {
            let value = 0;
            let hasAce = false;

            for (let card of hand) {
                if (card.value === 'A') {
                    hasAce = true;
                }
                console.log(card.value + card.suit + " : " + getCardValue(card));
                value += getCardValue(card);
            }

            if (hasAce && value + 10 <= 21) {
                value += 10;
            }
            console.log(value);
            return value;
        }

        function getCardValue(card) {
            if (['J', 'Q', 'K'].includes(card.value)) {
                return 10;
            } else if (card.value === 'A') {
                return 1;
            } else {
                return parseInt(card.value);
            }
        }

        function updateUI() {
            console.log('Dealer hand:', dealerHand);
            console.log('Player hand:', playerHand);
            document.getElementById('dealer-cards').innerHTML = dealerHand.map(card => `<div class="card">${card.value}${card.suit}</div>`).join('');
            document.getElementById('player-cards').innerHTML = playerHand.map(card => `<div class="card">${card.value}${card.suit}</div>`).join('');
        
            document.getElementById('dealer-score').textContent = calculateHandValue(dealerHand);
            document.getElementById('player-score').textContent = calculateHandValue(playerHand);
        }

        function startNewGame(WAGER_INPUT) {
            wager = WAGER_INPUT;
            createDeck(6);
            shuffleDeck();
            playerHand = [dealCard(), dealCard()];
            dealerHand = [dealCard(), dealCard()];
            updateUI();
            document.getElementById('message').textContent = '';
            document.getElementById('hit-button').disabled = false;
            document.getElementById('stand-button').disabled = false;
            if (calculateHandValue(playerHand) == 21)
                endGame("You've won!", 1);
        }

        function playerHit() {
            playerHand.push(dealCard());
            console.log('Player hand after hit:', playerHand);
            console.log('Hand value:', calculateHandValue(playerHand));
            var val = calculateHandValue(playerHand);
            updateUI();
            if (val > 21) {
                endGame('You busted! Dealer wins', -1);
            }
        }

        function playerStand() {
            while (calculateHandValue(dealerHand) < 17) {
                dealerHand.push(dealCard());
            }
            updateUI();
        
            const playerValue = calculateHandValue(playerHand);
            const dealerValue = calculateHandValue(dealerHand);
        
            if (dealerValue > 21) {
                endGame('Dealer busted! You win!', 1);
            } else if (playerValue > dealerValue) {
                endGame('You win!', 1);
            } else if (playerValue < dealerValue) {
                endGame('Dealer wins.', -1);
            } else {
                endGame('It\'s a tie!', 0);
            }
        }

        function endGame(message, code) {
            const data = new URLSearchParams();
            document.getElementById('message').textContent = message;
            document.getElementById('hit-button').disabled = true;
            document.getElementById('stand-button').disabled = true;
            data.append("code", code);
            data.append("wager", wager);
            fetch("blackjack.php", {
                method: "post",
                body: data
            })
        }

        //document.getElementById('new-game-button').addEventListener('click', startNewGame);
        document.getElementById('hit-button').addEventListener('click', playerHit);
        document.getElementById('stand-button').addEventListener('click', playerStand);
    });
        document.addEventListener('DOMContentLoaded', function() {
            startNewGame(<?php echo $wager; ?>);
        });
    </script>
<?php endif; ?>
</body>
</html>
