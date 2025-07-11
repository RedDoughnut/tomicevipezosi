<!DOCTYPE html>
<?php
session_start();
include "SECRETS.php";
$ulogovan = isset($_SESSION["user"]) ? "true" : "false";
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
            display: inline;
            font-size: 1.3rem;
        }
        h1, h2{
            margin: 20px 20px 20px 30px;
        }
        .outer-container{
            display: flex;
            background-color: rgb(10,10,10);
            padding: 5rem;
            width: min(30rem, 90vw);
            border-radius: 1.5rem;
            justify-content: space-between;
        }
        @media only screen and (max-width: 851px){
            .outer-container{
                padding: 1rem;
            }
            .digit{
                font-size: 4rem;
            }
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
            padding: 5rem;
            border-radius: 15px;
            background-color: rgba(0,0,0,1);
        }
        /* Hide the default checkbox */
.container input {
 position: absolute;
 opacity: 0;
 cursor: pointer;
 height: 0;
 width: 0;
 border-radius: 5px;
}

.container {
 display: inline;
 position: relative;
 cursor: pointer;
 font-size: 20px;
 user-select: none;
 border-radius: 5px;
}

/* Create a custom checkbox */
.checkmark {
 position: relative;
 top: 0;
 left: 0;
 height: 1.3em;
 width: 1.3em;
 background-color: #ccc;
 border-radius: 5px;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
 transition: all 0.2s;
 opacity: 1;
 background-image: linear-gradient(45deg, rgb(100, 61, 219) 0%, rgb(217, 21, 239) 100%);
}

.container input ~ .checkmark {
 transition: all 0.2s;
 opacity: 1;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
 content: "";
 position: absolute;
 opacity: 0;
 transition: all 0.2s;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
 opacity: 1;
 transition: all 0.2s;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
 left: 0.45em;
 top: 0.25em;
 width: 0.25em;
 height: 0.5em;
 border: solid white;
 border-width: 0 0.15em 0.15em 0;
 transform: rotate(45deg);
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
            <li class = "nav"><a href="index.php" class="nav"><button class = "navbut2">Home</button></a></li>
            <li class = "nav"><a href="company.php" class="nav"><button class = "navbut2">My Company</button></a></li>
            <li class = "nav"><a href="casino.php" class="nav"><button class = "navbut">Casino</button></a></li>
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
                echo "<li class = 'nav' style='font-size: 2rem;' id='balLabel'>" . $res['balance'] . "T₱</li>";
              
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
                <li class = "nav"><a href="casino.php" class="nav"><button class = "navbut">Casino</button></a></li>
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
                $BAL = $res['balance'];
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
        <div class="large-container">
            <h2>↓Statistike iz sesije↓</h2>
            <?php
                if(isset($_SESSION["user"])){
                    echo "<p style='font-size: 2rem;' id='balLABEL2'>$BAL T₱</p>";
                }
            ?>
            <input type="text" id="wager" placeholder="Wager" style="font-size: 1.6rem;width: min(30rem, 80vw)">
            
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
        <br>
            
        <div class="pop-up" id="pop-up">
            <h1 id="nagrada"></h1>
        </div>
        <script src="slot.js"></script>
        <button class="button" id="spin" onclick="buttonClick();">Spin!</button>
        <span style="display: inline">
            <p style="font-size: 1.8rem">Autospin</p>
            <label class="container">
                <input type="checkbox" id="autospin">
                <div class="checkmark"></div>
            </label>
        </span>
        <h1>Kombinacije</h1>
        <h2>1. Five of a kind - 5,000X</h2>
        <p>5 istih brojeva: 11111, 99999, ...</p>
        <h2>2. Straight - 250X</h2>
        <p>5 uzastopnih brojeva: 12345, 65432, ...</p>
        <h2>3. Four of a kind - 25X</h2>
        <p>4 istih brojeva: 11116, 67666, ...</p>
        <h2>4. Full House - 10X</h2>
        <p>3 istih i 2 istih brojeva: 67677, 77799, ...</p>
        <h2>5. Triling - 2X</h2>
        <p>3 istih brojeva: 67696, 66612, ...</p>
        <h2>6. Dva para - 1.2X</h2>
        <p>2 para istih brojeva: 66991, 17671, ...</p>
        <h2>7. Jedan par - 0.5X</h2>
        <p>2 istih brojeva: 88709, 19481, ...</p>
        <br>
        <h1>Statistike sesije</h1>
        <p>Five of a kind: <span id="fiveofakind">0</span></p>
        <p>Straight: <span id="straight">0</span></p>
        <p>Four of a kind: <span id="fourofakind">0</span></p>
        <p>Full House: <span id="fullhouse">0</span></p>
        <p>Triling: <span id="triling">0</span></p>
        <p>Dva para: <span id="dvapara">0</span></p>
        <p>Jedan par: <span id="jedanpar">0</span></p>
        <p>Ukupno odigranih: <span id="ukupno">0</span></p>
        <script>
            function getRandomInt(max) {
                return Math.floor(Math.random() * max);
            }
            function sleep(ms) {
                return new Promise(resolve => setTimeout(resolve, ms));
            }
            function spinWrapper(index, target) {
                return new Promise((resolve) => {
                    spin(index, target); 

                    setTimeout(() => {
                    resolve(); 
                    }, 1500);
                });
            }
            async function spinAll(num1, num2, num3, num4, num5) {
                await Promise.all([
                    spinWrapper(0, num1),
                    spinWrapper(1, num2),
                    spinWrapper(2, num3),
                    spinWrapper(3, num4),
                    spinWrapper(4, num5),
                ]);
            }
            async function getBalance() {
                const res = await fetch("get_balance");
                const balance = await res.text();
                return balance;
            }
            async function buttonClick(){
                var ulogovan = <?= $ulogovan ?>;
                if(ulogovan==false || ulogovan=="false"){
                    showToast("Morate da se ulogujete!");
                    return;
                }
                const wager = parseInt(document.getElementById("wager").value);
                
                console.log(ulogovan);
                let bal = await getBalance();
                console.log(bal);
                
                if(isNaN(wager) || wager<=0 || wager>bal){
                    showToast("Napišite validan broj!");
                }
                else{
                    
                    document.getElementById("spin").disabled = true;
                    //createCookie("wager", wager, 1);
                    var rand1 = getRandomInt(10);
                    var rand2 = getRandomInt(10);
                    var rand3 = getRandomInt(10);
                    var rand4 = getRandomInt(10);
                    var rand5 = getRandomInt(10);

                    var randarray = [rand1, rand2, rand3, rand4, rand5];
                    var counts = {};
                    randarray.forEach(function (x) { counts[x] = (counts[x] || 0) + 1; });
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
                    var plusMinus = -wager;
                    await spinAll(rand1+1, rand2+1, rand3+1, rand4+1, rand5+1);
                    if(maks1===5){
                        document.getElementById("nagrada").innerText = "5 Istih! 5,000X !!!";
                        document.getElementById("pop-up").style.visibility = "visible";
                        document.getElementById("fiveofakind").innerText = parseInt(document.getElementById("fiveofakind").innerText) + 1;
                        plusMinus = 5000*wager - wager;
                    }
                    else if((rand5===rand4+1 && rand4===rand3+1 && rand3===rand2+1 && rand2===rand1+1) || (rand5===rand4-1 && rand4===rand3-1 && rand3===rand2-1 && rand2===rand1-1)){
                        document.getElementById("nagrada").innerText = "Straight! 250X !!!";
                        document.getElementById("pop-up").style.visibility = "visible";
                        document.getElementById("straight").innerText = parseInt(document.getElementById("straight").innerText) + 1;
                        plusMinus = 250*wager - wager;
                    }
                    else if(maks1===4){
                        document.getElementById("nagrada").innerText = "4 Istih! 25X !!!";
                        document.getElementById("pop-up").style.visibility = "visible";
                        document.getElementById("fourofakind").innerText = parseInt(document.getElementById("fourofakind").innerText) + 1;
                        plusMinus = 25*wager - wager;
                    }
                    else if(maks1===3 && maks2===2){
                        document.getElementById("nagrada").innerText = "Full house! 10X !!!";
                        document.getElementById("pop-up").style.visibility = "visible";
                        document.getElementById("fullhouse").innerText = parseInt(document.getElementById("fullhouse").innerText) + 1;
                        plusMinus = 10*wager - wager;
                    }
                    else if(maks1===3){
                        document.getElementById("nagrada").innerText = "Triling! 2X !!!";
                        document.getElementById("pop-up").style.visibility = "visible";
                        document.getElementById("triling").innerText = parseInt(document.getElementById("triling").innerText) + 1;
                        plusMinus = 2*wager - wager;
                    }
                    else if(maks1===2 && maks2===2){
                        document.getElementById("nagrada").innerText = "Dva para! 1.2X !!!";
                        document.getElementById("pop-up").style.visibility = "visible";
                        document.getElementById("dvapara").innerText = parseInt(document.getElementById("dvapara").innerText) + 1;
                        plusMinus = 1.2*wager - wager;
                    }
                    else if(maks1===2){
                        document.getElementById("nagrada").innerText = "Jedan par! 0.5X !!!";
                        document.getElementById("pop-up").style.visibility = "visible";
                        document.getElementById("jedanpar").innerText = parseInt(document.getElementById("jedanpar").innerText) + 1;
                        plusMinus = 0.5*wager - wager;
                    }
                    var finalBal = parseInt(bal) + plusMinus;
                    document.getElementById("ukupno").innerText = parseInt(document.getElementById("ukupno").innerText) + 1;
                    console.log(plusMinus);
                    fetch("update_balance", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded"
                    },
                    body: `delta=${plusMinus}`  // ili "+200"
                    })
                    .then(res => res.text())
                    .then(response => {
                    console.log("Odgovor servera:", response);
                    });
                    
                    document.getElementById("balLabel").innerText = finalBal + "T₱";
                    document.getElementById("balLABEL2").innerText = finalBal + "T₱";
                    await sleep(2000);
                    document.getElementById("pop-up").style.visibility = "hidden";
                    document.getElementById("spin").disabled = false;
                    if(document.getElementById("autospin").checked){
                        buttonClick();
                    }
                }
            }
        </script>
    </div>
</body>
</html>
