<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $leeftijd = 0;
    while ($leeftijd < 18) {
        echo "<ul><li> ik ben $leeftijd jaar, dus ik mag nog niet stemmen. </li></ul>";
        $leeftijd++;
    }
    echo "<ul><li> Ik ben 18 jaar oud, dus ik mag stemmen. </li></ul>";
    ?>
</body>

</html>