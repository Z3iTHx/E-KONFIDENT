<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Złóż swój anonimowy donos, bez wychodzenia z domu!">
    <meta name="author" content="Filip Samól">
    <meta name="robots" content="indexfollow">

    <link rel="icon" href="gallery/">
    <link rel="stylesheet" href="css/loading.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Semi+Condensed:ital,wght@0,1;0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,1;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
    <title>e-KONFIDENT - Mandat</title>
</head>
<body>
    
    <!--NAV BAR-->
    <nav class="nav-bar">
        <ul class="nav-list-button">
            <li><a href="#" class="nav-button">STRONA GŁÓWNA<span id="underline"></span></a></li>
            <li><a href="#" class="nav-button">MANDAT<span id="underline"></span></a></li>
            <li><a href="#" class="nav-button">ZŁÓŻ DONOS<span id="underline"></span></a></li>
            <li><a href="#" class="nav-button">KONTAKT<span id="underline"></span></a></li>
        </ul>
    </nav>

    <!--CONTENT-->
    <section class="content-box">
        <h1 class="content-header">KALKULATOR MANDATU</h1>
        <p class="content-text">
            Sprawdź jaki mandat dostaniesz za przekroczenie prędkości 
        </p>
        <section class="form-box">
            <form action="" id="noreset" method="POST">
                <input data-reset="false" max="450" min="0" class="speed" id="speedL" type="number" name="speed" placeholder="0">
                <input max="140" min="10" class="speed" id="speedR" type="number" value="50" name="limit"> <br> <br> <br> <br> <br> <br>
                <section class="checkbox-box">
                    </label><input type="checkbox" name="village" class="input"> <label>W zabudowanym?</label>
                </section>
                <section class="checkbox-box">
                    <input type="checkbox" name="recidivism" class="input"> <label>Recydywa?</label>
                </section>

                <button name="submit" class="submit" type="submit">LICZ</button>
            </form>
            <section class="output-box">
                <section id="PLN" class="form-output">
                    <?php
                        if(isset($_POST["submit"])) {
                            $speed = (int)$_POST["speed"];
                            $limit = (int)$_POST["limit"];
                            $dif = $speed - $limit;
                            
                            $rec = isset($_POST["recidivism"]);

                            if($dif <= 0) {
                                echo "0 PLN";
                            } elseif($dif >= 31 and $dif <= 40 and $rec=="true") {
                                echo "1600PLN";
                            } elseif($dif >= 41 and $dif <= 50 and $rec=="true") {
                                echo "2000PLN";
                            } elseif($dif >= 51 and $dif <= 60 and $rec=="true") {
                                echo "3000PLN";
                            } elseif($dif >= 61 and $dif <= 70 and $rec=="true") {
                                echo "4000PLN";
                            } elseif($dif >= 71 and $rec=="true") {
                                echo "5000PLN";
                            } elseif($dif <= 10) {
                                echo "50 PLN";
                            } elseif($dif >= 11 and $dif <= 15) {
                                echo "100 PLN";
                            } elseif($dif >= 16 and $dif <= 20) {
                                echo "200 PLN";
                            } elseif($dif >= 21 and $dif <= 25) {
                                echo "300 PLN";
                            } elseif($dif >= 26 and $dif <= 30) {
                                echo "400 PLN";
                            } elseif($dif >= 31 and $dif <= 40) {
                                echo "800 PLN";
                            } elseif($dif >= 41 and $dif <= 50) {
                                echo "1000 PLN";
                            } elseif($dif >= 51 and $dif <= 60) {
                                echo "1500 PLN";
                            } elseif($dif >= 61 and $dif <= 70) {
                                echo "2000 PLN";
                            } elseif($dif >= 71) {
                                echo "2500 PLN";
                            }
                        }

                    ?>
                   
                </section>
                <section id="PKT" class="form-output">
                    <?php
                     if(isset($_POST["submit"])) { 
                        if($dif <= 0) {
                            echo "0 PKT";
                        } elseif($dif <= 10) {
                            echo "1 PKT";
                        } elseif($dif >= 11 and $dif <= 15) {
                            echo "2 PKT";
                        } elseif($dif >= 16 and $dif <= 20) {
                            echo "3 PKT";
                        } elseif($dif >= 21 and $dif <= 25) {
                            echo "5 PKT";
                        } elseif($dif >= 26 and $dif <= 30) {
                            echo "7 PKT";
                        } elseif($dif >= 31 and $dif <= 40) {
                            echo "9 PKT";
                        } elseif($dif >= 41 and $dif <= 50) {
                            echo "11 PKT";
                        } elseif($dif >= 51 and $dif <= 60) {
                            echo "13 PKT";
                        } elseif($dif >= 61 and $dif <= 70) {
                            echo "14 PKT";
                        } elseif($dif >= 71) {
                            echo "15 PKT";
                        } 
                     }
                        
                    ?>
                </section>
            </section>

            <section id="php-alert">
                <?php
                    if(isset($_POST["submit"])) {
                        if(isset($_POST["village"]) and $dif > 50) {
                            echo "Uprawnienia zostaną wstrzymane na 3 mies. <br>";
                        } 
                    }

                    if(isset($_POST["submit"])) {
                        if(isset($_POST["recidivism"]) and $dif >= 31) {
                            echo "Recydywa, grzywna została podwojona <br>";
                        } 
                    }
                ?>
            </section>
        </section>

    </section>


    <script src="js/script.js"></script>
    <!--PHP SECTION-->

    <footer class="footer">

    </footer>

</body>
</html>