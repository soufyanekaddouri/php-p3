<?php
#variables i need
$errorString = "";
$leapText = "is een schikkeljaar";

# if there is something inserted in the textfield, pick it up. If not, just pick the current year.

if (isset($_GET["yearDate"])) {
    $leapView = $_GET["yearDate"];

} else if ($_GET["yearDate"] == null) {
    $leapView = date("Y");
}

if (  (0 == $leapView % 4) and (0 != $leapView % 100) or (0 == $leapView % 400)  ) {
    $leapText = "is een schrikkeljaar";
} else {
    $leapText = "is geen schrikkeljaar";
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Leap Year Checker</title>
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>

<section>
    <h1>Leap Year Checker</h1>
    <form action="" method="get">
        <input type="number" name="yearDate" value="<?= $leapView ?>">
        <input type="submit" value="check">
    </form>

    <h2><?= $leapView. " ". $leapText ?></h2>

</section>

</body>


</html>
