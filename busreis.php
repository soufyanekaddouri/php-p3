<!DOCTYPE html>
    <html>
<head>
    <link href = "css/style.css" rel = "stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
</head>
<?php
/**
 * Created by PhpStorm.
 * User: Soufyane
 * Date: 1/26/2016
 * Time: 5:23 PM
 */

$leeftijd = $_POST ["getal"];
$prijs = 0;

if ($leeftijd  >= 10 & $leeftijd <= 12) {
    $prijs = 5;
}

if ($leeftijd = 65) {
    $prijs = 10;
}

if ($leeftijd <= 2) {
    $prijs = 0;
}

?>
            <body>
                    <section>
                        <h1>Opdracht 3: Foutmeldingen</h1>
                        <p>Een screenshot dat mijn editor (PHPstorm) foutmeldingen kan weergeven</p>
                        <img src = "img/screenshot_foutmelding.png" width="1000px"> <br>
                        <hr>
                        <h1>Opdracht 4: Busreis</h1>
                        <h3>VOER JE LEEFTIJD IN</h3>
                        <form action = "busreis.php" method="post">
                            <input name ="getal"type = "text">
                            <input type="submit" value="OK">
                        </form>
                        <p>
                            <?php
                            echo " ".$prijs. " euro";
                            ?>
                        </p>
                    </section>

            </body>


</html>