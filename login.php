<?php session_start(); include "SECRETS.php"; ?>
<!DOCTYPE html>
<html>
     <head>
        <title>Login/Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="nav.css">
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
        function f2(){
            
        }
     </script>
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        *{
            font-family: 'Poppins', sans-serif;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            color: #fff;
        }
        body{
            background-color: #000;
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
        input:focus{
            outline: none;
        }
        

        li.nav {
            display: inline;
            color: white;
        }
        li.mobile{
            color:white;
        }
        a {
           display: inline;
           font-size: 2rem;
           text-decoration: none;
           color: white;
           margin: 10px;
        } 
        ul{
            margin: 20px;
        }
        a:hover{
            color: rgb(181, 181, 181);
            transition: 0.5s ease-in-out;
        }
        p{
            font-size: 1.3rem;
            margin: 20px 20px 20px 30px;
        }
        .navbut2{
            background-color: rgba(0,0,0,0);
            padding: 5px 10px 5px 10px;
            cursor: pointer;
            color: #fff;
            font-size: 2rem;
            border-radius: 30px;
            border: 0;
        }
        .navbut{
            background-color: #04AA6D;
            padding: 5px 10px 5px 10px;
            cursor: pointer;
            background: linear-gradient(150deg, rgba(4,170,109,1) 33%, rgba(0,212,255,1) 100%);
            color: #000;
            font-size: 2rem;
            border-radius: 30px;
            border: 0;
        }
        .navbut2:hover{
            background-color: #04AA6D;
            padding: 5px 10px 5px 10px;
            cursor: pointer;
            background-color: linear-gradient(150deg, rgba(4,170,109,1) 33%, rgba(0,212,255,1) 100%);
            color: #000;
            font-size: 2rem;
            border-radius: 30px;
            border: 0;
            transition: 0.3s ease-in-out;
        }
        .navbut:hover{
            opacity: 0.8;
            transition: .5s opacity ease-in-out;
        }
        .mobile-container {
            display: none;
            animation: none; /* Avoid animation if not toggled */
        }
        form *{
            color: #000;
        }
/* Menu visible when "menu-open" is added */
        .mobile-container.menu-open {
            display: block;
            animation: slideRight 1s;
        }

/* Ensure children aren't forcibly displayed */
        .mobile-container * {
            display: inherit;
        }
        .container{
            display: none;
            margin: 20px;
        }
        @media only screen and (max-width: 775px) {
            ul.nav{
                display: none;
            }
            /*.mobile-container{
                display: block;
                animation: fadein 2s;
            }*/
            .container {
                display: inline-block;
                cursor: pointer;
            }
            .bar1, .bar2, .bar3 {
                width: 35px;
                height: 5px;
                background-color: #fff;
                margin: 6px 0;
                transition: 0.4s;
            }

            .change .bar1 {
                transform: translate(0, 11px) rotate(-45deg);
            }

            .change .bar2 {
                opacity: 0;
            }

            .change .bar3 {
                transform: translate(0, -11px) rotate(45deg);
            }
        }
        @media only screen and (min-width: 776px) {
    #mob-cont {
        display: none; /* Always hidden (if needed, control with other classes) */
    }

    .container {
        display: none; /* Hide toggle button for larger screens */
    }
}
        .menu-open{
            display: block;
        }
        @keyframes slideRight {
        from {
            opacity: 0; /* Start at the original position */
        }
        to {
            opacity: 1; /* Slide to the right */
        }
    }
    /* From Uiverse.io by Shoh2008 */ 
/* From Uiverse.io by Shoh2008 */ 
.checkbox-wrapper-4 * {
  box-sizing: border-box;
  color: white;
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
    </script>
    <script src="toast.js"></script>
    <div id="snackbar"></div>
    <body>
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
            if(isset($_SESSION['user'])){
                $conn = mysqli_connect('sql209.infinityfree.com', $DB_User, $DB_Pass, 'if0_37883576_tomicevipezosi');
                if($conn->connect_error){
                    die('Connection Failed : '.$conn->connect_error);
                }
                $email = $_SESSION['user'];
                $sql = "SELECT firstName FROM user WHERE email = '$email'";
                $res = $conn->query($sql);
                $res = $res -> fetch_assoc();
                echo "<script>showToast('Vec si ulogovan!');</script>";
                $conn->close();
            }
            else{
                echo '<form method="POST">
                <center>
                <h1>Log-in</h1><br>
                <div class="inputs">
                <input type="text" name="email" id="email" placeholder="E-Mail" style="border-radius: .5rem .5rem 0 0;" required><br>
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
<div class="checkbox-wrapper-4" style="text-align:left">
<input class="inp-cbx" id="morning4" type="checkbox" name="remember">
  <label class="cbx" for="morning4"><span>
  <svg width="12px" height="10px">
    
  </svg></span><span>Remember Me</span></label>
  <svg class="inline-svg">
    <symbol id="check-4" viewBox="0 0 12 10">
      <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
    </symbol>
  </svg>
</div>
<input type="submit" name="runCode"></center></form>';
            }
        ?>
        

        <?php
        define('ENCRYPTION_KEY', 'Sigma-Gyatt-In-Ohio-Rizzler-Edge');
function encrypt_password($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['runCode']) && !isset($_SESSION['user'])) {
            
                $email = $_POST['email'];
                $pass = $_POST['password'];

                $conn = mysqli_connect('sql209.infinityfree.com', $DB_User, $DB_Pass, 'if0_37883576_tomicevipezosi');
                if($conn->connect_error){
                    die('Connection Failed : '.$conn->connect_error);
                }else{
                    $sql = "SELECT password, id FROM user WHERE email = '$email'";

                    $result = $conn->query($sql);
                    $p = "";
                    $p2 = 0;
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $p = $row["password"];
                            $p2 = $row["id"];
                        }
                    }
                    $result = $p;
                    
                    if(password_verify($pass, $result)){
                        $sql = "SELECT firstName FROM user WHERE email = '$email'";
                        $res = $conn->query($sql);
                        $res = $res -> fetch_assoc();
                        if(isset($_POST['remember'])){
                            $_SESSION['user'] = $email;
                        }
                        echo "<script>showToast('Uspesan Login');</script>";
                        $_SESSION['user'] = $email;
                        //$_SESSION['id'] = $p2;
                        //echo "<script>location.reload();</script>";
                    }
                    else{
                        echo "<script>showToast('Pogresan email ili lozinka');</script>";
                    }
                }
                    $conn->close();
                }
?>
    </body>


</html>