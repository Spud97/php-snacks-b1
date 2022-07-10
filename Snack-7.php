<?php
$classe = [
    [
        "nome" => "Giacomo",
        "cognome" => "Rossini",
        "voti" => [

            "matematica" => rand(3, 10),
            "italiano" => rand(3, 10),
            "storia" => rand(3, 10),
            "scienze" => rand(3, 10),
            "geografia" => rand(3, 10),
            "arte" => rand(3, 10),
            "educazione fisica" => rand(3, 10),

        ]
    ],
    [
        "nome" => "Andrea",
        "cognome" => "Debartolo",
        "voti" => [

            "matematica" => rand(3, 10),
            "italiano" => rand(3, 10),
            "storia" => rand(3, 10),
            "scienze" => rand(3, 10),
            "geografia" => rand(3, 10),
            "arte" => rand(3, 10),
            "educazione fisica" => rand(3, 10),

        ]
    ],
    [
        "nome" => "Marco",
        "cognome" => "Leuzzi",
        "voti" => [

            "matematica" => rand(3, 10),
            "italiano" => rand(3, 10),
            "storia" => rand(3, 10),
            "scienze" => rand(3, 10),
            "geografia" => rand(3, 10),
            "arte" => rand(3, 10),
            "educazione fisica" => rand(3, 10),

        ]
    ],
    [
        "nome" => "Manuel",
        "cognome" => "Costa",
        "voti" => [

            "matematica" => rand(3, 10),
            "italiano" => rand(3, 10),
            "storia" => rand(3, 10),
            "scienze" => rand(3, 10),
            "geografia" => rand(3, 10),
            "arte" => rand(3, 10),
            "educazione fisica" => rand(3, 10),

        ]
    ],
    [
        "nome" => "Giovanna",
        "cognome" => "Capuano",
        "voti" => [

            "matematica" => rand(3, 10),
            "italiano" => rand(3, 10),
            "storia" => rand(3, 10),
            "scienze" => rand(3, 10),
            "geografia" => rand(3, 10),
            "arte" => rand(3, 10),
            "educazione fisica" => rand(3, 10),

        ]
    ],
    [
        "nome" => "Martina",
        "cognome" => "DeSouza",
        "voti" => [

            "matematica" => rand(3, 10),
            "italiano" => rand(3, 10),
            "storia" => rand(3, 10),
            "scienze" => rand(3, 10),
            "geografia" => rand(3, 10),
            "arte" => rand(3, 10),
            "educazione fisica" => rand(3, 10),

        ]
    ],
    [
        "nome" => "Francesca",
        "cognome" => "Zanello",
        "voti" => [

            "matematica" => rand(3, 10),
            "italiano" => rand(3, 10),
            "storia" => rand(3, 10),
            "scienze" => rand(3, 10),
            "geografia" => rand(3, 10),
            "arte" => rand(3, 10),
            "educazione fisica" => rand(3, 10),

        ]
    ],
    [
        "nome" => "Giorgio",
        "cognome" => "Monti",
        "voti" => [

            "matematica" => rand(3, 10),
            "italiano" => rand(3, 10),
            "storia" => rand(3, 10),
            "scienze" => rand(3, 10),
            "geografia" => rand(3, 10),
            "arte" => rand(3, 10),
            "educazione fisica" => rand(3, 10),

        ]
    ],
    [
        "nome" => "Giada",
        "cognome" => "LoPrete",
        "voti" => [

            "matematica" => rand(3, 10),
            "italiano" => rand(3, 10),
            "storia" => rand(3, 10),
            "scienze" => rand(3, 10),
            "geografia" => rand(3, 10),
            "arte" => rand(3, 10),
            "educazione fisica" => rand(3, 10),

        ]
    ],
    [
        "nome" => "Christian",
        "cognome" => "Beretta",
        "voti" => [

            "matematica" => rand(3, 10),
            "italiano" => rand(3, 10),
            "storia" => rand(3, 10),
            "scienze" => rand(3, 10),
            "geografia" => rand(3, 10),
            "arte" => rand(3, 10),
            "educazione fisica" => rand(3, 10),

        ]
    ],
];

$media = [];
foreach ($classe as $alunno) {
    $media[] = round (array_sum($alunno['voti']) / count($alunno['voti']), 1);
}

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
        for ($i = 0; $i < count($classe); $i++) {
            $alunno = $classe[$i];
        ?>
            <div>
                <span class="px-3">Nome:<?php echo $alunno["nome"] ?></span>
                <span class="px-3">Cognome:<?php echo $alunno["cognome"] ?></span>
                <span class="px-3">Media dei voti:<?php echo $media[array_search($alunno, $classe)] ?></span>
            </div>

        <?php } ?>



    </div>
</body>

</html>