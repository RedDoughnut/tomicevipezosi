<?php session_start(); ?>
<!DOCTYPE html>
<html>
     <head>
        <title>Napravi Kompaniju</title>
        <link rel="stylesheet" href="nav.css">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     </head>
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        *{
            font-family: 'Poppins', sans-serif;
            margin: 0;
            box-sizing: border-box;
        }
        * *{
            margin: 0;
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
           margin: 10px 10px 10px 0;
        } 
        a.nav {
           display: inline;
           font-size: 2rem;
           text-decoration: none;
           color: black;
           margin: 10px 10px 10px 10px;
        } 
        ul{
            margin: 20px 20px 20px 1vw;
        }
        a:hover{
            color: rgb(181, 181, 181);
            transition: 0.5s ease-in-out;
        }
        p{
            font-size: 1.3rem;
            margin: 0;
        }
        h1, h2{
            margin: 0;
        }
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px 20px 20px 10px;
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
            margin: 20px 0px 20px 10px;
            border-radius: 40px;
            width: 25rem;
            background: #e4f4f6;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            background: linear-gradient(150deg, rgba(4,170,109,1) 33%, rgba(0,212,255,1) 100%);
            color: #000;
            text-align: center;
        }
        input[type="number"], input[type="password"], input[type="text"]{
            background-color: #0f1e26;
            color: white;
            box-sizing: border-box;
            width: 16rem;
            height: 2rem;
            padding: 8px 15px;
            font-size: 1.2rem;
            margin: 0;
            border-radius: 0;
            border-top: 0;
            border-left:0;
            border-right: 0;
            border-bottom: 0.5px solid #000;
            box-shadow: rgb(0 0 0 / 8%) 0 -1px;
        }
        textarea{
            box-sizing: border-box;
            width: 16rem;
            padding: 8px 15px;
            font-size: 1.2rem;
            margin: 0;
            color: white;
            background-color: #0f1e26; 
            margin-bottom: 0;
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
            echo "<li class = 'nav'><a href='login.php'><button class = 'navbut'>Log-In</button></a></li><li class = 'nav'><a href='register.php'><button class = 'navbut2'>Register</button></a></li>";
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
        <form action="napravi_kompaniju.php" method="POST" accept-charset="utf-8">
        <center>
            <h1>Registracija Kompanije</h1>
            <div class="inputs">
                <p>Registracija kompanije u Odeljenskom Registru za Kompanije 8B (ORK8B)</p>
                <input type="text" name="name" id="firstname" placeholder="Ime Kompanije" maxlength="30" required><br>
                <input type="text" name="ticker" id="lastname" placeholder="Ticker Simbol" style="text-transform:uppercase" maxlength="4" required><br>
                <textarea name="desc" cols="37" rows="5" maxlength="400" style="resize: none" placeholder="Deskripcija (max. 400 karaktera)"></textarea><br>
            </div><input type="submit">
        </center>
        </form>

        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $conn = mysqli_connect('sql209.infinityfree.com', 'if0_37883576', 'Sigurno0612', 'if0_37883576_tomicevipezosi');
            mysqli_set_charset($conn, "utf8");
            if($conn->connect_error){
                die('Connection Failed : '.$conn->connect_error);
            }else{
                if(!isset($_SESSION['user'])){
                    echo "<a href='login.php'>Log-In first</a>";
                    $conn->close();
                }
                else{
                    $email = $_SESSION['user'];
                    $sql = "SELECT id, balance FROM user WHERE email = '$email'";
                    $res = $conn->query($sql);
                    $res = $res->fetch_assoc();
                    $id = $res['id'];
                    $balance = $res['balance'];
                    $sql = "SELECT name FROM kompanija WHERE user_id = '$id'";
                    $res = $conn->query($sql);
                    if($res->num_rows > 0){
                        die("Imas kompaniju! <a href='company.php'>Tvoja kompanija</a>");
                    }
                    if($balance<2000){
                        die("Insufficient funds! You need 2000T₱");
                    }
                    $name = $_POST['name'];
                    $ticker = $_POST['ticker'];
                    $desc = $_POST['desc'];
                    
                    $sql = "SELECT name, ticker FROM kompanija";
                    $res = $conn->query($sql);
                    while($row = $res->fetch_assoc()){
                        if($row['name'] == $name){
                            die("Company with same name already exists!");
                        }
                        if($row['ticker'] == $ticker){
                            die("Company with same ticker symbol already exists!");
                        }
                    }
                    $sql = "UPDATE user SET balance = balance - 2000 WHERE id = '$id'";
                    $res = $conn->query($sql);
                    if(!$res){
                        die("Error: " . $conn->error);
                    }
                    $sql = "INSERT INTO kompanija(name, ticker, description, user_id) VALUES('$name', '$ticker', '$desc', '$id')";
                    if(!$conn->query($sql)){
                        $sql = "UPDATE user SET balance = balance + 2000 WHERE id = '$id'";
                        $conn->query($sql);
                        die("Error: " . $conn->error);
                    }
                    $conn->close();
                    
                }
            }
        }
        ?>
    </body>


</html>