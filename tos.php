<?php session_start(); include "SECRETS.php";?>
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
        ul.nav {
          list-style-type: none;
          margin: 30px;
          padding: 0;
         }
        ul.mobile{
            list-style-type: none;
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

div.tos{
    margin-left:40px;
    color: #fff;
    width: 80vw;
}
h1{
    font-size: 1.8rem;
}
h2{
    font-size: 1.5rem;
}
p{
    font-size: 1.2rem;
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
            <li class = "nav"><a href="index.php"><button class = "navbut2">Home</button></a></li>
            <li class = "nav"><a href="company.php"><button class = "navbut2">My Company</button></a></li>
            <?php
        if(isset($_SESSION["user"])){
            $conn = mysqli_connect('sql209.infinityfree.com', $DB_User, $DB_Pass, 'if0_37883576_tomicevipezosi');
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
            $conn = mysqli_connect('sql209.infinityfree.com', $DB_User, $DB_Pass, 'if0_37883576_tomicevipezosi');
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
        <div class = "tos">
        <h1>Услови коришћења</h1><br>
<h2>1. Природа садржаја</h2>
<p>Сви садржаји и информације објављени на овом вебсајту обезбеђују се искључиво у сврху забаве и информисања. Садржај представља искључиво хумористички материјал и не сме се третирати као професионални савет, препорука или релевантан извор информација.</p>

<h2>2. Ограничење одговорности</h2>
<p>Сви корисници вебсајта се одричу било какве одговорности за директне, индиректне, случајне или последичне штете које могу настати услед коришћења или погрешног тумачења садржаја. Свака интеракција или коришћење информација са сајта врши се на сопствени ризик корисника, у складу са законима Републике Србије.</p>

<h2>3. Гаранције и одрицање одговорности</h2>
<p>Вебсајт се пружа "као што јесте" без било каквих изричитих или имплицитних гаранција, укључујући, али не ограничавајући се на, имплицитне гаранције о подобности за тржиште, погодности за одређену сврху или неповредивост права трећих лица. Садржај може бити ажуриран, измењен или уклоњен у било ком тренутку без претходног обавештења.</p>

<h2>4. Хипервезе ка екстерним ресурсима</h2>
<p>Вебсајт може садржати хипервезе ка екстерним платформама и доменима који нису под нашом контролом. Не преузимамо одговорност за доступност, садржај или безбедност тих екстерних ресурса.</p>

<h2>5. Понашање корисника</h2>
<p>Корисницима је строго забрањено коришћење вебсајта за незаконите активности, кршење важећих закона и прописа Републике Србије, као и радње које могу довести до ометања или деградације услуга вебсајта.</p>

<h2>6. Измене и ажурирања услова</h2>
<p>Задржавамо право на једнострано ажурирање или модификацију ових услова коришћења у било ком тренутку. Препоручујемо корисницима да редовно проверавају ову страницу ради информисања о потенцијалним променама у условима.</p>

<h2>7. Заштита приватности</h2>
<p>Поштовање ваше приватности је важно за нас. Сви лични подаци који се прикупљају током коришћења овог вебсајта биће обрађени у складу са важећим прописима Републике Србије о заштити података о личности.</p>

<h2>8. Интелектуална својина</h2>
<p>Сав садржај објављен на овом вебсајту, укључујући текст, слике, графике, логое и друге материјале, заштићен је законом о ауторским правима и интелектуалној својини Републике Србије. Ниједан део овог вебсајта не сме се репродуковати, копирати или дистрибуирати без претходне писмене сагласности власника.</p>

<h2>9. Решавање спорова</h2>
<p>Сваки спор који проистекне из ових услова коришћења или у вези са коришћењем вебсајта биће решаван у складу са законима Републике Србије, уз надлежност судова у месту регистрације власника вебсајта.</p>

<h2>10. Права на унете информације</h2>
<p>Користећи нашу услугу, корисници се слажу да можемо прикупљати, обрађивати и објављивати њихова лична имена и презимена у складу са законским прописима. Ваши лични подаци ће бити објављени само у следећим случајевима:

Сагласност корисника: Ваше име и презиме може бити објављено само уз вашу изричиту сагласност, која ће бити добијена пре него што се подаци објаве. У сваком тренутку имате право да повучете своју сагласност.

Извршење уговора: Ваши лични подаци, укључујући име и презиме, могу бити објављени у складу са обавезама које произилазе из уговора о коришћењу услуге, као што је регистрација на нашој платформи или пружање других услуга које сте затражили.

Законска обавеза: У случају да то захтева закон, судски налози или регулаторни органи, ваше име и презиме може бити објављено без ваше додатне сагласности.

Легитимни интереси: У неким случајевима можемо објавити ваше име и презиме ако то сматрамо неопходним за испуњавање нашег легитимног интереса, као што је побољшање наших услуга или комуникација са корисницима.
</p>

<p style="margin-left: 0px;">Коришћењем овог вебсајта, прихватате све одредбе ових услова коришћења и обавезујете се на поштовање закона Републике Србије. Уколико се не слажете са било којом ставком, молимо вас да прекинете употребу наше платформе.</p>

<p style="margin-left: 0px;">Хвала вам што користите нашу услугу!</p>
<a href="politikaprivatnosti.php">Politika privatnosti</a>
    </div>
    </body>


</html>