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
    for ($waarde = 0; $waarde  < 18; $waarde++) {
        echo "<ul>Ik ben $waarde jaar oud en mag dus niet stemmen</ul>";
    }
    if ($waarde = 18) {
        echo "<ul> ik ben $waarde jaar oud en mag dus WEL stemmen</ul>";
    }
    ?>
</body>

</html>