<?php session_start(); include "SECRETS.php";?>
<!DOCTYPE html>
<html>
     <head>
        <title>Register</title>
        <link rel="stylesheet" href="nav.css">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     </head>
     <script>
        function f() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
     </script>
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        *{
            font-family: 'Poppins', sans-serif;
            padding: 0;
            margin: 0;
            box-sizing: border-box;

        }
        form{
            position: relative;
            display: flex;
            padding: 20px;
            margin: 20px;
            border-radius: 40px;
            width: 20rem;
            background: #e4f4f6;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            background: linear-gradient(150deg, rgba(4,170,109,1) 33%, rgba(0,212,255,1) 100%);
            color: #000;
        }
        input:focus{
            outline: none;
        }
        input[type="text"], input[type="password"]{
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
        ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
        }

        li {
            display: inline;
        }
        ul{
            margin: 20px;
        }
        a {
           display: inline;
           font-size: 2rem;
           text-decoration: none;
           color: white;
           margin: 10px;
        }
        
        
        .checkbox-wrapper-4 * {
  box-sizing: border-box;
  color: black;
}

.checkbox-wrapper-4 .cbx {
  -webkit-user-select: none;
  user-select: none;
  cursor: pointer;
  padding: 6px 8px;
  border-radius: 6px;
  overflow: hidden;
  transition: all 0.2s ease;
  display: inline-block;
}

.checkbox-wrapper-4 .cbx:not(:last-child) {
  margin-right: 6px;
}

.checkbox-wrapper-4 .cbx:hover {
  background: rgba(0,119,255,0.06);
}

.checkbox-wrapper-4 .cbx span {
  float: left;
  vertical-align: middle;
  transform: translate3d(0, 0, 0);
}

.checkbox-wrapper-4 .cbx span:first-child {
  position: relative;
  width: 18px;
  height: 18px;
  border-radius: 4px;
  transform: scale(1);
  border: 1px solid #cccfdb;
  transition: all 0.2s ease;
  box-shadow: 0 1px 1px rgba(0,16,75,0.05);
}

.checkbox-wrapper-4 .cbx span:first-child svg {
  position: absolute;
  top: 3px;
  left: 2px;
  fill: none;
  stroke: #fff;
  stroke-width: 2;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke-dasharray: 16px;
  stroke-dashoffset: 16px;
  transition: all 0.3s ease;
  transition-delay: 0.1s;
  transform: translate3d(0, 0, 0);
}

.checkbox-wrapper-4 .cbx span:last-child {
  padding-left: 8px;
  line-height: 18px;
}

.checkbox-wrapper-4 .cbx:hover span:first-child {
  border-color: #07f;
}

.checkbox-wrapper-4 .inp-cbx {
  position: absolute;
  visibility: hidden;
}

.checkbox-wrapper-4 .inp-cbx:checked + .cbx span:first-child {
  background: #07f;
  border-color: #07f;
  animation: wave-4 0.4s ease;
}

.checkbox-wrapper-4 .inp-cbx:checked + .cbx span:first-child svg {
  stroke-dashoffset: 0;
}

.checkbox-wrapper-4 .inline-svg {
  position: absolute;
  width: 0;
  height: 0;
  pointer-events: none;
  user-select: none;
}

@media screen and (max-width: 640px) {
  .checkbox-wrapper-4 .cbx {
    width: 100%;
    display: inline-block;
  }
}

@-moz-keyframes wave-4 {
  50% {
    transform: scale(0.9);
  }
}

@-webkit-keyframes wave-4 {
  50% {
    transform: scale(0.9);
  }
}

@-o-keyframes wave-4 {
  50% {
    transform: scale(0.9);
  }
}

@keyframes wave-4 {
  50% {
    transform: scale(0.9);
  }
}
a.tos{
  
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
        <script>
        function f() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
        function f2(){
            
        }
     </script>
        <div id="snackbar"></div>
        <form method="POST" accept-charset="utf-8">
                <center>
                <h1>Register</h1>
                <div class="inputs">
                   <p style="margin: 0;font-size:1rem;">*Molimo koristite pravo ime!</p>
                  <input type="text" name="firstName" id="firstName" placeholder="First Name" style="border-radius: .5rem .5rem 0 0;" required><br>
                  <input type="text" name="lastName" id="lastName" placeholder="Last Name" style="border-radius: 0 0 0 0;" required><br>
                <input type="text" name="email" id="email" placeholder="E-Mail" style="border-radius: 0 0 0 0;" required><br>
                <input type="password" name="password" id="password" placeholder="Password" style="border-radius: 0 0 0.5rem 0.5rem;" required><br>
             <div class="checkbox-wrapper-4" style="text-align:left">
  <input class="inp-cbx" id="morning3" type="checkbox" onclick="f();">
  <label class="cbx" for="morning3"><span>
  <svg width="12px" height="10px">
    
  </svg></span><span>Show Password</span></label>
  <svg class="inline-svg">
    <symbol id="check-4" viewBox="0 0 12 10">
      <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
    </symbol>
  </svg>
</div>

<p style="font-size: 1rem;margin:0;text-align:left;">Korišćenjem sajta prihvatate <a href="tos.php" class="tos" style="font-size:1rem;margin: 0;text-decoration:underline;color:#0266FF;">Uslove Koriscenja</a></p>
<input type="submit" name="runCode"></center></form>

        <?php
        define('ENCRYPTION_KEY', 'Sigma-Gyatt-In-Ohio-Rizzler-Edge');
function encrypt_password($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['runCode']) && !isset($_SESSION['user'])) {
                $email = $_POST['email'];
                $pass = $_POST['password'];
                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $conn = mysqli_connect('sql209.infinityfree.com', $DB_User, $DB_Pass, 'if0_37883576_tomicevipezosi');
                mysqli_set_charset($conn, "utf8");
                if($conn->connect_error){
                    die('Connection Failed : '.$conn->connect_error);
                }else{
                    $sql = "SELECT email FROM user";
                    $result = $conn->query($sql);
                    
                    if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        if($row["email"] == $email){
                            echo "Email vec postoji";
                            $conn->close();
                            exit();
                            
                        }
                    }
                    }
                    
                    $pass = encrypt_password($pass);
                    $sql = "INSERT INTO user(firstName, lastName, email, password) VALUES('$firstName', '$lastName', '$email', '$pass')";
                    if($conn->query($sql) == TRUE){
                        $_SESSION['user'] = $email;
                        echo "Registracija uspesna! <a href='login.html'>Ulogujte se</a>";
                    }
                    else{
                        echo "Registracija neuspesna: " . $conn->error;
                    }
                    $conn->close();
            }
        }
?>
    </body>


</html>
