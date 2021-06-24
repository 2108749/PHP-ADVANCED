<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced</title>
</head>
<body>
Achtergrondkleur;
<br>
<select name="achtergrondkleur">
<?php
$kleuren = array("red", "blue", "green", "black", "brown");
foreach ($kleuren as $value) {
echo "<option>$value</option>";
 }
?>
</select>
<br>
 Tekstkleur;
<br>
<select name="tekstkleur">
<?php
foreach ($kleuren as $value) {
echo "<option>$value</option>";
 }
?>
</select>
<br>
</body>
    
</body>
</html>