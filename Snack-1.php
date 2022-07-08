<?php
$tappaCalendario = [
    [
        "casa" => "GEVI NAPOLI BASKET",
        "ospite" => "ARMANI EXCHANGE MILANO",
        "puntiCasa" => rand(1, 99),
        "puntiOspite" => rand(1, 99),
    ],
    [
        "casa" => "ALLIANZ PALLACANESTRO TRIESTE",
        "ospite" => "HAPPY CASA BRINDISI",
        "puntiCasa" => rand(1, 99),
        "puntiOspite" => rand(1, 99),
    ],
    [
        "casa" => "OPENJOBMETIS VARESE",
        "ospite" => "GERMANI BRESCIA",
        "puntiCasa" => rand(1, 99),
        "puntiOspite" => rand(1, 99),
    ],
    [
        "casa" => "BANCO DI SARDEGNA SASSARI",
        "ospite" => "CARPEGNA PROSCIUTTO PESARO",
        "puntiCasa" => rand(1, 99),
        "puntiOspite" => rand(1, 99),
    ],
    [
        "casa" => "FORTITUDO KIGILI BOLOGNA",
        "ospite" => "UNAHOTELS REGGIO EMILIA",
        "puntiCasa" => rand(1, 99),
        "puntiOspite" => rand(1, 99),
    ],
    [
        "casa" => "BERTRAM DERTHONA BASKET TORTONA",
        "ospite" => "NUTRIBULLET TREVISO BASKET",
        "puntiCasa" => rand(1, 99),
        "puntiOspite" => rand(1, 99),
    ],
    [
        "casa" => "UMANA REYER VENEZIA",
        "ospite" => "VANOLI BASKET CREMONA",
        "puntiCasa" => rand(1, 99),
        "puntiOspite" => rand(1, 99),
    ],
    [
        "casa" => "DOLOMITI ENERGIA TRENTINO",
        "ospite" => "VIRTUS SEGAFREDO BOLOGNA",
        "puntiCasa" => rand(1, 99),
        "puntiOspite" => rand(1, 99),
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <div class="container text-center">



        <?php
        for ($i = 0; $i < count($tappaCalendario); $i++) {
            $partita = $tappaCalendario[$i];
        ?>
            <div>
                <span><?php echo $partita["casa"] . " - " . $partita["ospite"] . " | " . $partita["puntiCasa"] . "-" . $partita["puntiOspite"] ?></span>
            </div>


        <?php } ?>



    </div>
</body>

</html>