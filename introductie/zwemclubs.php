<!DOCTYPE html>
<html>
<head>
    <title>Zwemclubs</title>
    <!-- CSS -->
    <link href = "../css/style.css" rel="stylesheet">
</head>
<?php
# Er word pas gekeken naar de invoer, als er wat ingevoerd is.
if (isset($_POST["spartelInput"])) {$spartel  = ($_POST["spartelInput"]);} else {$spartel = 0; }
if (isset($_POST["buffelInput"])) {$buffel  = ($_POST["buffelInput"]); } else { $buffel = 0; }
if (isset($_POST["plonsInput"])) {$plons  = ($_POST["plonsInput"]); } else { $plons = 0; }
if (isset($_POST["bomInput"])) {$bom  = ($_POST["bomInput"]); } else { $bom = 0; }

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
          </section>
     </body>
</html>