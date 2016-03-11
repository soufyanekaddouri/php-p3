<!DOCTYPE html>
<html>
<head>
    <title>Kerstboom tekenen</title>
    <!-- CSS EN FONTS-->
    <link href = "../css/style.css" rel = "stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
</head>
                        <body>
<section>
    <h1>Opdracht 5: Kerstboom tekenen</h1>
    <?php
        $sterretje = "*";


    ?>
    <p>
        <?php
        for ($i = 0; $i < sizeof($sterretje);  $i++) {
            echo $sterretjes[0];
        }
        ?>
    </p>
    <hr>
    <h1>Van while naar for-loop</h1>

  <p>
     <strong> Maak van de onderstaande code een for-loop:</strong> <br> <br>
      <code>
      $x = 35;
          while($x >= 25) {
      echo "asdasd";
      $x--;
      }
      </code>
    <br>
    <p><strong>Mijn code:</strong></p>
    <code>
        for ($x = 35; $x >= 25; $x-) {
            echo "asdasd";
        }
    </code>
</section>
                        </body>


</html>