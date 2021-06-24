<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced</title>
</head>

<body>
    <?php
    $data = array("Voornaam" => "Diego", "Leeftijd" => "18", "Klas" => "0C", "Sport" => "Basketbal", "Woonplaats" => "Amstelveen");
    $achtergrondkleur = $_POST["achtergrondkleur"];
    echo "<body style ='background-color:$achtergrondkleur'>";
    $tekstkleur = $_POST["tekstkleur"];
    echo "<span style='color:$tekstkleur'>";
    ?>
    <table style="width: 40%;">
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
    </table>
    <?php function maakRij($value, $key)
    { ?>
        <table style="width: 40%; border: solid grey; margin: top 10px; margin-right:10px ">
            <tr>
                <td><?php echo "$value"; ?></td>
                <td><?php echo "$key"; ?></td>
            </tr>
        </table>
    <?php } ?>
    <?php
    foreach ($data as $key => $value) {
        maakRij("$key", "$value");
    }

    ?>
</body>


</body>

</html>