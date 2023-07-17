<?php
// Recupero i valori ricevuti, quindi parola censurata e paragrafo
$censored_word = $_GET ["censored_word"];
$paragraph = $_GET ["paragraph"];

//Censurare il paragrafo-> Paragrafo censurato = rimpiazzo della stringa ( parola censurata, "asterischi di censura", paragrafo)
$censored_paragraph = str_replace($censored_word, "***", $paragraph);

// Quanto è lungo paragraph? lo calcoliamo col strlen
$paragraph_lenght = strlen($paragraph);
// Quanto è lungo censored_paragraph? lo calcoliamo
$censored_paragraph_lenght = strlen($censored_paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Paragrafo originale </h2>
    <p><?php echo $paragraph ?></p>
    <em>       Il paragrafo originale era lungo <?= $paragraph_lenght ?> caratteri totali     </em> 

    <br>
    <h2> Paragrafo censored </h2>
    <p><?php echo $censored_paragraph ?></p>
    <em>       Il paragrafo censurato era lungo <?= $censored_paragraph_lenght ?> caratteri totali     </em> 







</body>
</html>