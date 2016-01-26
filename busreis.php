<!DOCTYPE html>
    <html>
<head>
    <link href = "css/style.css" rel = "stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
</head>

            <body>

                    <section>
                        <h1>Opdracht 3: Foutmeldingen</h1>
                        <p>Een screenshot dat mijn editor (PHPstorm) foutmeldingen kan weergeven</p>
                        <img src = "img/screenshot_foutmelding.png" width="1000px"> <br>
                        <hr>
                        <h1>Opdracht 4: Busreis</h1>
                        <?php
                        $leeftijd =  5;
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
                        <h3>VOER JE LEEFTIJD IN</h3>
                        <form>
                            <input type = "text">
                            <input type="submit" value="OK">
                        </form>
                        <p>
                            <?php
                            echo "<strong>De busreis kost ".$prijs. " euro</strong>";
                            ?>
                        </p>
                    </section>

            </body>


</html>