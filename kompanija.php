<!DOCTYPE html>
<?php
session_start();
$a = 12;
$b = 13;
$c = 14;
include "SECRETS.php";
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
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
           text-decoration: underline;
           color: #04AA6D;
           
        } 
        a.nav {
           display: inline;
           font-size: 2rem;
           text-decoration: none;
           color: black;
           
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
            margin: 20px 20px 20px 20px;
        }
        h1, h2{
            margin: 20px 20px 20px 20px;
        }
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px 20px 20px 20px;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }

        tr:nth-child(even){
            background-color: #f2f2f2;
        }

        th {
            background-color: #04AA6D;
            color: white;
        }
        form{
            padding: 20px;
            margin: 20px;
            border-radius: 40px;
            width: 20rem;
            background: #e4f4f6;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            background: linear-gradient(150deg, rgba(4,170,109,1) 33%, rgba(0,212,255,1) 100%);
            color: #000;
            text-align: center;
        }
        input[type="number"], input[type="password"]{
            background-color: #0f1e26;
            color: white;
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
            border-bottom: 0.5px solid #000;
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

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            /* display: none; <- Crashes Chrome on hover */
            -webkit-appearance: none;
            margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
        }

        input[type=number] {
            -moz-appearance:textfield; /* Firefox */
        }
        ::-webkit-input-placeholder { /* WebKit, Blink, Edge */
            color: #fff;
        }
        :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
            color: #fff;
            opacity: 0.8;
        }
        ::-moz-placeholder { /* Mozilla Firefox 19+ */
            color: #fff;
            opacity: 0.8;
        }
        :-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: #fff;
            opacity: 0.8;
        }
        ::-ms-input-placeholder { /* Microsoft Edge */
            color: #fff;
            opacity: 0.8;
        }

        ::placeholder { /* Most modern browsers support this now. */
            color: #fff;
            opacity: 0.8;
        }
        input:focus{
            outline: none;
        }
        button{
            border: 0;
            border-radius: 5px;
            background-color: rgba(0,0,0,1);
            color: #fff;
            cursor: pointer;
            margin-top: 10px;
            font-size: 1rem;
            padding: 10px;
        }
        button:hover{
            background-color:rgba(40,40,40,1);
            transition: 0.5s ease-in-out;
        }
        .label1{
            margin: 0;
        }
</style>
<body>
<ul>
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
                <li class = "nav"><a href="company.php" class="nav"><button class = "navbut2">Casino</button></a></li>
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
            $conn = mysqli_connect('sql209.infinityfree.com', $DB_User, $DB_Pass, 'if0_37883576_tomicevipezosi');
            mysqli_set_charset($conn, "utf8");
            if($conn->connect_error){
                die('Connection Failed : '.$conn->connect_error);
            }else{
                $id = $_GET["id"];
                $sql = "SELECT name, ticker, description, user_id, value, stocks_sold, stocks_available FROM kompanija WHERE id='$id'";
                
                $result = $conn->query($sql);
                if($result->num_rows > 0){
                    $kompanija = $result->fetch_assoc();
                    $sql = "SELECT firstName, lastName FROM user WHERE id = '$kompanija[user_id]'";
                    $result = $conn->query($sql)->fetch_assoc();
                    $stocks_to_sell = $kompanija["stocks_available"] - $kompanija["stocks_sold"];
                    echo "<h1>" . htmlspecialchars($kompanija["name"], ENT_QUOTES, 'UTF-8') . " (" . htmlspecialchars($kompanija["ticker"], ENT_QUOTES, 'UTF-8') . ")</h1>";
                    echo "<h2>Cena Akcije: " . $kompanija["value"] .  "T₱ (0.05%)</h2>";
                    if($result)
                        echo "<h2>Osnivac Kompanije: " . htmlspecialchars($result["firstName"], ENT_QUOTES, 'UTF-8') . " " . htmlspecialchars($result["lastName"], ENT_QUOTES, 'UTF-8') . "</h2>";
                    else
                        echo "<h2>Osnivac Kompanije: Neuspelo preuzimanja podataka</h2>";
                    echo "<h2>Broj dostupnih akcija: " . $stocks_to_sell . "</h2>";
                    echo "<p class='des'>" . $kompanija["description"] . "</p>";
                }
                else{
                    echo "<h1>Nepostojeca kompanija!</h1>";
                }
                $conn->close();
            }
        ?>
        <form method="POST">
            <h1 class="label1">Invest</h1>
            <input type="hidden" name="form_id" value="invest">
            <input type="number" name="amount" placeholder="Amount(Stocks)" step="1"><br>
            <button type="submit">Send request</button><br>
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['form_id']) && $_POST['form_id'] == "invest"){
                if(!isset($_SESSION['user']))
                    die("<a href='login.php' style='margin: 0 0 0 30px;'>Log in</a> to invest!");
                $conn = mysqli_connect('sql209.infinityfree.com', $DB_User, $DB_Pass, 'if0_37883576_tomicevipezosi');
                mysqli_set_charset($conn, "utf8");
                if($conn->connect_error){
                    die('Connection Failed : '.$conn->connect_error);
                }else{
                    $email = $_SESSION['user'];
                    $sql = "SELECT balance, investicije FROM user WHERE email = '$email'";
                    $res = $conn->query($sql);
                    $res = $res -> fetch_assoc();
                    $bal = $res['balance'];
                    $inv_KORISNIK = json_decode($res['investicije'], true);
                    $KORISNIK_id = $res["id"];
                    $id = $_GET["id"];
                    $sql = "SELECT stocks_available, stocks_sold, value, user_id, ticker, investicije FROM kompanija WHERE id = '$id'";
                    $res = $conn->query($sql);
                    $res = $res -> fetch_assoc();
                    $stocks_available = $res['stocks_available'];
                    $stocks_sold = $res['stocks_sold'];
                    $VLASNIK_id = $res['user_id'];
                    $value = $res['value'];
                    $amount = $_POST['amount'];
                    $ticker = $res['ticker'];
                    $inv_KOMPANIJA = json_decode($res['investicije'], true);
                    if($VLASNIK_id===$KORISNIK_id){
                        die("Ne možeš da kupiš svoje akcije!");
                    }
                    if($amount > $stocks_available - $stocks_sold){
                        die("Nema dovoljno akcija!");
                    }
                    $price = round($amount * $value);
                    if($bal < $price){
                        die("Nema dovoljno novca!");
                    }
                    $sql = "UPDATE user SET balance = balance - $price WHERE id = '$KORISNIK_id'";
                    if(!mysqli_query($conn, $sql)){
                        die("<h1>Error</h1>: " . $sql . "<br>" . $conn->error);
                    }
                    // $sql = "UPDATE user SET balance = balance + $price WHERE id = '$VLASNIK_id'";
                    // mysqli_query($conn, $sql);
                    $sql = "UPDATE kompanija SET stocks_sold = stocks_sold + $amount WHERE user_id = '$VLASNIK_id'";
                    mysqli_query($conn, $sql);
                    if($inv_KORISNIK[$ticker]!=NULL){
                        $inv_KORISNIK[$ticker] += $amount;
                    }
                    else{
                        $inv_KORISNIK[$ticker] = $amount;
                    }
                    $inv_KORISNIK = json_encode($inv_KORISNIK);
                    if($inv_KOMPANIJA[$email]!=NULL){
                        $inv_KOMPANIJA[$email] += $amount;
                    }
                    else{
                        $inv_KOMPANIJA[$email] = $amount;
                    }
                    $inv_KOMPANIJA = json_encode($inv_KOMPANIJA);
                    $sql = "UPDATE kompanija SET investicije = '$inv_KOMPANIJA' WHERE user_id='$VLASNIK_id'";
                    mysqli_query($conn, $sql);
                    $sql = "UPDATE user SET investicije = '$inv_KORISNIK' WHERE user_id='$KORISNIK_id'";
                    if(!mysqli_query($conn, $sql)){
                        echo "<h1>Error:</h1> " . $sql . "<br>" . $conn->error;
                    }
                }
            }

        ?>
        

</body>
</html>