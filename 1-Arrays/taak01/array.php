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
    $diego['voornaam'] = 'diego';
    $jelmo['voornaam'] = 'jelmo';
    $hayder['voornaam'] = 'hayder';



    $diego["achternaam"] = 'blom';
    $jelmo["achternaam"] = 'pipo';
    $hayder["achternaam"] = 'habibi';


    $diego['leeftijd'] = 18;
    $jelmo['leeftijd'] = 17;
    $hayder['leeftijd'] = 17;


    $diego['klas'] = '0C';
    $jelmo['klas'] = '0C';
    $hayder['klas'] = '0C';

    print "<pre>";
    print_r($diego) . "<br>";
    print_r($jelmo) . "<br>";
    print_r($hayder) . "<br>";
    print "</pre>";



    ?>

</body>

</html>