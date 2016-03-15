<?php

function deelbaar($getal) {
    $getal = 3;
    if ($getal % 3) {
        echo "Het is deelbaar door 3";
    } else {
        echo "Het is niet deelbaar door 3";
    }


}

?>

<!DOCTYPE html>
    <html>
<head>
    <title>Opdracht functies</title>
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
<section>
    <h1>Functies</h1>

    <h3>Celsius naar Fahrenheit: </h3>
    <code>function converten($celsius) { $celsius = 100; $fahren = $celsius * 10; echo "$fahren"; }</code>

    <h3>Deelbaar door 3:</h3>
    <?php
    deelbaar();
    ?>
</section>
</body>


</html>

