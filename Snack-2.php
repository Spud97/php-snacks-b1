<?php
$name = key_exists("name", $_GET) ? trim($_GET["name"]) : false;
$mail = key_exists("mail", $_GET) ? trim($_GET["mail"]) : false;
$age = key_exists("age", $_GET) ? trim($_GET["age"]) : false;

$nameValido = strlen($name) > 3;
$mailValida = strpos($mail, "@") !== false && strpos($mail, ".") !== false;
$ageValida = is_numeric($age) !== false && $age > 0 && $age < 100;

if ($nameValido === false || $mailValida === false || $ageValida === false) {
    echo "Accesso negato";
} else {
    echo "Accesso riuscito";
}
