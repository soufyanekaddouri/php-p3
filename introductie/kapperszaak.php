<?php
session_start();
# De session array
#naam en tijdstip
$naam = ($_POST['naamInvoer'] ? $_POST['naamInvoer'] : "" );
$tijdstip = ($_POST['tijdstipInvoer'] ? $_POST['tijdstipInvoer'] : "");
?>
<!DOCTYPE html>
    <html>
<head>
    <title>Kapperszaak Sanders</title>
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
    <section>
        <table class = "afspraken"><tr><td>Naam: </td><td>Tijdstip: </td></tr>
            <?php
                $_SESSION[$naam]  = $tijdstip;
                foreach ($_SESSION as $naam => $tjdstip) {
                    echo "
                    <tr>
                    <td>$naam</td>
                    <td>$tijdstip</td>
                    </tr>
                    ";
                }
            ?>
        </table>

        <!-- formulier -->
        <h1>Afspraak maken</h1>

        <form action="<?= $action_string ?>" method="post">
            <input name = "naamInvoer" type="text">
            <input name = "tijdstipInvoer" type="text"  class="tdinput">
            <input type="submit" value="Maak afspraak">
            <input type="button" value="Lijst Resetten">
        </form>


    </section>
</body>
</html>