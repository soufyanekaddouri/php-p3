<!DOCTYPE html>
<html>
<head>
    <title>Zwemclubs</title>
    <!-- CSS -->
    <link href = "../css/style.css" rel="stylesheet">
</head>
<?php
# Geen waarde text
$gw = "GEEN WAARDE";
# Er word pas gekeken naar de invoer, als er wat ingevoerd is.
$spartel = ($_POST["spartelInput"] ? $_POST["spartelInput"] : $gw);
$buffel = ($_POST["buffelInput"] ? $_POST["spartelInput"] : $gw);
$plons = ($_POST['plonsInput'] ? $_POST["spartelInput"] : $gw);
$bom   = ($_POST['bomInput']  ? $_POST["spartelInput"] :  $gw);

# Alle zwemclubs in een Array
$zwemclubs = [
    "DeSpartelKuikens" => $spartel,
    "DeWaterbuffels"    => $buffel,
    "Plonsmedrin"         => $plons,
    "Bommetje"            => $bom ];
# Het pad naar het plaatje
$swim = "../img/swim.png";

# Het aantal plaatjes
$aantalSpartels = ($spartel - ($spartel%5)) / 5;
$aantalBuffels = ($buffel - ($buffel%5)) /5;
$aantalPlonsjes = ($plons - ($plons%5)) /5;
$aantalBommetjes = ($bom - ($bom%5)) /5;
?>

<body>
    <section>
        <h1>Opdracht: Zwemclubs</h1>
           <p>
             <?php
            # De spartelkuikens
             echo "De Spartelkuikens: ".$zwemclubs["DeSpartelKuikens"]. " leden <br>";
            for($i = 0; $i < $aantalSpartels; $i++) {
                echo "<img class='swimmingIcon' src='$swim'>" ;
            }
            # De waterbuffels
             echo "<br> De Waterbuffels: ".$zwemclubs["DeWaterbuffels"]. " leden <br>";
            for($i = 0; $i < $aantalBuffels; $i++) {
                echo "<img class='swimmingIcon' src='$swim'>" ;
            }

             echo "<br> Plonsmderin: ". $zwemclubs["Plonsmedrin"]. " leden <br>";
            for($i = 0; $i < $aantalPlonsjes; $i++) {
                echo "<img class='swimmingIcon' src='$swim'>" ;
            }

             echo "<br> Bommetje: ".$zwemclubs["Bommetje"]. " leden <br>";
            for($i = 0; $i < $aantalBommetjes; $i++) {
                echo "<img class='swimmingIcon' src='$swim'>" ;
            }
            ?>
        </p> <br>

        <div class = "formulier">
        <form action="zwemclubs.php" method="post">
            <table>
                <tr>
                    <td>De spartelkuikens:</td>
                    <td><input name = "spartelInput" type="number" value = "<?= $spartel ?>"></td>
                </tr>

                <tr>
                    <td>De Waterbuffels:</td>
                    <td><input name = "buffelInput" type="number" value = "<?= $buffel ?>"></td>
                </tr>

                <tr>
                    <td>Plonsmderin:</td>
                    <td><input name = "plonsInput" type="number" value = "<?= $plons ?>"></td>
                </tr>

                <tr>
                    <td>Bommetje: </td>
                    <td><input name = "bomInput" type="number" value = "<?= $bom ?>"></td>
                </tr>

                <tr>
                    <td> </td>
                    <td><input type="submit" value="Update"></td>
                </tr>
            </table>
        </form>
        </div>

        <h1><a href = "https://github.com/soufyanekaddouri/php-p3/blob/master/introductie/zwemclubs.php" target = "_blank">Link naar de code</a></h1>
          </section>
     </body>
</html>