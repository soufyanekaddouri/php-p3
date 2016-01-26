<!DOCTYPE html>
<html>
<head>
    <link href = "css/style.css" rel = "stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <title>Hello World!</title>
</head>
<body>
<section>
<p>
    <?php
    #hello world
    echo "Hello World! <br>";

    #alle variabelen
    $bool = true;
    $text = "het is ";
    $hallo = "hahahaha";

    if ($bool == true) {
        $text = "De boolean is waar";
    } else {
        $text = "De boolean is niet waarr";
    }
    echo $text;
    ?>
</p>
<br>


</body>
</html>