<?php
session_start();
$list = array("Hallo", "Welkom");


if (isset($_POST["submit"])) {
    $item = $_POST["list_item"];
    array_push($list, $_POST["list_item"]);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>List Creator</title>
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>

<section>
    <h1>List Creator</h1>
    <form action="" method="post">
        <input type="text" name="list_item">
        <input type="submit" name="submit" value="Add">
    </form>
    <br>

    <?php

    for ($i = 0; $i < sizeof($list); $i++ ) {
        echo $list[$i] . "<br>";
    }

    ?>

    <pre>
        <?php
        print_r($list);
        ?>
    </pre>

</section>

</body>


</html>
